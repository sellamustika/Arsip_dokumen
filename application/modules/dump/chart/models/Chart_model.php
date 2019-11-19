<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model
{
 function get_data_stok(){
        $query = $this->db->query("SELECT status ,SUM(count) AS stok FROM customer where tgl="" GROUP BY status ");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
}