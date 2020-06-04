<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table user di database
	public function read() {

		//sql read
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table user di database
	public function read_single($username, $password) {

		//sql read
		$this->db->select('*');
		$this->db->from('user');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get();
		
		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table user di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('user', $input);
	}

	//function update berfungsi merubah data ke table user di database
	public function update($input, $id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('user', $input);
	}

	//function delete berfungsi menghapus data dari table user di database
	public function delete($id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
}
