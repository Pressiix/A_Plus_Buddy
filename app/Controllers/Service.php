<?php namespace App\Controllers;

class Service extends BaseController
{
    /**
     * Global Environment
     */
    public $config;
    public function __construct() {
        $this->config = new \Config\Params;
        helper(['user','address','utility']);
    }

    public function subdistrict()
    {
        if ($this->request->getMethod() == 'get') {
            return $this->response->setJSON(getSubDistrict($_GET['district_id']));
        }
    }

    public function district()
    {
        $data = [];
        if ($this->request->getMethod() == 'get') {
            return $this->response->setJSON(getDistrict($_GET['province_id']));
        }
    }


}
