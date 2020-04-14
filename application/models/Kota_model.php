<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_model extends CI_Model {

	//function read berfungsi mengambil/read data dari table kota di database
	public function read($id_provinsi='') {

		//sql read
        $this->db->select('kota.*');
        $this->db->select('provinsi.nama AS nama_provinsi');
        $this->db->from('kota');
        $this->db->join('provinsi', 'kota.id_provinsi = provinsi.id');

        //filter data sesuai id yang dikirim dari controller
		if($id_provinsi != '') {
			$this->db->where('kota.id_provinsi', $id_provinsi);
		}

        $this->db->order_by('kota.id_provinsi ASC, kota.nama ASC');

		$query = $this->db->get();

		//$query->result_array = mengirim data ke controller dalam bentuk semua data
        return $query->result_array();
	}

	//function read berfungsi mengambil/read data dari table kota di database
	public function read_single($id) {

		//sql read
		$this->db->select('*');
		$this->db->from('kota');

		//$id = id data yang dikirim dari controller (sebagai filter data yang dipilih)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		$query = $this->db->get();

		//query->row_array = mengirim data ke controller dalam bentuk 1 data
        return $query->row_array();
	}

	//function insert berfungsi menyimpan/create data ke table kota di database
	public function insert($input) {
		//$input = data yang dikirim dari controller
		return $this->db->insert('kota', $input);
	}

	//function update berfungsi merubah data ke table kota di database
	public function update($input, $id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang diubah)
		//filter data sesuai id yang dikirim dari controller
		$this->db->where('id', $id);

		//$input = data yang dikirim dari controller
		return $this->db->update('kota', $input);
	}

	//function delete berfungsi menghapus data dari table kota di database
	public function delete($id) {
		//$id = id data yang dikirim dari controller (sebagai filter data yang dihapus)
		$this->db->where('id', $id);
		return $this->db->delete('kota');
	}
}
