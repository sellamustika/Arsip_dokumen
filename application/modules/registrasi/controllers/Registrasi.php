<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        // $this->load->model("harian_model");
        $this->load->model("registrasi_model");
        $this->load->library('form_validation');
    }
	public function index()
	{
		$this->load->view('registrasi');
	}

	public function registrasi()
	{
		$this->load->view('registrasi');
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
				'is_unique' => 'This Email has Already Registered!'

		]);

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]',[
				'matches' => 'password dont match!',
				'min_lenght' => 'password too short'

		]);

		if($this->form_validation->run() == false) {

			$this->load->view('registrasi');

		}else {

			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Yor account has been created! Please Login </div>');
			redirect('auth');
		}
		
	}

	
}