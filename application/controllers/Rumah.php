<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	//pintu gerbang
	public function index()
	{
		//data yg akan dikirimkan ke view
		$output = array(
						//key => value
						'judul' => 'Hello World 2',
						'content' => 'Selamat datang di rumah'
					);

		//memanggil view
		$this->load->view('rumah_index', $output);
	}

	public function home()
	{
		$output = array(
						'judul' => 'Hello Home',
						'isi' => 'Selamat datang di Teras'
					);

		//memanggil view
		$this->load->view('rumah_index', $output);
	}

	public function kitchen()
	{
		echo 'Welcome to Kitchen';
	}

}
