<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')['level'] == null) {
        	redirect('Login/logout','refresh');
        }
	}
	public function index()
	{
		$this->load->model('Kamar_m');
		$data['kamar_data'] = $this->Kamar_m->get_data();
		$this->load->view('kamar/tampil',$data);

	}
	public function jenis($id)
	{
		$this->load->model('Kamar_m');
		$data['kamar_data'] = $this->Kamar_m->get_data_jenis($id);
		$this->load->view('kamar/tampil',$data);
	}
	public function create()
	{
		$this->load->model('Kamar_m');
		$this->load->library('form_validation');
		$data['jenis'] = $this->Kamar_m->get_jenis();
		$this->form_validation->set_rules('no_kamar','no_kamar','required|is_unique[kamar.no_kamar]');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kamar/tambah',$data);
		} else {
			$this->Kamar_m->insert();
			redirect('Kamar','refresh');
		}
	}
	public function update($id)
	{
		$this->load->model('Kamar_m');
		$this->load->library('form_validation');
		$data['kamar'] = $this->Kamar_m->get_id($id);
		$data['jenis'] = $this->Kamar_m->get_jenis();
		$this->form_validation->set_rules('no_kamar','no_kamar','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kamar/update',$data);
		} else {
			$this->Kamar_m->update($id);
			redirect('Kamar','refresh');
		}
	}
	public function delete($id)
	{
		$this->load->model('Kamar_m');
		$this->Kamar_m->delete($id);
		redirect('Kamar','refresh');
	}
}
