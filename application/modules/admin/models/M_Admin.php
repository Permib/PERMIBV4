<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

  public function insert($data){
    $this->db->insert('tbl_post', $data);
  }

}
