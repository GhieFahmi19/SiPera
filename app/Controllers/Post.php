<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;

class Post extends Controller
{
	/**
	 * index function
	 */
	public function index()
	{

		//model initialize
		$postModel = new PostModel();

		//pager initialize
		$pager = \Config\Services::pager();

		$data = array(
			'posts' => $postModel->paginate(2, 'post'),
			'pager' => $postModel->pager
		);

		return view('keluarga/data_pend_kk', $data);
	}

	/**
	 * create function
	 */
	public function create()
	{
		return view('keluarga/add_pend_kk');
	}

	/**
	 * store function
	 */
	public function store()
	{
		//load helper form and URL
		helper(['form', 'url']);

		//define validation
		$validation = $this->validate([
			'id_prov' => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Masukkan Kode Provinsi.'
				]
			],
			'provinsi'    => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Masukkan Nama Provinsi.'
				]
			],
		]);

		if (!$validation) {

			//render view with error validation message
			return view('keluarga/add_pend_kk', [
				'validation' => $this->validator
			]);
		} else {

			//model initialize
			$postModel = new PostModel();

			//insert data into database
			$postModel->insert([
				'id_prov'   => $this->request->getPost('id_prov'),
				'provinsi' => $this->request->getPost('provinsi'),
			]);

			//flash message
			session()->setFlashdata('message', 'data Berhasil Disimpan');

			return redirect()->to(base_url('post'));
		}
	}

	/**
	 * edit function
	 */
	public function edit($id)
	{

		//model initialize
		$postModel = new PostModel();

		$data = array(
			'post' => $postModel->find($id)
		);

		return view('keluarga/edit_pend_kk', $data);
	}

	/**
	 * update function
	 */
	public function update($id)
	{
		//load helper form and URL
		helper(['form', 'url']);

		//define validation
		$validation = $this->validate([
			'id_prov' => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Masukkan Kode Provinsi.'
				]
			],
			'Provinsi'    => [
				'rules'  => 'required',
				'errors' => [
					'required' => 'Masukkan nama Provinsi.'
				]
			],
		]);

		if (!$validation) {

			//model initialize
			$postModel = new PostModel();

			//render view with error validation message
			return view('keluarga/edit_pend_kk', [
				'post' => $postModel->find($id),
				'validation' => $this->validator
			]);
		} else {

			//model initialize
			$postModel = new PostModel();

			//insert data into database
			$postModel->update($id, [
				'id_prov'   => $this->request->getPost('id_prov'),
				'provinsi' => $this->request->getPost('provinsi'),
			]);

			//flash message
			session()->setFlashdata('message', 'Post Berhasil Diupdate');

			return redirect()->to(base_url('post'));
		}
	}
}
