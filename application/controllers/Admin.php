<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('admin');
	}

	public function user()
	{
		$data['user'] = $this->m_data->tampil_data('user')->result();
		$this->load->view('user',$data);
	}


	public function form()
	{
		$data['user'] = null;
		$this->load->view('Form',$data);
	}

	public function edit_form($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->m_data->tampil_data_id($where,'user')->result();
		$this->load->view('Form', $data);
	}

	public function customer()
	{
		$data['customer'] = $this->m_data->tampil_data('customer')->result();
		$this->load->view('customer',$data);
	}

	public function reservation()
	{
		$data['reservation'] = $this->m_data->tampil_data('reservation')->result();
		$this->load->view('reservation',$data);
	}

	public function rute()
	{
		$data['rute'] = $this->m_data->tampil_data('rute')->result();
		$this->load->view('rute',$data);
	}

	public function transportation()
	{
		$data['transportation'] = $this->m_data->tampil_data('transportation')->result();
		$this->load->view('transportation',$data);
	}
}

	