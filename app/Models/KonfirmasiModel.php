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

    public function getKonfirmasiData($id_konfirmasi)
    {
        $query = $this->db->table('tbl_konfirmasi')->where('id_konfirmasi', $id_konfirmasi)->join('tbl_pendaftaran', 'tbl_konfirmasi.id_pendaftaran = tbl_pendaftaran.id_pendaftaran')->join('tbl_kelas', 'tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas')->join('tbl_jenis_kelas', 'tbl_kelas.id_jenis = tbl_jenis_kelas.id_jenis')->limit(1)->get();
        return $query;
    }
}
