<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kamar_m');
		$this->load->model('Jenis_m');
		$this->load->model('Booking_m');
		if ($this->session->userdata('logged_in')['level'] == null) {
        	redirect('Login/logout','refresh');
        }
	}
	public function index()
	{
		$data['list_booking'] = $this->Booking_m->get_booking();
		$data['list_cek_in'] = $this->Booking_m->get_cek_in();
		$data['list_cek_out'] = $this->Booking_m->get_cek_out();
		$this->load->view('booking/tampil',$data);
	}
	public function cek_in($id)
	{
		$this->Booking_m->cek_in($id);
		redirect('Booking','refresh');
	}
	public function cek_out($id,$id_kamar)
	{
		$this->Booking_m->cek_out($id,$id_kamar);
		redirect('Booking','refresh');
	}
}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */ ?>