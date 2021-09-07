<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parameter extends CI_Controller {

	public function index() {
		$this->get_request();
	}

	public function get_request() {
		//mengirim data ke view
		$output = array(
					'judul' => 'Parameter Get Request',
					'link' => array(
								'berhenti' => 'red',
								'pelan' => 'yellow',
								'jalan' => 'green'
							)
				);

		//memanggil file view
		$this->load->view('parameter_get_request', $output);
	}

	public function get_response() {
		//menangkap data url
		$tanda = $this->uri->segment(3);

		//mengirim data ke view
		$output = array(
					'judul' => 'Parameter Get Response',
					'tanda' => $tanda,
				);

		//memanggil file view
		$this->load->view('parameter_get_response', $output);
	}

	public function post_request() {
		//mengirim data ke view
		$output = array(
						'judul' => 'Parameter Post Request'
					);

		//memanggil file view
		$this->load->view('parameter_post_request', $output);
	}

	public function post_response() {
		//menangkap data input dari view
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');

		//mengirim data ke view
		$output = array(
					'judul' => 'Parameter Post Response',
					'post' => array(
						'nama' => $nama,
						'umur' => $umur,
					)
				);

		//memanggil file view
		$this->load->view('parameter_post_response', $output);
	}
}
