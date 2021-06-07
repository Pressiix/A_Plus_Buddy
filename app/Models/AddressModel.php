<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class AddressModel extends Model
{

    public function getProvince()
    {
        $queryResult = Database::connect()
                ->table('provinces')
                ->orderBy('name_th', 'ASC')
                ->get();
        
        return $queryResult->getResult();
    }

    public function getDistrict()
    {
        $queryResult = Database::connect()
                ->table('amphures')
                ->orderBy('name_th', 'ASC')
                ->get();
        
        return $queryResult->getResult();
    }

    public function getSubDistrict()
    {
        $queryResult = Database::connect()
                ->table('districts')
                ->orderBy('name_th', 'ASC')
                ->getWhere('zip_code <> 0');
        
        return $queryResult->getResult();
    }

}
