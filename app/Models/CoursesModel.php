<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
	protected $table = 'tbl_kelas';
	protected $primaryKey = 'id_kelas';
	protected $allowedFields = [
		'id_kelas',
		'nama_kelas',
		'id_jenis',
		'ket_kelas',
		'harga'
	];
}
