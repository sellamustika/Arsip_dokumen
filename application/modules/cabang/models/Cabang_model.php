<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_model extends CI_Model
{
    private $_table = "cabang";

    public $id_cabang;
    public $cabang;
   


    public function rules()
    {
         return [

             // ['field' => 'id_cabang',
             // 'label' => 'Id_Cabang',
             // 'rules' => 'required'],

             ['field' => 'cabang',
             'label' => 'Cabang',
             'rules' => 'required']

            
         ];
     }
    // public function getData()
    // {
    //     $sql = "SELECT * FROM customer WHERE id";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }
    public function getNCabang()
    {
        $sql = "SELECT * FROM cabang as ncabang WHERE id_cabang";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //  public function getStatus()
    // {
    //     $sql = "SELECT * FROM customer as status WHERE status";
    //     $query = $this->db->query($sql);
    //     return $query->result();
    // }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_cabang" => $id])->row();
    }

    public function save()
    {
        //$upload_dokumen = $this->upload_dokumen();
        $post = $this->input->post();
        //$this->id = uniqid();
        // $this->id_cabang = $post["id_cabang"];
        // $this->id_cabang = $post["id_cabang"];
        $this->cabang = $post["cabang"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        // $id= $this->id = uniqid();
        // $this->id_cabang = $post["id_cabang"];
        // $id_cabang=  $this->input->post('id_cabang');
        $this->input->post('cabang');

        $this->db->update($this->_table, $this, array('id' => $post['id_cabang']));

        // $this->db->update('customer',$data);

    }

      public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_cabang" => $id));
    
    }

    //  public function update()
    // {
    //     $post = $this->input->post();
    //     $this->product_id = $post["id"];
    //     $this->name = $post["name"];
    //     $this->price = $post["price"];
    //     $this->description = $post["description"];
    //     $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    // }

    //   public function delete($id)
    // {
    //     return $this->db->delete($this->_table, array("product_id" => $id));
    // }
    // public function upload_dokumen()
    // {
    //     // assets/images/product_image
    //     $config['upload_path'] = 'assets/dokumen/an';
    //     $config['file_name'] =  uniqid();
    //     $config['allowed_types'] = 'pdf';
    //     $config['max_size'] = '1000';

    //     // $config['max_width']  = '1024';s
    //     // $config['max_height']  = '768';

    //     $this->load->library('upload', $config);
    //     if ( ! $this->upload->do_upload('an'))
    //     {
    //         $error = $this->upload->display_errors();
    //         return $error;
    //     }
    //     else
    //     {
    //         $data = array('upload_data' => $this->upload->data());
    //         $type = explode('.', $_FILES['an']['name']);
    //         $type = $type[count($type) - 1];
            
    //         $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
    //         return ($data == true) ? $path : false;            
    //     }
    

    
}