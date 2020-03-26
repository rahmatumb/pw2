<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	public function index() {
		$output = array(
						'judul' => 'Hello World',
						'kategori' => array(
										'nama' => 'buku', 
										'tipe' => 'keramik', 
										'harga' => '1,000',
										'asal' => 'Rembang'
									)
					);

		$this->load->view('rumah_index', $output);
	}

	public function teras()
	{
		$output = array(
						'judul' => 'Teras',
						'kategori' => 'Keramik'
					);
		$this->load->view('rumah_index', $output);
	}
}
