<?php 

    /**
    *	PHP version 7
    * 
    *	@category   helper
    *	@author Watcharaphon Piamphuetna <watcharapon.piam@gmail.com>
    *	@copyright copyright (c) 2021 A PLus Buddy.
    */

    use App\Models\AddressModel;

    /**
     * return Province object
     */
    function getProvince()
    {
        $data = [];
        if(is_file(FCPATH."data-json\province.json"))
        {
            $data = json_decode(file_get_contents(FCPATH."data-json\province.json"));
        }else{
            $model = new AddressModel();
            $data = $model->getProvince();
        }

        return $data;
    }

    /**
     * return District object
     */
    function getDistrict($province_id)
    {
        $data = [];

        if(is_file(FCPATH."data-json\district.json"))
        {
            $data = json_decode(file_get_contents(FCPATH."data-json\district.json"));
        }else{
            $model = new AddressModel();
            $data = $model->getDistrict();
        }

        foreach($data as $key=>$item)
        {
            if($item->province_id !== $province_id)
            {
                unset($data[$key]);
            }
        }

        return $data;
    }

    /**
     * return Sub District object
     */
    function getSubDistrict($district_id)
    {
        $data = [];

        if(is_file(FCPATH."data-json\sub-district.json"))
        {
            $data = json_decode(file_get_contents(FCPATH."data-json\sub-district.json"));
        }else{
            $model = new AddressModel();
            $data = $model->getSubDistrict();
        }

        foreach($data as $key=>$item)
        {
            if($item->amphure_id !== $district_id)
            {
                unset($data[$key]);
            }
        }

        return $data;
    }
?>