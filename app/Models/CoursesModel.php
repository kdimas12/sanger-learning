<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
	public function getCoursesDistinct()
	{
		$query = $this->db->table('tbl_kelas')->join('tbl_jenis_kelas', 'tbl_kelas.id_jenis = tbl_jenis_kelas.id_jenis')->get()->getResultArray();
		return $query;
	}

	public function getCourses()
	{
		$query = $this->db->table('tbl_kelas')->join('tbl_jenis_kelas', 'tbl_kelas.id_jenis = tbl_jenis_kelas.id_jenis')->orderBy('nama_jenis', 'DESC')->get()->getResultArray();
		return $query;
	}

	public function insertPendaftaranKelas($dataPendaftaran)
	{
		return $this->db->table('tbl_pendaftaran')->insert($dataPendaftaran);
	}

	public function getCoursesDataTables()
	{
		$query = $this->db->table('tbl_kelas')->select('id_kelas, nama_kelas, id_jenis, ket_kelas, harga');
		return $query;
	}
}
