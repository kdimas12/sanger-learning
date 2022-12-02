<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dbsanger extends Migration
{
	public function up()
	{
		// create tbl_jenis_kelas
		$this->forge->addField([
			'id_jenis' => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'nama_jenis' => ['type' => 'VARCHAR', 'constraint' => 20],
		]);

		$this->forge->addPrimaryKey('id_jenis');
		$this->forge->createTable('tbl_jenis_kelas', false, ['ENGINE' => 'InnoDB']);

		// create tbl_kelas
		$this->forge->addField([
			'id_kelas'   => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'nama_kelas' => ['type' => 'VARCHAR', 'constraint' => 20],
			'id_jenis'   => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'ket_kelas'  => ['type' => 'TEXT', 'constraint' => 1000],
			'harga'      => ['type' => 'INT', 'constraint' => 20],
		]);

		$this->forge->addPrimaryKey('id_kelas');
		$this->forge->addKey('id_jenis');
		$this->forge->addForeignKey('id_jenis', 'tbl_jenis_kelas', 'id_jenis', 'CASCADE', 'SET NULL');
		$this->forge->createTable('tbl_kelas', false, ['ENGINE' => 'InnoDB']);

		// create tbl_pendaftaran
		$this->forge->addField([
			'id_pendaftaran'      => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'id_kelas'            => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'tanggal_pendaftaran' => ['type' => 'DATETIME'],
		]);

		$this->forge->addPrimaryKey('id_pendaftaran');
		$this->forge->addKey('id_kelas');
		$this->forge->addForeignKey('id_kelas', 'tbl_kelas', 'id_kelas', 'CASCADE', 'SET NULL');
		$this->forge->createTable('tbl_pendaftaran', false, ['ENGINE' => 'InnoDB']);

		// create tbl_konfirmasi 
		$this->forge->addField([
			'id_konfirmasi' => ['type' => 'VARCHAR', 'constraint' => 15],
			'id_pendaftaran' => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true],
			'status_administrasi' => ['type' => 'ENUM', 'constraint' => ['lunas', 'belum lunas'], 'default' => 'belum lunas'],
			'bukti_administrasi' => ['type' => 'VARCHAR', 'constraint' => 255],
			'tanggal_administrasi' => ['type' => 'DATE', 'null' => true]
		]);

		$this->forge->addPrimaryKey('id_konfirmasi');
		$this->forge->addKey('id_pendaftaran');
		$this->forge->addForeignKey('id_pendaftaran', 'tbl_pendaftaran', 'id_pendaftaran', 'CASCADE', 'SET NULL');
		$this->forge->createTable('tbl_konfirmasi', false, ['ENGINE' => 'InnoDB']);

		//create tbl_user
		$this->forge->addField([
			'id_user'        => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
			'role'           => ['type' => 'ENUM', 'constraint' => ['user', 'admin'], 'default' => 'user'],
			'nama_depan'     => ['type' => 'VARCHAR', 'constraint' => 255],
			'nama_belakang'  => ['type' => 'VARCHAR', 'constraint' => 255],
			'email'          => ['type' => 'VARCHAR', 'constraint' => 20],
			'password'		 => ['type' => 'VARCHAR', 'constraint' => 255],
			'jenis_kelamin'  => ['type' => 'ENUM', 'constraint' => ['pria', 'wanita'], 'null' => true],
			'tanggal_lahir'  => ['type' => 'DATE', 'null' => true],
			'alamat_lengkap' => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
			'kota'           => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
			'no_handphone'   => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
			'id_pendaftaran' => ['type' => 'VARCHAR', 'constraint' => 15, 'null' => true]
		]);

		$this->forge->addPrimaryKey('id_user');
		$this->forge->addKey('id_pendaftaran');
		$this->forge->addForeignKey('id_pendaftaran', 'tbl_pendaftaran', 'id_pendaftaran', 'CASCADE', 'SET NULL');
		$this->forge->createTable('tbl_user', false, ['ENGINE' => 'InnoDB']);
	}

	public function down()
	{
		// drop tbl_jenis_kelas
		$this->forge->dropTable('tbl_jenis_kelas');
		// drop tbl_kelas 
		$this->forge->dropTable('tbl_kelas');
		// drop tbl_pendaftaran 
		$this->forge->dropTable('tbl_pendaftaran');
		// drop tbl_pendaftaran
		$this->forge->dropTable('tbl_konfirmasi');
		// drop tbl_user 
		$this->forge->dropTable('tbl_user');
	}
}
