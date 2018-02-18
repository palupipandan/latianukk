<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {

	function tampil_data($Table) {
		return $this->db->get($Table);
	}

	function tampil_data_id($where,$Table){
		return $this->db->get_where($Table,$where);
	}

	function input_data($data, $Table){
		$this->db->insert($Table,$data);
	}

	function hapus_data($where,$Table){
		$this->db->where($where);
		$this->db->delete($Table);
	}


	function update_data($where,$data,$Table){
		$this->db->where($where);
		$this->db->update($Table,$data);
	}


}