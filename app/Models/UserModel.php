<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	protected $table = 'tbl_user';
	protected $primaryKey = 'id_user';
	protected $allowedFields = [
		'role',
		'nama_depan',
		'nama_belakang',
		'email',
		'password',
		'jenis_kelamin',
		'tanggal_lahir',
		'alamat_lengkap',
		'kota',
		'no_handphone',
		'id_pendaftaran'
	];
}
