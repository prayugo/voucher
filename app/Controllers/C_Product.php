<?php

namespace App\Controllers;

class C_Product extends BaseController
{
    public function index()
    {
        return view('product/get');
    }
}
