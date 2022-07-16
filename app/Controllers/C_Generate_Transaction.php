<?php

namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\M_Generate_Transaction;

class C_Generate_Transaction extends BaseController
{


public function index(){

	echo view('generate_transaction/get');
}


}