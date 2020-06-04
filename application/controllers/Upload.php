<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$this->form();
    }

    public function form() {
    	$output = array(
						'judul' => 'Upload File'
					);

		$this->load->view('upload', $output);
	}

	public function submit() {

			//setting library upload
	        $config['upload_path']          = './upload_folder/';
	        $config['allowed_types']        = 'gif|jpg|png|pdf';
	        $config['max_size']             = 10000;
	        $this->load->library('upload', $config);

	        //jika gagal upload
	        if ( ! $this->upload->do_upload('userfile')) {

	        	//respon alasan kenapa gagal upload
	        	$response = $this->upload->display_errors();

	        	//mengirim output ke view
                $output = array(
                				'judul' => 'Upload File',
                				'response' => $response
                			);
                $this->load->view('upload', $output);

            //jika upload berhasil
	        } else {
	        	
	        	//respon upload berhasil 
	        	$upload_data = $this->upload->data();
	        	$file_name = $upload_data['file_name'];

	        	//pesan berhasil (boleh dirubah)
	        	$response = 'berhasil upload, nama file  : '.$file_name;

	        	//mengirim output ke view
                $output = array(
                				'judul' => 'Upload File',
                				'response' => $response
                			);
                $this->load->view('upload', $output);
	        }
	}

}
