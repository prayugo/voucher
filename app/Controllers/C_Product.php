<?php

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Produk;

class C_Product extends BaseController
{


	 

    public function index()
    {
    	$model=new M_Produk();
    	 $query = $this->db->query("select * from tdproduct");
		$data['product'] = $query->getresult();
        return view('product/get',$data);
        
    }


    public function save()
    {
     	  
     	$model=new M_Produk();  
        $data = array(
            'name_product'        => $this->request->getPost('name_product'),
            'price'       => $this->request->getPost('price'),
            
        );
        
        $model->saveProduct($data);


        if ($this->db->affectedRows()>0) {
            return redirect()-> to('product')->with('success','Data Berhasil Ditambahkan');
        }
        
    }
}
