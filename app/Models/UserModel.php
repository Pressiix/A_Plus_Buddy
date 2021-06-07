<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $allowedFields = ['firstname', 'lastname', 'email', 'password', 'updated_at'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  public function getUserByEmail($email)
  {
    $this->select('*');
    $this->join('user_has_role', $this->table.'.id = user_has_role.user_id');
    $this->join('users_role', 'users_role.role_id = user_has_role.role_id');
    $this->where('email', $email);
    
    return $this->first();
  }


  protected function beforeInsert(array $data){
    $data = $this->passwordHash($data);
    $data['data']['created_at'] = date('Y-m-d H:i:s');

    return $data;
  }

  protected function beforeUpdate(array $data){
    $data = $this->passwordHash($data);
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function passwordHash(array $data){
    if(isset($data['data']['password']))
      $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

    return $data;
  }


}
