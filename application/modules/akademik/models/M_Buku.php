<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buku extends CI_Model {

  public function get_all_buku(){
    $query = $this->db->get('tbl_buku');

    if($query->num_rows() > 0){
      return;urn $query->result();
    }else{
      return false;
    }
  }

  public function get_buku($id_buku){
    $query = $this->db->where('id', $id_buku)
                      ->get('tbl_buku');

    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }
  

}
