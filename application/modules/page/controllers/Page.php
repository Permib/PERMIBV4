<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
  function __construct() {
      parent::__construct();
      $this->load->model('M_Page');
  }

	public function index()
	{
    $data = array('page' => $this->M_Page->get_all_page());
    $this->load->view('v_page_index.php', $data);
  }

  public function detail_page($id){
    $data = array('page' => $this->M_Page->get_page($id));
    $this->load->view('v_page_detail.php', $data);
  }

  private function form($action = 'insert', $id =''){
    $data = array('action' => base_url('page/'.$action.'/'.$id),
                  'page' => $this->M_Page->get_page($id));
    $this->load->view('v_page_form', $data);
  }

  public function add(){
    $this->form();
  }

  public function edit($id){
    $this->form('update', $id);
  }


  public function insert(){
    $data = array(
      'users' => $this->session->userdata('username'),
      'judul_post' => $this->input->post('judul'),
      'isi_post' => $this->input->post('isi'),
      'image' => $this->input->post('image'),
      'tanggal_post' => $this->input->post('tanggal'));

      $this->M_Page->insert($data);
      redirect('page');
  }

  public function update($id){
    $data = array(
      'users' => $this->session->userdata('username'),
      'judul_post' => $this->input->post('judul'),
      'isi_post' => $this->input->post('isi'),
      'image' => $this->input->post('image'),
      'tanggal_post' => $this->input->post('tanggal'));

      $this->M_Page->update($id, $data);
      redirect('page');
  }

  public function delete($id){
    $this->M_Page->delete($id);
  }

}
