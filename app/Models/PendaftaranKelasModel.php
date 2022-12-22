<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranKelasModel extends Model
{
    protected $table = 'tbl_pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    protected $allowedFields = [
        'id_pendaftaran',
        'id_kelas',
        'tanggal_pendaftaran',
    ];

    public function getKodePendaftaran()
    {
        $query = $this->db->table('tbl_pendaftaran')->select('RIGHT(id_pendaftaran, 2) as id_pendaftaran')->orderBy('id_pendaftaran', 'DESC')->limit(1)->get();

        $kode = "";
        if ($query->resultID->num_rows <> 0) {
            $data = $query->getRow();
            $kode = intval($data->id_pendaftaran) + 1;
        } else {
            $kode = 1;
        }
        $tgl = date('dmy');
        $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodetampil = "PK" . $tgl . $batas;  //format kode
        return $kodetampil;
    }
}
