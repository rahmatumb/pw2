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
						'theme_page' => 'kota_read',
						'judul' => 'Daftar kota',

						//data kota dikirim ke view
						'data_kota' => $data_kota
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
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

	public function update() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id = $this->uri->segment(3);
		
		//function read berfungsi mengambil 1 data dari table kota sesuai id yg dipilih
		$data_kota_single = $this->kota_model->read_single($id);

		//mengambil daftar provinsi dari table provinsi
		$data_provinsi = $this->provinsi_model->read();

		//mengirim data ke view
		$output = array(
						'judul' => 'Ubah kota',

						//mengirim data kota yang dipilih ke view
						'data_kota_single' => $data_kota_single,

						//mengirim daftar provinsi ke view
						'data_provinsi' => $data_provinsi,
					);

		//memanggil file view
		$this->load->view('kota_update', $output);
	}

	public function update_submit() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//menangkap data input dari view
		$id_provinsi = $this->input->post('id_provinsi');
		$nama = $this->input->post('nama');

		//mengirim data ke model
		$input = array(
						//format : nama field/kolom table => data input dari view
						'id_provinsi' => $id_provinsi,
						'nama' => $nama,
					);

		//memanggil function update pada kota model
		//function update berfungsi merubah data ke table kota di database
		$data_kota = $this->kota_model->update($input, $id);

		//mengembalikan halaman ke function read
		redirect('kota/read');
	}

	public function delete() {
		//menangkap id data yg dipilih dari view
		$id = $this->uri->segment(3);

		//memanggil function delete pada kota model
		$data_kota = $this->kota_model->delete($id);

		//mengembalikan halaman ke function read
		redirect('kota/read');
	}
}
