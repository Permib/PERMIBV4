<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('Page/M_Page');
		$css = array('style.css');
		$data = array('title' => 'PERMIB - Perhimpunan Mahasiswa Bandung Telkom university',
									'css' => $css,
									'event' => $this->M_Page->get_event_by_total(3)
								);

		$this->load->view('template/v_header', $data);
		$this->load->view('v_homepage');
		$this->load->view('template/v_footer');
	}

	public function about()
	{
		$css = array('about_permib.css');
		$data = array('title' => 'About PERMIB - Perhimpunan Mahasiswa Bandung Telkom university',
									'css' => $css);

		$this->load->view('template/v_header', $data);
		$this->load->view('v_about');
		$this->load->view('template/v_footer');
	}

	public function documentation()
	{
		$css = array('docum.css');
		$data = array('title' => 'Documentation - Perhimpunan Mahasiswa Bandung Telkom university',
									'css' => $css);

		$this->load->view('template/v_header', $data);
		$this->load->view('v_documentation');
		$this->load->view('template/v_footer');
	}
	
	public function event(){
		$this->load->model('Page/M_Page');
		$css = array('event.css');
		$data = array('title' => 'Event - Perhimpunan Mahasiswa Bandung Telkom university',
									'css' => $css,
									'event' => $this->M_Page->get_event_by_total(3)
					  );

		$this->load->view('template/v_header', $data);
		$this->load->view('v_event');
		$this->load->view('template/v_footer');
	}
}
