<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table provinsi di database
	public function read() {

		//sql read
		$this->db->select('*');
		$this->db->from('provinsi');
		$query = $this->db->get();

		//mengirim data ke controller
        return $query->result_array();
	}

	//function insert berfungsi menyimpan/create data ke table provinsi di database
	public function insert($data) {
		//$data = data yang dikirim dari controller
		return $this->db->insert('provinsi', $data);
	}
}
