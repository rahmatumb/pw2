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
		//function read berfungsi mengambil/read data dari table provinsi di db
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

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);

		//function read berfungsi mengambil 1 data dari table provinsi sesuai id yg dipilih
		$data_provinsi_single = $this->provinsi_model->read_single($id);

		//mengirim data ke view
		$output = array(
						'judul' => 'Tambah Provinsi',

						//mengirim data provinsi yang dipilih ke view
						'data_provinsi_single' => $data_provinsi_single,
					);

		//memanggil file view
		$this->load->view('provinsi_update', $output);
	}

	public function update_submit() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'nama' => $nama,
					);

		//memanggil function insert pada provinsi model
		//function insert berfungsi menyimpan/create data ke table provinsi di database
		$data_provinsi = $this->provinsi_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('provinsi/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada provinsi model
		$data_provinsi = $this->provinsi_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('provinsi/read');
	}
}
