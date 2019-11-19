<?php 

class Chart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')) {
        //     redirect('auth');
        // }

        $this->load->model("chart_model");

        $this->load->library('form_validation');
    }
 
    function index(){
         
        $data['data']=$this->chart_model->get_data_stok();
        $data['tanggal']=$this->chart_model->get_data_date();
        $data ["customer"] = $this->chart_model->getDate();
        // $this->load->view('v_grafik',$x);
        $data['user'] = $this->db->get_where('user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $this->load->view('cahartdata',$data);
     
      // $this->load->view('chart');
    }
   }