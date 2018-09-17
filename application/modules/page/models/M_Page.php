<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Page extends CI_Model {

  public function insert($data){
    $this->db->insert('tbl_post', $data);
  }

  public function update($id, $data){
    $this->db->where('id_post', $id)
             ->update('tbl_post', $data);
  }

  public function delete($id){
    $this->db->where('id_post', $id)
              ->delete('tbl_post');
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

  public function get_all_page(){
    $query = $this->db->select('id_post, judul_post, image, tanggal_post, tanggal')
                      ->get('tbl_post');

    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $this;
    }

  }


}
