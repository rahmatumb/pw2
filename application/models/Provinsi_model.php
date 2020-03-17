<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table provinsi di database
	public function read() {
		$this->db->select('*');
		$this->db->from('provinsi');

		$query = $this->db->get();
        return $query->result_array();
	}

	//function insert berfungsi menyimpan/create data ke table provinsi di database
	public function insert($data) {
		return $this->db->insert('provinsi', $data);
	}
}
