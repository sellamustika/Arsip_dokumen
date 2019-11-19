<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct(){

		parent::__construct();
		is_logged_in();
		// if(!$this->session->userdata('email')) {
		// 		redirect('auth');
		// }
			$this->load->model("menu_model");
			$this->load->library('form_validation');


	}
	public function index(){


		 $data ["smenu"] = $this->menu_model->getMenu();
		// $data ["pid"] = $this->dashboard_model->getcount_pid();
		// $data ["batal"] = $this->dashboard_model->getcount_batal();
		// $data ["pending"] = $this->dashboard_model->getcount_pending();
		// $data ["tdkinput"] = $this->dashboard_model->getcount_tdkinput();
		$data['user'] = $this->db->get_where('user', ['email' =>

		$this->session->userdata('email')])->row_array();


		$this->load->view('menu',$data);
		}

		
}

