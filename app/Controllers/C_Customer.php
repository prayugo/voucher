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

    public function create()
    {
    	return view('customer/add');
    }

    public function simpan_data()
    {

            // st1
        $data=$this->request->getpost();

        $builder = $this->db->table('tdcustomer')-> insert($data);

        if ($this->db->affectedRows()>0) {
            return redirect()-> to(site_url('customer'))->with('success','Data Berhasil Ditambahkan');
        }


    }

}
