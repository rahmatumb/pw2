<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parameter extends CI_Controller {

	public function index() {
		$this->get();
	}

	public function get_request() {
		$output = array(
					'judul' => 'Parameter Get Request',
					'link' => array(
								'berhenti' => 'red',
								'pelan' => 'yellow',
								'jalan' => 'green'
							)
				);

		$this->load->view('parameter_get_request', $output);
	}

	public function get_response() {
		$tanda = $this->uri->segment(3);

		$output = array(
					'judul' => 'Parameter Get Response',
					'tanda' => $tanda
				);

		$this->load->view('parameter_get_response', $output);
	}

	public function post_request() {
		$output = array(
						'judul' => 'Parameter Post Request'
					);
		$this->load->view('parameter_post_request', $output);
	}

	public function post_response() {
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');

		$output = array(
					'judul' => 'Parameter Post Response',
					'post' => array(
						'nama' => $nama,
						'umur' => $umur
					)
				);
		$this->load->view('parameter_post_response', $output);
	}
}
