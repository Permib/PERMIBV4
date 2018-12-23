<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('M_Admin');
  }

	public function index()
	{
    $css = [];
    $data = ['title' => 'Dashboard',
              'css' => $css];

    $this->load->view('template/v_admin_header', $data);
    $this->load->view('v_admin_index.php');
    $this->load->view('template/v_admin_footer');
  }

}
