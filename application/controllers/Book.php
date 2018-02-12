<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	public function index()
	{
		$this->load->view('Book');
	}
}