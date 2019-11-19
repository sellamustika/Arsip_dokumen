<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }
        public function index(){
            $data ["customer"] = $this->user_model->getData();
            $data ["cabang"] = $this->user_model->getCabang();
            $data ["status"] = $this->user_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('user',$data);
        }

        public function user()
        {
            //$data["products"] = $this->coba_model->getAll();
            
            $data ["customer"] = $this->user_model->getData();
             $data ["cabang"] = $this->user_model->getCabang();
            $data ["status"] = $this->user_model->getStatus();
            $this->load->view('user');
        }

        public function fetchBrandDataById($id)
            {
                if($id) {
                    $data = $this->user_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
            }
    
     public function add()
    {
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["customer"] = $this->user_model->getData();
            $data ["cabang"] = $this->user_model->getCabang();
            $data ["status"] = $this->user_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view("user",$data);
    }

     public function edit($id = null)
    {
        if (!isset($id)) redirect('user/');
       
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("user", $data);
    }

     public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->form_model->delete($id)) {
            redirect(site_url('form/'));
        }
    }

    public function remove()
    {
        // if(!in_array('deleteCategory', $this->permission)) {
        //  redirect('dashboard', 'refresh');
        // }
        
        $id = $this->input->post('id');

        $response = array();
        if($id) {
            $delete = $this->user_model->remove($id);
            if($delete == true) {
                $response['success'] = true;
                $response['messages'] = "Successfully removed"; 
            }
            else {
                $response['success'] = false;
                $response['messages'] = "Error in the database while removing the brand information";
            }
        }
        else {
            $response['success'] = false;
            $response['messages'] = "Refersh the page again!!";
        }

        echo json_encode($response);
    }
}

   


// class Form extends CI_Controller{
        // public function __construct(){
        //          parent::__construct();
        //          $this->load->model("coba_model");
        //          $this->load->library('form_validation');
        //      }
        // public function index(){
        //  $this->load->view('form');
        // }

        // public function form()
        // {
        //  //$data["products"] = $this->coba_model->getAll();
        //  $this->load->view('form');
        // }
  //   }

//       public function add()
//      {
//         $product = $this->coba_model;
//         $validation = $this->form_validation;
//         $validation->set_rules($product->rules());

//         if ($validation->run()) {
//             $product->save();
//             $this->session->set_flashdata('success', 'Berhasil disimpan');
//         }

//         $this->load->view("product/new_form");
//           }

//           public function edit($id = null)
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
