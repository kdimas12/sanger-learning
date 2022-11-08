<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiModel extends Model
{
    public function getKonfirmasi()
    {
        return $this->db->table('tbl_konfirmasi')->get()->getResultArray();
    }

    public function insertKonfirmasi($dataKonfirmasi)
    {
        return $this->db->table('tbl_konfirmasi')->insert($dataKonfirmasi);
    }
}
