<?php

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Generate_Voucher;

class C_Generate_Voucher extends BaseController
{

public function index(){


	return view('generate_voucher/get');
}



}

