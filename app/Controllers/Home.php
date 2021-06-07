<?php namespace App\Controllers;

class Home extends BaseController
{
	/**
	 * Global Environment
	 */
	public $config;
    public function __construct() {
        $this->config = new \Config\Params;
		helper(['user','utility']);
    }

	public function index()
	{
			$data = [];
			echo view('new-templates/header', $data);
			echo view('homepage');
			echo view('new-templates/footer');
	}

	//--------------------------------------------------------------------

}
