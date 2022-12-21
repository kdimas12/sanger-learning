<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invoice extends BaseController
{
    public function index()
    {
        return view('invoice');
    }
}
