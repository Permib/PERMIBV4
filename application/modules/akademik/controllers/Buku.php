<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('M_Buku');
  }

	public function index()
	{
    $data  = array('' => , );
  }

  private function form($action = 'insert', $id = ''){
    $data = array('action' => $this, );
  }
}
