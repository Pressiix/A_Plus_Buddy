<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AddressModel;

class Users extends BaseController
{
	/**
	 * Global Environment
	 */
	public $config;
    public function __construct() {
        $this->config = new \Config\Params;
		helper(['form','user','address','utility']);
    }

	public function index()
	{
		$data = [];


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->getUserByEmail($this->request->getVar('email'));

				$this->setUserSession($user);
				//$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to(base_url().'/');

			}
		}

		if(checkLogin())
		{
			return redirect()->to(base_url().'/');
		}else{
			echo view('new-templates/header', $data);
			echo view('login');
			echo view('new-templates/footer');
		}
		
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'role' => $user['role_name'],
			'isLoggedIn' => true,
		];

		// echo "<pre/>"; print_r($data); exit;

		session()->set($data);
		return true;
	}

	public function register(){
		if(!checkLogin())
		{
			$data = [];
			helper(['form']);

			if ($this->request->getMethod() == 'post') {
				//let's do the validation here
				$rules = [
					'firstname' => 'required|min_length[3]|max_length[20]',
					'lastname' => 'required|min_length[3]|max_length[20]',
					'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
					'password' => 'required|min_length[8]|max_length[255]',
					'password_confirm' => 'matches[password]',
				];

				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
					$model = new UserModel();

					$newData = [
						'firstname' => $this->request->getVar('firstname'),
						'lastname' => $this->request->getVar('lastname'),
						'email' => $this->request->getVar('email'),
						'password' => $this->request->getVar('password'),
					];
					$model->save($newData);
					$session = session();
					$session->setFlashdata('success', 'Successful Registration');
					return redirect()->to(base_url().'/');

				}
			}

        	$data['province'] = getProvince();

			echo view('new-templates/header', $data);
			echo view('register', $data);
			echo view('new-templates/footer');
		}else{
			return redirect()->to('http://localhost/a-plus-buddy/login');
		}

	}

	public function profile(){
		
		if(checkLogin())
		{
			$data = [];
			helper(['form']);
			$model = new UserModel();
	
			if ($this->request->getMethod() == 'post') {
				//let's do the validation here
				$rules = [
					'firstname' => 'required|min_length[3]|max_length[20]',
					'lastname' => 'required|min_length[3]|max_length[20]',
					];
	
				if($this->request->getPost('password') != ''){
					$rules['password'] = 'required|min_length[8]|max_length[255]';
					$rules['password_confirm'] = 'matches[password]';
				}
	
	
				if (! $this->validate($rules)) {
					$data['validation'] = $this->validator;
				}else{
	
					$newData = [
						'id' => session()->get('id'),
						'firstname' => $this->request->getPost('firstname'),
						'lastname' => $this->request->getPost('lastname'),
						];
						if($this->request->getPost('password') != ''){
							$newData['password'] = $this->request->getPost('password');
						}
					$model->save($newData);
	
					session()->setFlashdata('success', 'Successfuly Updated');
					return redirect()->to(base_url().'/profile');
	
				}
			}
	
			$data['user'] = $model->where('id', session()->get('id'))->first();
			echo view('new-templates/header', $data);
			echo view('profile');
			echo view('new-templates/footer');
		}else{
			return redirect()->to(base_url().'/login');
		}
		
	}

	public function logout(){
		session()->destroy();
		return redirect()->to(base_url().'/login');
	}

	//--------------------------------------------------------------------

}
