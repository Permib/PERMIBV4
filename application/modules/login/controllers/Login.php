<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('M_Login');
  }

	public function index()
	{
    $this->form_validation->set_rules('_username', 'Username', 'required');
    $this->form_validation->set_rules('_password', 'Password', 'required');
		if(!$this->form_validation->run()){
      $this->load->view('v_login');
    }else{
      if($this->M_Login->check_credential()){
        $username = set_value('_username');
        $data = $this->M_Login->get_akun($username);
        $this->session->set_userdata($data);
        redirect('dashboard');
      }else{
        $this->session->set_flashdata('status_login','gagal');
        redirect('login');
      }
    }
  }
}
