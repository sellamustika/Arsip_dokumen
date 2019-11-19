<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
		public function __construct(){
			        parent::__construct();
		 	        $this->load->model("dashboard_model");
		 	        $this->load->library('form_validation');
		 	    }
		public function index(){
			$data ["tolak"] = $this->dashboard_model->getcount_tolak();
			$data ["pid"] = $this->dashboard_model->getcount_pid();
			$data ["batal"] = $this->dashboard_model->getcount_batal();
			$data ["pending"] = $this->dashboard_model->getcount_pending();
			$data ["tdkinput"] = $this->dashboard_model->getcount_tdkinput();
			


			$this->load->view('dashboard',$data);
		}

		public function mhs()
		{
			//$data["products"] = $this->coba_model->getAll();
			$data ["pid"] = $this->dashboard_model->getcount_pid();
			$data ["tolak"] = $this->dashboard_model->getcount_tolak();
			$data ["batal"] = $this->dashboard_model->getcount_batal();
			$data ["pending"] = $this->dashboard_model->getcount_pending();
			$data ["tdkinput"] = $this->dashboard_model->getcount_tdkinput();
			$this->load->view('dashboard',$data);
		}
    }

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

//     public function delete($id=null)
//     {
//     if (!isset($id)) show_404();
        
//     if ($this->coba_model->delete($id)) {
//         redirect(site_url('coba/mhs'));
//         }
//     }

// }
