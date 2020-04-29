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
						'theme_page' => 'provinsi_read',
						'judul' => 'Daftar Provinsi',

						//data provinsi dikirim ke view
						'data_provinsi' => $data_provinsi
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

	public function insert() {
		//mengirim data ke view
		$output = array(
						'theme_page' => 'provinsi_insert',
						'judul' => 'Tambah Provinsi',
					);

		//memanggil file view
		$this->load->view('theme/index', $output);
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
						'judul' => 'Ubah Provinsi',

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


	public function export() {
		//function read berfungsi mengambil/read data dari table provinsi di database
		$data_provinsi = $this->provinsi_model->read();
		
		//load library excel
		$this->load->library('excel');
		$excel = $this->excel;

		//judul sheet excel
		$excel->setActiveSheetIndex(0)->setTitle('Export Data');

		//header table
		$excel->getActiveSheet()->setCellValue( 'A1', 'ID');
		$excel->getActiveSheet()->setCellValue( 'B1', 'Nama');

		//baris awal data dimulai baris 2 (baris 1 digunakan header)
		$baris = 2;

		//looping data provinsi (mengisi data ke excel)
		foreach($data_provinsi as $data) {

			//mengisi data ke excel per baris
			$excel->getActiveSheet()->setCellValue( 'A'.$baris, $data['id']);
			$excel->getActiveSheet()->setCellValue( 'B'.$baris, $data['nama']);


			//increment baris untuk data selanjutnya
			$baris++;
		}

		//nama file excel
		$filename='export_data_provinsi.xls';

		//konfigurasi file excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
		$objWriter->save('php://output');
	}

	public function export2() {
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
		$this->load->view('provinsi_export', $output);
	}

	public function export_kota() {
		//menangkap id data yg dipilih dari view (parameter get)
		$id_provinsi = $this->uri->segment(3);

		//function read berfungsi mengambil/read data dari table kota di database
		$this->load->model('kota_model');
		$data_kota = $this->kota_model->read($id_provinsi);

		//mengirim data ke view
		$output = array(
						'judul' => 'Daftar kota',

						//data provinsi dikirim ke view
						'data_kota' => $data_kota
					);

		//memanggil file view
		$this->load->view('provinsi_kota_export', $output);
	}
}
