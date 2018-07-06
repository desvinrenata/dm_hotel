<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kamar_m');
		$this->load->model('Jenis_m');
		$this->load->model('Booking_m');
	}
	public function index()
	{
		$data['list_cek_in'] = $this->Booking_m->get_cek_in();
		$data['list_cek_out'] = $this->Booking_m->get_cek_out();
		$this->load->view('booking/tampil',$data);
	}
	public function cek()
	{
		
	}
	public function cek_in_view()
	{
		
	}
	public function cek_out_view()
	{
		
	}
}

/* End of file Booking.php */
/* Location: ./application/controllers/Booking.php */ ?>