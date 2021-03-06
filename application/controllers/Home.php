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
	public function checkout($id)
	{
		if ($this->session->userdata('logged_in') == null) {
			echo '<script>alert("Harus Login Dahulu")</script>';
        	redirect('Login/logout','refresh');
        }
		$this->load->model('Kamar_m');
		$this->load->model('Jenis_m');
		$this->load->model('Booking_m');
		$data['jenis'] = $this->Jenis_m->get_id($id);
		$data['no_book'] = $this->Booking_m->gen_no_book();
		$data['list_kamar'] = $this->Kamar_m->get_data_jenis($id);
		$this->load->view('checkout',$data);
	}
	public function complete()
	{
		if ($this->session->userdata('logged_in')['nama'] == null) {
			echo '<script>alert("Harus Login Dahulu")</script>';
        	redirect('Login/logout','refresh');
        }
		$this->load->model('Booking_m');
		$id = $this->Booking_m->book();
		redirect('Home/complete_view/'.$id,'refresh');
		
	}
	public function complete_view($id)
	{
		if ($this->session->userdata('logged_in')['nama'] == null) {
			echo '<script>alert("Harus Login Dahulu")</script>';
        	redirect('Login/logout','refresh');
        }
		$data['no_book'] = $id;
		$this->load->view('complete',$data);
	}
}
