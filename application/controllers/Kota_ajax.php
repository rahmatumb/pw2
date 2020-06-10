<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota_ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

        //memanggil model
        $this->load->model(array('kota_ajax_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->read();
	}

	public function read() {

		//mengirim data ke view
		$output = array(
						'theme_page' => 'kota_ajax_read',
						'judul' => 'Daftar kota',

					);

		//memanggil file view
		$this->load->view('theme/index', $output);
	}

    //fungsi menampilkan data dalam bentuk json
	public function datatables() {
        //menunda loading (bisa dihapus, hanya untuk menampilkan pesan processing)
        //sleep(2);

        //memanggil fungsi model datatables
        $list = $this->kota_ajax_model->get_datatables();
        $data = array();
        $no = $this->input->post('start');

        //mencetak data json
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field['nama'];
            $row[] = number_format($field['penduduk']);

            $data[] = $row;
        }
    
        //mengirim data json
        $output = array(
            "draw" => $this->input->post('draw'),
            "recordsTotal" => $this->kota_ajax_model->count_all(),
            "recordsFiltered" => $this->kota_ajax_model->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
        echo json_encode($output);
    }
}
