<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	public function __construct(){

		parent::__construct();
		is_logged_in();
		// if(!$this->session->userdata('email')) {
		// 		redirect('auth');
		// }
			$this->load->model("beranda_model");
			$this->load->library('form_validation');


	}
	public function index(){
		// $data ["tolak"] = $this->dashboard_model->getcount_tolak();
		// $data ["pid"] = $this->dashboard_model->getcount_pid();
		// $data ["batal"] = $this->dashboard_model->getcount_batal();
		// $data ["pending"] = $this->dashboard_model->getcount_pending();
		// $data ["tdkinput"] = $this->dashboard_model->getcount_tdkinput();
		$data['user'] = $this->db->get_where('user', ['email' =>

		$this->session->userdata('email')])->row_array();


		$this->load->view('beranda',$data);
		}

		
}

