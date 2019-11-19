<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        // if(!$this->session->userdata('email')){
        //     redirect('auth');
        // }
        // $this->load->model("harian_model");
        $this->load->model("form_model");
        $this->load->library('form_validation');
    }
        public function index(){
            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('form',$data);
        }

        public function form()
        {
            //$data["products"] = $this->coba_model->getAll();
            
            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
            $this->load->view('form');
        }

        public function create(){
            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
             $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->load->view('create',$data);
        }

        public function fetchBrandDataById($id)
            {
                if($id) {
                    $data = $this->form_model->getBrandData($id);
                    echo json_encode($data);
                }

                return false;
            }
    
    public function add()
    {
        $form = $this->form_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

            $data ["customer"] = $this->form_model->getData();
            $data ["cabang"] = $this->form_model->getCabang();
            $data ["status"] = $this->form_model->getStatus();
            $data['user'] = $this->db->get_where('user', ['email' =>

            $this->session->userdata('email')])->row_array();
            $this->session->set_flashdata('error', 'Successfully created');
                redirect('form', 'refresh');
            $this->load->view("form",$data);
    }

    //  public function update()
    // {
    //   if (!isset($id)) redirect('form/'.$data->id);
       
    //     $form = $this->form_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($form->rules());

    //     $form = $this->form_model;

    //     $data["form"] = $form->getById($id);
    //     if (!$data["form"]) show_404();

    //     if ($validation->run()) {
    //         $form->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //         redirect(site_url('form'.$data->id));
    //     }

    //     $data["form"] = $form->getById($id);
    //     if (!$data["form"]) show_404();
        
    //     $this->load->view("form", $data);
    // }

    public function edito($id = null)
    {
        if (!isset($id)) redirect('form/');
       
        $form = $this->form_model;
        $validation = $this->form_validation;
        $validation->set_rules($form->rules());

        if ($validation->run()) {
            $form->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["form"] = $form->getById($id);
        if (!$data["form"]) show_404();
        
        $this->load->view("form", $data);
    }


    function edit(){

        $id=  $this->input->post('id');
        $id_user=  $this->input->post('id_user');
        $pid=  $this->input->post('pid');
        $id_cabang=  $this->input->post('id_cabang');
        $nama=  $this->input->post('nama');
        $status=  $this->input->post('status');
        $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
        $tgl_terima=  $this->input->post('tgl_terima');
        $anold=  $this->input->post('anold');
        $pjold=  $this->input->post('pjold');
        $svold=  $this->input->post('svold');
        // $tgl_input=  $this->input->post('tgl_input');

        $an = $_FILES['an']['name'];
        $pj = $_FILES['pj']['name'];
        $sv = $_FILES['sv']['name'];



        $this->load->library('upload', $config);


        if (!empty($an)) {
            $config['upload_path'] = 'assets/dokumen/an';
            $config['allowed_types'] = 'pdf';
            $config['file_ext_tolower'] = TRUE;
            $config['max_size'] = '1024';
            $config['overwrite'] = TRUE;
            $x = explode(".", $an);
            $ext = strtolower(end($x));
            $config['file_name'] = time()."-".$an;
            $an = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('an');
        }

        if (empty($an)) {
            $an = $anold;
        }

        if (!empty($pj)) {
            $config['upload_path'] = 'assets/dokumen/pj';
            $config['allowed_types'] = 'pdf';
            $config['file_ext_tolower'] = TRUE;
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $x = explode(".", $pj);
            $ext = strtolower(end($x));
            $config['file_name'] = time()."-".$pj;
            $pj = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('pj');
        }
        
        if (empty($pj)) {
            $pj = $pjold;
        }

        if (!empty($sv)) {
            $config['upload_path'] = 'assets/dokumen/sv';
            $config['allowed_types'] = 'pdf';
            $config['file_ext_tolower'] = TRUE;
            $config['max_size'] = '2048';
            $config['overwrite'] = TRUE;
            $x = explode(".", $sv);
            $ext = strtolower(end($x));
            $config['file_name'] = time()."-".$sv;
            $sv = $config['file_name'];
            $this->upload->initialize($config);
            $this->upload->do_upload('sv');
        }

        if (empty($sv)) {
            $sv = $svold;
        }

        $this->form_model->edit($id,$id_user,$pid,$id_cabang,$nama,$status,$tgl_aplikasi,$tgl_terima,$an,$pj,$sv);
        redirect('form');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->form_model->delete($id)) {
            $this->session->set_flashdata('delete', 'your data was out');
            redirect(site_url('form/'));
        }
    }
}


 //    public function remove()
    // {
    //  // if(!in_array('deleteCategory', $this->permission)) {
    //  //  redirect('dashboard', 'refresh');
    //  // }
        
    //  $id = $this->input->post('id');

    //  $response = array();
    //  if($id) {
    //      $delete = $this->form_model->remove($id);
    //      if($delete == true) {
    //          $response['success'] = true;
    //          $response['messages'] = "Successfully removed"; 
    //      }
    //      else {
    //          $response['success'] = false;
    //          $response['messages'] = "Error in the database while removing the brand information";
    //      }
    //  }
    //  else {
    //      $response['success'] = false;
    //      $response['messages'] = "Refersh the page again!!";
    //  }

    //  echo json_encode($response);
    // }


   


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

