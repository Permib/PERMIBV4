<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

  public function check_credential(){
    $username = set_value('_username');
    $password = hash('sha512', set_value('_password'));

    $query = $this->db->where(array('username' => $username, 'password' => $password))
              ->limit(1)
              ->get('tbl_users');

    if($query->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }

  public function get_akun($username){
    $query = $this->db->select('username', 'nama', 'level', 'jabatan', 'image')
                      ->where('username', $username)
                      ->get('tbl_users');

    if($query->num_rows() > 0){
      return $query->row();
    }else{
      return false;
    }
  }



}
