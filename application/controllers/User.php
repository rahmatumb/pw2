<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();

        //memanggil model
        $this->load->model(array('user_model'));
    }

	public function index() {
		//mengarahkan ke function read
		$this->login();
	}

	public function login() {
		
		//memanggil fungsi login submit	(agar di view tidak dilihat fungsi login submit)
		$this->login_submit();

		//mengirim data ke view
		$output = array(
						'judul' => 'Login'
					);

		//memanggil file view
		$this->load->view('login', $output);
	}

	private function login_submit() {
		
		//proses jika tombol login di submit
		if($this->input->post('submit') == 'Login') {

			//aturan validasi input login
			$this->form_validation->set_rules('username', 'Username', 'required|alpha|callback_login_check');
			$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric|min_length[5]');

			//jika validasi sukses 
			if ($this->form_validation->run() == TRUE) {

				//redirect ke provinsi (bisa dirubah ke controller & fungsi manapun)
				redirect('provinsi/read');
			} 

		}
	}

	public function login_check() {
		//menangkap data input dari view
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//mengambil password sesuai username
		$data_user = $this->user_model->read_single($username);

		//password dari database
		$password_encrypt = $data_user['password'];

		//dekripsi password (karena password tersimpan di database terenkripsi)
		$password_decrypt = $this->encrypt->decode($password_encrypt);
		
		//jika password cocok : dikembalikan ke fungsi login_submit (validasi sukses)
		if($password == $password_decrypt) {

			//buat session user 
			$this->session->set_userdata('id', $data_user['id']);
			$this->session->set_userdata('nama', $data_user['nama']);

			return TRUE;

		//jika password tidak cocok : dikembalikan ke fungsi login_submit (validasi gagal)
		} else {

			//membuat pesan error
			$this->form_validation->set_message('login_check', 'Username & password tidak tepat');
			
			return FALSE;

		}
	}

	public function logout() {

		//hapus session user
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('nama');

		//mengembalikan halaman ke function read
		redirect('user/login');
	}
}
