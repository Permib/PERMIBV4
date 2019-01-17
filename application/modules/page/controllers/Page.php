<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
  function __construct() {
	  parent::__construct();
	  $this->load->model('M_Page');
	  // Cek kalo bukan admin dilempar ke halaman utama
	  if($this->session->userdata('jabatan') != 'admin'){
		  // Cek, kalo bukan halaman detail page (yang hanya bisa diakses oleh admin), gak bisa diakses langsung sebelum login
		  if($this->uri->segment(1) != 'event'){
			redirect(base_url(''));  
		  }
	   }
  }

	public function index(){
    $css = []; // Cssnya gak ada berarti kalo kosong
    $data = ['title' => 'Kelola Posting',
                  'css' => $css,
                  'page' => $this->M_Page->get_all_page()];
    $this->load->view('template/v_admin_header', $data);
    $this->load->view('v_page_index.php');
    $this->load->view('template/v_admin_footer');

  }

  public function detail_page(){
    if($this->uri->segment(2)){ // untuk ngambil link judulnya
      $slug_post = $this->uri->segment(2);
	  $page = $this->M_Page->get_page($slug_post);
	  if($page){
		  $css = array('event_detail.css');
		  $data = array('title' => 'Event - Perhimpunan Mahasiswa Bandung Telkom university',
						'page' => $page,
						'css' => $css);
		  $this->load->view('template/v_header', $data);
		  $this->load->view('v_page_detail.php');
		  $this->load->view('template/v_footer');
	  }else{
		 
	  }
    }
  }

  private function form($action = 'insert', $slug_post =''){
	
	$css = [];
  
    $this->form_validation->set_rules('judul', 'Judul', 'required');
	$this->form_validation->set_rules('tanggal_event', 'Tanggal Event', 'required');
	$this->form_validation->set_rules('isi', 'isi post', 'required|min_length[30]');
   
	if ($this->form_validation->run() == FALSE)
	{
		$data = array('css' => $css,
			  //'action' => base_url('page/'.$action.'/'.$slug_post),
			  'title' => $action,
			  'page' => $this->M_Page->get_page($slug_post));
		$this->load->view('template/v_admin_header', $data);
		$this->load->view('v_page_form');
		$this->load->view('template/v_admin_footer');
	}
	else
	{
		//cek untuk navigasi post dari form, apakah insert atau update
		if($action == 'insert'){
			$this->insert();
		}
		else{
			$this->update($slug_post);
		}
	}

   
  }

  public function create()
  {
    $this->form();
  }

  public function edit($slug_post)
  {
    $this->form('update', $slug_post);
  }


  public function insert(){
    $slug = url_title(set_value('judul'), 'dash', true);
    if(!$this->M_Page->check_slug($slug)){
		$path_year = date('Y');
        $path_month = date('m');
        $path_img = 'assets/image/post/'.$path_year.'/'.$path_month;
        if (!is_dir($path_img))
        {
          mkdir($path_img, 0777, TRUE);
        }

        $config['upload_path']          = $path_img;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 1920;
        $config['max_height']           = 1280;
        $config['file_name']            = $slug;

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('image'))
			{
            echo $this->upload->display_errors('<p>', '</p>');
  			}else{
  				 $this->session->set_flashdata('upload_status', 'sukses');
  				 $gambar = $this->upload->data();
  				 $source = './assets/image/post/'.$path_year.'/'.$path_month.'/'.$gambar['file_name'];

           $data = array(
              'users' => $this->session->userdata('username'),
              'judul_post' => set_value('judul'),
              'isi_post' => set_value('isi'),
              'image' => $source,
              'tanggal_event' => set_value('tanggal_event'),
              'tanggal_post' => date('Y-m-d H-m-s'),
              'slug_post' => $slug
           );
            $this->M_Page->insert($data);
            $this->session->set_flashdata('insert_page','sukses');
            redirect('page');
          }
    }else{
      $this->session->set_flashdata('insert_page','gagal');
      redirect('page');
    }
  }
  
  private function uploadImage(){
		$path_year = date('Y');
        $path_month = date('m');
        $path_img = './assets/image/post/'.$path_year.'/'.$path_month;
        if (!is_dir($path_img))
        {
          mkdir($path_img, 0777, TRUE);
        }

        $config['upload_path']          = $path_img;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 1024000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1280;
        $config['file_name']            = $slug;

        $this->load->library('upload', $config);
  }

  public function update($slug_post){
    $new_slug = url_title($this->input->post('judul'), 'dash', true);
	$data = [];
	echo var_dump($_FILES['image']);
	if(!empty($_FILES['image'])){ // ngecek jika ada update gambar terbaru, bakal di upload ulang
	
		$data_page = $this->M_Page->get_page($slug_post); //mengambil object data page dari slug / id PK
		$filename = $data_page->image; // mengambil nama file dari object data page
		$this->delete_image($filename); // Hapus gambar lama sebelum ganti yang baru
	
		$path_year = date('Y');
        $path_month = date('m');
        $path_img = './assets/image/post/'.$path_year.'/'.$path_month;
		
        if (!is_dir($path_img))
        {
          mkdir($path_img, 0777, TRUE);
        }
		

        $config['upload_path']          = $path_img;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 1920;
        $config['max_height']           = 1280;
        $config['file_name']            = $slug_post;

        $this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('image')){
			$error = array('error' => $this->upload->display_errors());
			redirect('page', $error);
		}else{
			
			$this->session->set_flashdata('upload_status', 'sukses');
			$gambar = $this->upload->data();
			$source = 'assets/image/post/'.$path_year.'/'.$path_month.'/'.$gambar['file_name'];	
			$data['image'] = $source;
			echo var_dump($data);
		}
	}
   $data += [
	  'users' => $this->session->userdata('username'),
	  'judul_post' => set_value('judul'),
	  'isi_post' => set_value('isi'),
	  'tanggal_event' => set_value('tanggal_event'),
	  'tanggal_post' => date('Y-m-d H-m-s'),
   ];  
	$this->M_Page->update($slug_post, $data);
	$this->session->set_flashdata('update_page','success');
	redirect('page');
       
  }

  public function delete(){
	$slug = $this->input->post('slug'); // ngambil slug/link judulnya dari post
	$data = $this->M_Page->get_page($slug); // ngambil data page dari slug
	$this->delete_image($data->image);
    $this->M_Page->delete($slug); // hapus data page pake slug
	$this->session->set_flashdata('delete_page', 'sukses');
    redirect('page');
  }
  
  private function delete_image($filename){
		$filename = './'.$filename;
	   if (file_exists($filename)){
            unlink($filename);	
        }
  } 
}
