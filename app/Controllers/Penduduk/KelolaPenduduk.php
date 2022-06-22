<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_penduduk;

class KelolaPenduduk extends Controller
{

	public function index()
	{
		$model = new M_penduduk();

		$data['penduduks'] = $model->orderBy('id_penduduk', 'DESC')->findAll();

		return view('penduduk/v_kelola_penduduk', $data);
	}

	public function create()
	{
		return view('add_penduduk');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new M_penduduk();

		$data = [

			'nama' => $this->request->getVar('nama'),
			'nik' => $this->request->getVar('nik'),
			'email' => $this->request->getVar('email'),
			'id_keluarga' => $this->request->getVar('id_keluarga'),
			'kk_level' => $this->request->getVar('kk_level'),
			'no_kk_sebelumnya' => $this->request->getVar('no_kk_sebelumnya'),
			'id_penduduk_hubungan' => $this->request->getVar('id_penduduk_hubungan'),
			'jk' => $this->request->getVar(),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
			'id_penduduk_agama' => $this->request->getVar('id_penduduk_agama'),
			'id_penduduk_pendidikan' => $this->request->getVar('id_penduduk_pendidikan'),
			'id_penduduk_pendidikan_berjalan' => $this->request->getVar('id_penduduk_pendidikan_berjalan'),
			'id_penduduk_pekerjaan' => $this->request->getVar('id_penduduk_pekerjaan'),
			'status_kawin' => $this->request->getVar('status_kawin'),
			'id_warganegara' => $this->request->getVar('id_warganegara'),
			'nama_ayah' => $this->request->getVar('nama_ayah'),
			'nama_ibu' => $this->request->getVar('nama_ibu'),
			'id_gol_darah' => $this->request->getVar('id_gol_darah'),
			'alamat_sebelumnya' => $this->request->getVar('alamat_sebelumnya'),
			'alamat_sekarang' => $this->request->getVar('alamat_sebelumnya'),
			'akte_lahir' => $this->request->getVar('akte_lahir'),
		];

		$save = $model->insert($data);

		return redirect()->to(base_url('penduduk/v_kelola_penduduk'));
	}

	public function edit($id = null)
	{

		$model = new M_penduduk();

		$data['penduduks'] = $model->where('id_penduduk', $id)->first();

		return view('penduduk/edit_penduduk', $data);
	}

	public function update()
	{

		helper(['form', 'url']);

		$model = new M_penduduk();

		$id = $this->request->getVar('id_penduduk');

		$data = [

			'nama' => $this->request->getVar('nama'),
			'nik' => $this->request->getVar('nik'),
			'email' => $this->request->getVar('email'),
			'id_keluarga' => $this->request->getVar('id_keluarga'),
			'kk_level' => $this->request->getVar('kk_level'),
			'no_kk_sebelumnya' => $this->request->getVar('no_kk_sebelumnya'),
			'id_penduduk_hubungan' => $this->request->getVar('id_penduduk_hubungan'),
			'jk' => $this->request->getVar(),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
			'id_penduduk_agama' => $this->request->getVar('id_penduduk_agama'),
			'id_penduduk_pendidikan' => $this->request->getVar('id_penduduk_pendidikan'),
			'id_penduduk_pendidikan_berjalan' => $this->request->getVar('id_penduduk_pendidikan_berjalan'),
			'id_penduduk_pekerjaan' => $this->request->getVar('id_penduduk_pekerjaan'),
			'status_kawin' => $this->request->getVar('status_kawin'),
			'id_warganegara' => $this->request->getVar('id_warganegara'),
			'nama_ayah' => $this->request->getVar('nama_ayah'),
			'nama_ibu' => $this->request->getVar('nama_ibu'),
			'id_gol_darah' => $this->request->getVar('id_gol_darah'),
			'alamat_sebelumnya' => $this->request->getVar('alamat_sebelumnya'),
			'alamat_sekarang' => $this->request->getVar('alamat_sebelumnya'),
			'akte_lahir' => $this->request->getVar('akte_lahir'),
		];

		$save = $model->update($id, $data);

		return redirect()->to(base_url('penduduk/v_kelola_penduduk'));
	}

	public function delete($id = null)
	{

		$model = new M_penduduk();

		$data['penduduks'] = $model->where('id_penduduk', $id)->delete();

		return redirect()->to(base_url('penduduk/v_kelola_penduduk'));
	}
}
