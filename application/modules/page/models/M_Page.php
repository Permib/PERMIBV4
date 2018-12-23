<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Page extends CI_Model {

  public function insert($data){
    $this->db->insert('tbl_post', $data);
  }

  public function update($slug_post, $data){
    $this->db->where('slug_post', $slug_post)
             ->update('tbl_post', $data);
  }

  public function delete($id){
    $this->db->where('slug_post', $id)
              ->delete('tbl_post');
  }

  public function get_page($slug_post){
    $query = $this->db->where('slug_post', $slug_post)
                      ->get('tbl_post');

    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return $this;
    }
  }

  public function get_all_page(){
    $query = $this->db->select('slug_post, judul_post, image, tanggal_post, tanggal')
                      ->order_by('tanggal_post','desc')
                      ->get('tbl_post');

    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $this;
    }

  }

  public function get_event_by_total($total = '1'){
    $query = $this->db->limit($total)
               ->order_by('tanggal_post','desc')
			    ->get('tbl_post');

    if($query->num_rows() > 0){
        return $query->result();
    }else{
        return $this;
    }
  }

  public function check_slug($slug){
    $query = $this->db->where('slug_post', $slug)
                      ->get('tbl_post');
    if($query->num_rows() > 0){
          return true;
    }else{
          return false;
    }
  }


}
