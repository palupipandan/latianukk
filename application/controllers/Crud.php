<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{

	}

	public function add(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'id'=>$id,
			'username' => $username,
			'fullname' => $fullname,
			'password' => $password,
			'level' => $level	
			);

		$this->m_data->input_data($data,'user');
		redirect('admin/User');
	}


	public function update(){
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => $password,
			'level' => $level,
			);

		$where = array(
			'id' => $id
			);
		$this->m_data->update_data($where,$data,'user');
		redirect('admin/User');

	}

	public function delete($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('admin/User');
	}
}