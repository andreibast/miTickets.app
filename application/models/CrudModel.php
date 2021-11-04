<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model {

	public function __construct() 
	{
		$this->load->database();
	}

	public function createData($current_picture_name)
	{
		$data = array(
			'denumire' => $this->input->post('denumire'),
			'descriere' => $this->input->post('descriere'),
			'data' => $this->input->post('data'),
			'poza' => $current_picture_name,
			'parinte' => $this->input->post('parinte')
		);
		$this->db->insert('tichete', $data);
	}

	public function getAllData()
	{
		$query = $this->db->query('SELECT * FROM tichete ORDER BY `data` DESC');
		return $query->result();
	}

	public function getData($id)
	{
		$query = $this->db->query('SELECT * from tichete WHERE `id`=' .$id);
		return $query->row();
	}

	public function updateData($id)
	{
		$data = array(
			'denumire' => $this->input->post('denumire'),
			'descriere' => $this->input->post('descriere'),
			'data' => $this->input->post('data'),
			'poza' => $this->input->post('poza')
		);
		$this->db->where('id', $id);
		$this->db->update('tichete', $data);
	}

	public function deleteData($id)
	{
		$query = $this->db->query('SELECT * from tichete WHERE `id`='.$id);
		$picture_link = $query->row()->poza;
		unlink('./uploads/'.$picture_link);
		$this->db->where('id', $id);
		$this->db->delete('tichete');
	}
}
