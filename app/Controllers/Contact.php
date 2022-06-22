<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ContactModel;
class Contact extends BaseController
{
	public function __construct(){
    }
	public function index()
	{
		$data['title']   = "Contact List";
		$model = new ContactModel();
		$data['posts'] = $model->findAll();
		
		return view('Views/view',$data);
	}
	public function create()
	{
		$data['title']   = "Contact";
		return view('contact',$data);
	}
	public function save(){
		$data = $this->request->getVar();
		$validation =  \Config\Services::validation();
		$validation->setRules([
			'name' => 'required|string',
			'age' => 'required|integer|greater_than[0]',
			'email' => 'required|valid_email'
		]);
		$res = $validation->withRequest($this->request)
			->run();
		if(!$res){
		
			$data['title'] = "Contact";
			echo view('contact',$data, [
					'validation' => $validation
			]);
		}
		else{
			/*$contactModel = new \App\Models\ContactModel();*/
			$session = \Config\Services::session();
			try{
				$model = new ContactModel();
				$user=$model->insert($data);
				$session->setFlashdata('msg', 'Record Inserted successfully');
			}
			catch(\Exception $e){
				$session->setFlashdata('msg', 'Something went wrong');
			}
			$data['title'] = "Contact";
			return redirect()->to( base_url('Views/contact') );
		}
	}
	public function view_edit($id = null)
    {
		$model = new ContactModel();
		$data['user'] = $model->where('id', $id)->first();
		return view('update', $data);
    }
	public function update($id = null){
		$data = $this->request->getVar();
		$id = $this->request->getVar('id');
		$validation =  \Config\Services::validation();
		$validation->setRules([
			'name' => 'required|string',
			'age' => 'required|integer|greater_than[0]',
			'email' => 'required|valid_email'
		]);
		$res = $validation->withRequest($this->request)
			->run();
		if(!$res){
		
			$data['title'] = "Contact";
			echo view('contact',$data, [
					'validation' => $validation
			]);
		}
		else{
			/*$contactModel = new \App\Models\ContactModel();*/
			$session = \Config\Services::session();
			try{
				$model = new ContactModel();
				$user=$model->update($id,$data);
				$session->setFlashdata('msg', 'Record Updated successfully');
			}
			catch(\Exception $e){
				$session->setFlashdata('msg', 'Something went wrong');
			}
			$data['title'] = "Contact";
			return redirect()->to( base_url('Views/contact') );
		}
	}
	public function delete($id = null){
		$model = new ContactModel();
		$data['user'] = $model->where('id', $id)->delete();
		return redirect()->to( base_url('Views/contact') );
    }
}