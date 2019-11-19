<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	 public function __construct()
     {
         parent::__construct();
         $this->load->library('form_validation');
         // if(!$this->session->userdata('email')) {
         // 	redirect('auth');
         // }
         // // $this->load->model("harian_model");
         // $this->load->model("registrasi_model");
         // $this->load->library('form_validation');
     }

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == false) {
		$this->load->view('login');
		}else{

			// validasi success
			$this->_login();
		}
	}

	private function _login(){

		$email = $this->input->post('email'); 
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['email' => $email]) -> row_array();
		
		if($user) {
			// jika usernya active
			if($user['is_active'] == 1) {
				// cek password

				if(password_verify($password, $user['password'])) {

					$data =[
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];

					$this->session->set_userdata($data);
					if($user['role_id'] == 1) {
						redirect('dashboard');
					} else {
						redirect('beranda');
					}
					

				}else {
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password </div>');
			redirect('auth');

				}


			}else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This Email has not been activated! </div>');
			redirect('auth');

			}

		}else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email is not registered! </div>');
			redirect('auth');
		}
	}

	public function registrasi()
	{
		$this->load->view('registrasi');
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success from-group mb-3" role="alert">You have been logout </div>');
			redirect('auth');

	}

	public function blocked()
	{
		echo 'access blocked';
	}
}