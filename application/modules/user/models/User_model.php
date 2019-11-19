<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
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

        $an=$_FILES['an']['name'];
        $pj=$_FILES['pj']['name'];
        $sv=$_FILES['sv']['name'];

        $config['upload_path'] = 'assets/dokumen/an';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '1000';


        $this->load->library('upload',$config);

        $file_name="an";
        $file_name1="pj";
        $file_name2="sv";

        $this->upload->do_upload($file_name);
        $this->upload->do_upload($file_name1);
        $this->upload->do_upload($file_name2);
        
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
        $id= $this->id = uniqid();
        $pid=  $this->input->post('pid');
        $id_cabang=  $this->input->post('id_cabang');
        $nama=  $this->input->post('nama');
        $status=  $this->input->post('status');
        $tgl_aplikasi=  $this->input->post('tgl_aplikasi');
        $tgl_terima=  $this->input->post('tgl_terima');

        $an=$_FILES['an']['name'];
        $pj=$_FILES['pj']['name'];
        $sv=$_FILES['sv']['name'];

        $config['upload_path'] = 'assets/dokumen/an';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '1000';


        $this->load->library('upload',$config);

        $file_name="an";
        $file_name1="pj";
        $file_name2="sv";

        $this->upload->do_upload($file_name);
        $this->upload->do_upload($file_name1);
        $this->upload->do_upload($file_name2);
        
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

        $this->db->update('customer',$data);

    }





    public function save()
    {
        $upload_dokumen = $this->upload_dokumen();
        // $upload_pj = $this->upload_pj();
        $post = $this->input->post();
        $this->id = uniqid();
        $this->pid = $post["pid"];
        $this->id_cabang = $post["id_cabang"];
        $this->nama = $post["nama"];
        $this->status = $post["status"];
        $this->tgl_aplikasi = $post["tgl_aplikasi"];
        $this->tgl_terima = $post["tgl_terima"];
        // $this->an = $upload_dokumen;
        // $this->pj = $upload_pj;


        $an = $_FILES['an']['name'];
        $pj = $_FILES['pj']['name'];

        $config['upload_path'] = 'assets/dokumen/an';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);

        $file_name = "an";
        $file_name2 = "pj";

        $this->upload->do_upload($file_name);
        $this->upload->do_upload($file_name2);


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
            return ($data == true) ? $path : false;

        }
    }
     public function remove($id)
    {
        if($id) {
            $this->db->where('id', $id);
            $delete = $this->db->delete('categories');
            return ($delete == true) ? true : false;
        }
    }

    
    
}