<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Page extends CI_Model {

  public function insert($data){
    $this->db->insert('tbl_post', $data);
  }

  public function get_page($id){
    $query = $this->db->where('id_post', $id)
                      ->get('tbl_post');

    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return $this;
    }
  }


}
