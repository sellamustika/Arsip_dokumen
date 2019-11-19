<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
    private $_table = "customer";

    public $id;
    public $pid;
    public $id_cabang;
    public $nama;
    public $status;
    public $tgl_aplikasi;
    public $tgl_terima;
    public $an;
    public $pj;


    public function rules()
    {
         return [
             ['field' => 'pid',
             'label' => 'PID',
             'rules' => 'required'],

             ['field' => 'id_cabang',
             'label' => 'Id_cabang',
             'rules' => 'required'],
            
             ['field' => 'nama',
             'label' => 'Nama',
             'rules' => 'required']
         ];
     }

    public function getData()
    {
        $sql = "SELECT * FROM customer WHERE id";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function getCabang()
    {
        $sql = "SELECT * FROM cabang WHERE id_cabang";
        $query = $this->db->query($sql);
        return $query->result();
    }
     public function getStatus()
    {
        $sql = "SELECT * FROM customer as status WHERE status";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function simpan()
    {
        
        $id= $this->id = uniqid();
        $pid=  $this->input->post('pid');
        $id_cabang=  $this->input->post('id_cabang');
        $nama=  $this->input->post('nama');
        $status=  $this->input->post('status');
        $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
        $tgl_terima=  $this->input->post('tgl_terima');

        $s_id = 'test';

        $an=$_FILES['an']['name'];
        $pj=$_FILES['pj']['name'];
        $sv=$_FILES['sv']['name'];

        $this->load->library('upload');

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
        
        $data=array(
            'id'=>$id,
            'pid'=>$pid,
            'id_cabang'=>$id_cabang,
            'nama'=>$nama,
            'status'=>$status,
            'tgl_aplikasi'=>$tgl_aplikasi,
            'tgl_terima'=>$tgl_terima,
            'an'=>$an,
            'pj'=>$pj,
            'sv'=>$sv,

        );

        $this->db->insert('customer',$data);
    }

     public function update()
    {
        $post = $this->input->post();
        $id=  $this->input->post('id');
        $id_user=  $this->input->post('id_user');
        $pid=  $this->input->post('pid');
        $id_cabang=  $this->input->post('id_cabang');
        $nama=  $this->input->post('nama');
        $status=  $this->input->post('status');
        $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
        $tgl_terima=  $this->input->post('tgl_terima');
        $an=  $this->input->post('an');
        $pj=  $this->input->post('pj');
        $sv=  $this->input->post('sv');
        $tgl_input=  $this->input->post('tgl_input');
        
         $this->db->update($this->_table, $this, array('id' => $post['id']));

        // $this->db->update('customer',$data);

    }

    public function save()
    {
        // $upload_dokumen = $this->upload_dokumen();
        // $upload_pj = $this->upload_pj();
        $pj = "pj";
        $sv = "sv";
        // $upload_pj = $this->upload_pj();
        $post = $this->input->post();
        $this->id = uniqid();
        $this->pid = $post["pid"];
        $this->id_cabang = $post["id_cabang"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->tgl_aplikasi = $post["tgl_aplikasi"];
        $this->tgl_terima = $post["tgl_terima"];
        $this->an = $this->upload_dokumen();
        $this->pj = $this->upload_pj();
        $this->sv = $sv;
        // $this->pj = $upload_pj;


        // $an = $_FILES['an']['name'];
        // $pj = $_FILES['pj']['name'];

        // $config['upload_path'] = 'assets/dokumen/an';
        // $config['allowed_types'] = 'pdf';

        // $this->load->library('upload', $config);

        // $file_name = "an";
        // $file_name2 = "pj";

        // $this->upload->do_upload($file_name);
        // $this->upload->do_upload($file_name2);


        // $this->sv = $upload_sv;
        $this->db->insert($this->_table, $this);
    }

     public function upload_dokumen()
    {
        // assets/images/product_image
        $config['upload_path'] = 'assets/dokumen/an';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('an'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['an']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            unset($config);
            return ($data == true) ? $path : false;
            unset($config);
        }
    }

     public function upload_pj()
    {
        // assets/images/product_image

        $config2['upload_path'] = 'assets/dokumen/pj';
        $config2['file_name'] =  uniqid();
        $config2['allowed_types'] = 'pdf';
        $config2['max_size'] = '1000';

        // $config['max_width']  = '1024';s
        // $config['max_height']  = '768';

        $this->load->library('upload', $config2);
        if ( ! $this->upload->do_upload('pj'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['pj']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config2['upload_path'].'/'.$config2['file_name'].'.'.$type;
            return ($data == true) ? $path : false;

        }
    }









      public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    
    }

    function edit($id,$id_user,$pid,$id_cabang,$nama,$status,$tgl_aplikasi,$tgl_terima,$an,$pj,$sv){
        $hasil=$this->db->query("UPDATE customer SET 
            id_user='$id_user',
            pid='$pid',
            id_cabang='$id_cabang',
            nama='$nama', 
            status='$status',
            tgl_aplikasi='$tgl_aplikasi',
            tgl_terima='$tgl_terima',
            an='$an',
            pj='$pj',
            sv='$sv'
            

            WHERE id='$id'");
        return $hsl;
    }

 // public function edit()
 //    {
 //        $this->form_validation->set_rules('id', 'id', 'required');
 //        if($this->form_validation->run()==FALSE){
 //            $this->session->set_flashdata('error',"Data Gagal Di Edit");
 //            redirect('form');
 //        }else{
 //            $data=array(
 //                "mod_name"=>$_POST['mod_name'],
 //            );
 //            $this->db->where('mod_id', $_POST['mod_id']);
 //            $this->db->update('t_mod',$data);
 //            $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
 //            redirect('Modal');
 //        }
 //    }    
    
}