<?php

namespace App\Controllers;

class C_Customer extends BaseController
{
    public function index()
    {

    	//st1 bldr
		// $builder = $this->db->table('tdcustomer');
		// $query   = $builder->get()->getresult();
		// $data['customer'] = $query;

 
		//st2 mnl
		$query = $this->db->query("select * from tdcustomer");
		$data['customer'] = $query->getresult();
        return view('customer/get',$data);

    }
}
