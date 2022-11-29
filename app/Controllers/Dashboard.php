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
		$dataCourse = $this->coursesModel->getCourses();
		$data = array(
			'dataCourses'       => $dataCourse,
		);
		return view('dashboard/kelas', $data);
	}

	public function json()
	{
		return DataTables::use('tbl_kelas')->addColumn('action', function ($data) {
			return '<a href="' . $data->id_kelas . '" class="btn btn-primary btn-sm">Edit</a> <a href="' . $data->id_kelas . '" class="btn btn-danger btn-sm">Hapus</a>';
		})->rawColumns(['action'])->make();
	}
}
