<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("CrudModel");
	}

	public function index()
	{
		$data['result'] = $this->CrudModel->getAllData();
		$this->load->view('crudView', $data);
	}

	public function create()
	{
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['upload_path'] = './uploads/';
		$config['encrypt_name'] = true;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('poza')){
			//print_r($this->upload->data());  //for testing given link
			$currentPictureName= $this->upload->data()['file_name'];
			$this->CrudModel->createData($currentPictureName);
		}else{
			//print_r($this->upload->display_errors());  //see errors display
		}
		redirect("../");
	}

	public function edit($id)
	{
		$data['row'] = $this->CrudModel->getData($id);
		$this->load->view('crudEdit', $data);
	}

	public function update($id)
	{
		$this->CrudModel->updateData($id);
		redirect("../");
	}

	public function delete($id)
	{
		$this->CrudModel->deleteData($id);
		redirect("../");
	}
}
