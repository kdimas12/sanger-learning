<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CoursesModel;
use Irsyadulibad\DataTables\DataTables;

class Dashboard extends BaseController
{
	public function __construct()
	{
		$this->coursesModel = new CoursesModel();
	}

	public function index()
	{
		return view('dashboard/index');
	}

	public function kelas()
	{
		return view('dashboard/kelas');
	}

	public function tambah()
	{
		$validation =  \Config\Services::validation();
		$validation->setRules([
			'nama_kelas' => 'required'
		]);

		$isDataValid = $validation->withRequest($this->request)->run();
		// jika data vlid, maka simpan ke database
		if ($isDataValid) {
			$dataKelas = [
				'id_kelas' => $this->request->getVar('id_kelas'),
				'nama_kelas' => $this->request->getVar('nama_kelas'),
				'id_jenis' => $this->request->getVar('id_jenis'),
				'ket_kelas' => $this->request->getVar('ket_kelas'),
				'harga' => $this->request->getVar('harga'),
			];
			$this->coursesModel->insert($dataKelas);
			return redirect()->to(base_url('dashboard/kelas'));
		}
		echo view('dashboard/kelas_tambah');
	}

	public function edit($id)
	{
		$data['kelas'] = $this->coursesModel->where('id_kelas', $id)->first();

		$validation =  \Config\Services::validation();
		$validation->setRules([
			'nama_kelas' => 'required'
		]);

		$isDataValid = $validation->withRequest($this->request)->run();
		// jika data vlid, maka simpan ke database
		if ($isDataValid) {
			$dataKelas = [
				'id_kelas' => $this->request->getVar('id_kelas'),
				'nama_kelas' => $this->request->getVar('nama_kelas'),
				'id_jenis' => $this->request->getVar('id_jenis'),
				'ket_kelas' => $this->request->getVar('ket_kelas'),
				'harga' => $this->request->getVar('harga'),
			];
			$this->coursesModel->update($id, $dataKelas);
			return redirect()->to(base_url('dashboard/kelas'));
		}

		echo view('dashboard/kelas_edit', $data);
	}

	public function delete($id)
	{
		$this->coursesModel->delete($id);
		return redirect('dashboard/kelas');
	}

	public function json()
	{
		return DataTables::use('tbl_kelas')->addColumn('action', function ($data) {
			$uri = base_url() . '/dashboard/kelas/' . $data->id_kelas . '/edit';

			return '<a href="' . $uri . '" class="btn btn-primary btn-sm">Edit</a> <a href="' . $data->id_kelas . '" class="btn btn-danger btn-sm">Hapus</a>';
		})->rawColumns(['action'])->make();
	}
}
