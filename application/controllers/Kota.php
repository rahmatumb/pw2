<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller {

	public function __construct() {
        parent::__construct();

        //memanggil model
        $this->load->model(array('kota_model', 'provinsi_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada kota model
		//function read berfungsi mengambil/read data dari table kota di database
		$data_kota = $this->kota_model->read();

		//mengirim data ke view
		$output = array(
						'judul' => 'Daftar kota',

						//data kota dikirim ke view
						'data_kota' => $data_kota
					);

		//memanggil file view
		$this->load->view('kota_read', $output);
	}

	public function insert() {
		//mengambil daftar provinsi dari table provinsi
		$data_provinsi = $this->provinsi_model->read();

		//mengirim data ke view
		$output = array(
						'judul' => 'Tambah kota',

						//mengirim daftar provinsi ke view
						'data_provinsi' => $data_provinsi,
					);

		//memanggil file view
		$this->load->view('kota_insert', $output);
	}

	public function insert_submit() {
		//menangkap data input dari view
		$id_provinsi = $this->input->post('id_provinsi');
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'id_provinsi' => $id_provinsi,
						'nama' => $nama,
					);

		//memanggil function insert pada kota model
		//function insert berfungsi menyimpan/create data ke table kota di database
		$data_kota = $this->kota_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('kota/read');
	}
	
}
