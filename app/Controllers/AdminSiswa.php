<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminSiswa extends BaseController
{
    public function index()
    {
        return view('dashboard/siswa');
    }
}
