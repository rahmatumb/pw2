<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {

	public function __construct() {
        parent::__construct();

        //memanggil model
        $this->load->model('provinsi_model');
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {
		//memanggil function read pada provinsi model
		//function read berfungsi mengambil/read data dari table provinsi di database
		$data_provinsi = $this->provinsi_model->read();

		//mengirim data ke view
		$output = array(
						'judul' => 'Daftar Provinsi',

						//data provinsi dikirim ke view
						'data_provinsi' => $data_provinsi
					);

		//memanggil file view
		$this->load->view('provinsi_read', $output);
	}

	public function insert() {
		//mengirim data ke view
		$output = array(
						'judul' => 'Tambah Provinsi',
					);

		//memanggil file view
		$this->load->view('provinsi_insert', $output);
	}

	public function insert_submit() {
		//menangkap data input dari view
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'nama' => $nama,
					);

		//memanggil function insert pada provinsi model
		//function insert berfungsi menyimpan/create data ke table provinsi di database
		$data_provinsi = $this->provinsi_model->insert($input);

		//mengembalikan halaman ke function read
		redirect('provinsi/read');
	}
}
