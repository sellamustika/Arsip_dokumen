<?php 

class Coba extends CI_Controller{
		public function __construct(){
			        parent::__construct();
			        $this->load->model("coba_model");
			        $this->load->library('form_validation');
			    }
		public function index(){
			$this->load->view('coba_v');
		}

		public function mhs()
		{
			$data["products"] = $this->coba_model->getAll();
			$this->load->view('mhs',$data);
		}

		 public function add()
    	{
        $product = $this->coba_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("product/new_form");
   		 }

   		 public function edit($id = null)
    {
        if (!isset($id)) redirect('products');
       
        $product = $this->coba_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("product/edit_form", $data);
    }

    public function delete($id=null)
    {
    if (!isset($id)) show_404();
        
    if ($this->coba_model->delete($id)) {
        redirect(site_url('coba/mhs'));
        }
    }

}
