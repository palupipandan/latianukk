<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
	function gets(){
		$this->db->get('user')->result();
	}

	function add(){}
	function del(){}
	function edit(){}


	
}