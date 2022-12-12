<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiModel extends Model
{
    protected $table = 'tbl_konfirmasi';
    protected $primaryKey = 'id_konfirmasi';
    protected $allowedFields = [
        'id_konfirmasi',
        'id_pendaftaran',
        'status_administrasi',
        'bukti_administrasi',
        'tanggal_administrasi'
    ];

    public function getKodeKonfirmasi()
    {
        return 'KONF' . Date('ymds');;
    }
}
