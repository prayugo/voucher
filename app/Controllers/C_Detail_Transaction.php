<?php

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Detail_Transaction;

class C_Detail_Transaction extends BaseController
{


	public function __construct()
	{
		$this->model = new M_Detail_Transaction;
	}

	public function index()
	{


		$data=[
				'product' => $this->model->getAllData()
		];
			echo view('detail_transaction/get',$data);
	}

}	