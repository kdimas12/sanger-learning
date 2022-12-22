<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KonfirmasiModel;

class Invoice extends BaseController
{
    public function __construct()
    {
        $this->konfirmasi = new KonfirmasiModel();
    }

    public function index($id_konfirmasi)
    {
        $dataKonfirmasi = $this->konfirmasi->getKonfirmasiData($id_konfirmasi)->getResultArray();

        $data['konfirmasi'] = $dataKonfirmasi[0];
        return view('invoice', $data);
    }
}
