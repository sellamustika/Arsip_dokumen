<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model
{
 function get_data_stok(){

 	$tgl=  $this->input->post('tgl');
        $query = $this->db->query("SELECT tgl_input,status ,SUM(count) AS stok FROM customer WHERE tgl_input LIKE '%$tgl%' GROUP BY status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
 function get_data_date(){

        $query = $this->db->query("SELECT DISTINCT YEAR(tgl_input) FROM customer");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $tanggal){
                $h = $tanggal;
            }
            return $h;
        }
    }

    public function getDate()
    {
        $sql = "SELECT DISTINCT YEAR(tgl_input) FROM customer";
        $query = $this->db->query($sql);
        return $query->result();
    }

}