<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parameter extends CI_Controller {

	public function index() {
		$this->get();
	}

	public function get() {
		$output = array(
					'judul' => 'Parameter Get',
					'link' => array(
								'berhenti' => 'red',
								'pelan' => 'yellow',
								'jalan' => 'green'
							)
				);

		$this->load->view('parameter_get', $output);
	}

	public function get_result() {
		$tanda = $this->uri->segment(3);

		$output = array(
					'judul' => 'Parameter Get Result',
					'tanda' => $tanda
				);

		$this->load->view('parameter_get_result', $output);
	}

	public function post() {
		$output = array(
						'judul' => 'Parameter Post'
					);
		$this->load->view('parameter_post', $output);
	}

	public function post_result() {
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');

		$output = array(
					'judul' => 'Parameter Post Result',
					'post' => array(
						'nama' => $nama,
						'umur' => $umur
					)
				);
		$this->load->view('parameter_post_result', $output);
	}
}
