<?php

namespace App\Controllers;

class C_Customer extends BaseController
{
    public function index()
    {
        return view('customer/get');
    }
}
