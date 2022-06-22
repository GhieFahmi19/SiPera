<?php

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Users extends Controller
{

	public function index()
	{
		$model = new UserModel();

		$data['users'] = $model->orderBy('id', 'DESC')->findAll();

		return view('users', $data);
	}

	public function create()
	{
		return view('create-user');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new M_Users();

		$data = [

			'name' => $this->request->getVar('name'),
			'email'  => $this->request->getVar('email'),
		];

		$save = $model->insert($data);

		return redirect()->to(base_url('users'));
	}

	public function edit($id = null)
	{

		$model = new UserModel();

		$data['user'] = $model->where('id', $id)->first();

		return view('edit-user', $data);
	}

	public function update()
	{

		helper(['form', 'url']);

		$model = new M_Users();

		$id = $this->request->getVar('id');

		$data = [

			'nama' => $this->request->getVar('name'),
			'gbr'  => $this->request->getVar('gbr'),
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),

		];

		$save = $model->update($id, $data);

		return redirect()->to(base_url('users'));
	}

	public function delete($id = null)
	{

		$model = new M_Users();

		$data['user'] = $model->where('id', $id)->delete();

		return redirect()->to(base_url('users'));
	}
}
