<?php 

class Chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('email')) {
        	redirect('auth');
        }
        // $this->load->model("harian_model");
        $this->load->model("chart_model");

        $this->load->library('form_validation');
    }
 
    function index(){
    	 
		$x['data']=$this->chart_model->get_data_stok();
        // $this->load->view('v_grafik',$x);
      $x['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
			$this->load->view('chart',$x);
     
      // $this->load->view('chart');
    }
   }