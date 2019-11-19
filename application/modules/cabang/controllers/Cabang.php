<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("cabang_model");
        $this->load->library('form_validation');
    }
		public function index(){
            $data ["cabang"] = $this->cabang_model->getAll();
			
			$data ["ncabang"] = $this->cabang_model->getNCabang();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
			$this->load->view('cabang',$data);
		}

		public function cabang()
		{
			//$data["products"] = $this->coba_model->getAll();
            $data ["ncabang"] = $this->cabang_model->getNCabang();
			$this->load->view('cabang');
			
		}
    
     public function add()
    {
        $cabang = $this->cabang_model;
        $validation = $this->form_validation;
        $validation->set_rules($cabang->rules());

        if ($validation->run()) {
            $cabang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');

        }
             $data ["cabang"] = $this->cabang_model->getAll();
      		 $data ["ncabang"] = $this->cabang_model->getNCabang();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->session->set_flashdata('success', 'Successfully created');
                redirect('cabang', 'refresh');
            $this->load->view('cabang',$data);
    }


    public function edit($id = null)
    {
        if (!isset($id)) redirect('cabang/');
       
        $cabang = $this->cabang_model;
        $validation = $this->form_validation;
        $validation->set_rules($cabang->rules());

        if ($validation->run()) {
            $cabang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["cabang"] = $cabang->getById($id);
        if (!$data["cabang"]) show_404();
        $this->session->set_flashdata('success', 'Successfully created');
                redirect('cabang', 'refresh');
        $this->load->view("cabang", $data);
    }



   


// class Form extends CI_Controller{
		// public function __construct(){
		// 	        parent::__construct();
		// 	        $this->load->model("coba_model");
		// 	        $this->load->library('form_validation');
		// 	    }
		// public function index(){
		// 	$this->load->view('form');
		// }

		// public function form()
		// {
		// 	//$data["products"] = $this->coba_model->getAll();
		// 	$this->load->view('form');
		// }
  //   }

// 		 public function add()
//     	{
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->save();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $this->load->view("product/new_form");
//    		 }

//    		 public function edit($id = null)
//     {
//         if (!isset($id)) redirect('products');
       
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->update();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $data["product"] = $product->getById($id);
//         if (!$data["product"]) show_404();
        
//         $this->load->view("product/edit_form", $data);
//     }

    // public function delete($id)
    // {
    //      if (!isset($id_cabang)) show_404();
        
    //     if ($this->cabang_model->delete($id_cabang)) {
    //         redirect(site_url('/cabang/index'));
    //     }

    // }
    
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->cabang_model->delete($id)) {
            $this->session->set_flashdata('delete', 'Successfully created');
                redirect('cabang', 'refresh');
            redirect(site_url('cabang/'));
        }
    }

}
