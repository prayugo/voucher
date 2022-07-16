<?php

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Produk;

class C_Product extends BaseController
{

	public function __construct()
	{
		$this->model = new M_Produk;
	}

	public function index()
	{


		$data=[
				'product' => $this->model->getAllData()
		];
			echo view('product/get',$data);
	}


	public function tambah ()
	{
			$data= [

				'name_product' => $this->request->getPost('name_product'),
				'price' => $this->request->getPost('price')	
			];

		// $success = $this->model->tambah($data);
		// if ($success) {
		// 	return redirect()->to(base_url('product'));
		// }

		$this->model->tambah($data);		
		 if ($this->db->affectedRows()>0) {
            return redirect()-> to('product')->with('success','Data Berhasil Ditambahkan');
        }
	}

	public function hapus($id)
	{

			$this->model->hapus($id);		
		 if ($this->db->affectedRows()>0) {
            return redirect()-> to('product')->with('success','Data Berhasil Dihapus');
        }


	}

	public function ubah()
	{

		$id=$this->request->getPost('id');
		$data= [

				'name_product' => $this->request->getPost('name_product'),
				'price' => $this->request->getPost('price')	
			];

		$this->model->ubah($data, $id);		
		 if ($this->db->affectedRows()>0) {
            return redirect()-> to('product')->with('success','Data Berhasil Diubah');
        }
		
	}


}
