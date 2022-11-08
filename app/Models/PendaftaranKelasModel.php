<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranKelasModel extends Model
{
    public function getKodePendaftaran()
    {
        $query = $this->db->table('tbl_pendaftaran')->select('MAX(RIGHT(id_pendaftaran),3) as id', FALSE);
        $kd = "";
        if ($query->countAllResults() > 0) {
            foreach ($query->get()->getResult() as $k) {
                $tmp = ((int) $k->id_pendaftaran) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "PK" . date('dmy') . $kd;
    }

    public function getPendaftaranKelas()
    {
        $query = $this->db->table('tbl_pendaftaran')->get()->getResultArray();
        return $query;
    }

    public function insertPendaftaranKelas($dataPendaftaran)
    {
        return $this->db->table('tbl_pendaftaran')->insert($dataPendaftaran);
    }
}
