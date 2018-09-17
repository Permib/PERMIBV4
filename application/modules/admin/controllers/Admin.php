<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('M_Admin');
  }

	public function index()
	{
    $this->load->view('v_admin_index.php');
  }

}
