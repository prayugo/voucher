<?php

namespace App\Controllers;

class C_Voucher extends BaseController
{
    public function index()
    {     
        $query = $this->db->query("select * from tdvoucher");
        $data['voucher']=$query->getresult();
        return view('voucher/get',$data);
       
    }

    public function create_voucher(){
    	return view ('voucher/add');
    }


}
