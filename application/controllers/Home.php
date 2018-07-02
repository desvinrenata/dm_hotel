<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
    }	
    public function index()
	{
		$data['kamar'] = null;
		if ($this->session->userdata('search') != null) {
			$this->load->model('Jenis_m');
			$data['jenis_kamar'] = $this->Jenis_m->get_data_kamar(); 
		}
		$this->load->view('home',$data);
	}
	public function search()
	{
		$data = array();
		if ($this->input->post('tanggal_in') != null) {
			$data['tanggal_in'] = $this->input->post('tanggal_in');
		}
		if ($this->input->post('tanggal_out') != null) {
			$data['tanggal_out'] = $this->input->post('tanggal_out');
		}
		$this->session->set_userdata('search',$data);
		redirect('Home','refresh');	
	}
	public function reset_search()
	{
		$this->session->unset_userdata('search');
		redirect('Home','refresh');
	}
}
