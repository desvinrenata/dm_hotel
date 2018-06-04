<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Admin_m');
    }	
    public function index()
	{
		$data['list_admin'] = $this->Admin_m->tampil_data();
		$this->load->view('admin/tampil',$data);
	}
	public function tambah()
	{
		$this->load->view('admin/tambah');
	}
	public function proses_tambah()
	{
		$this->Admin_m->insert();
		redirect("Admin");
	}
	public function update($id)
	{
		$data['admin'] = $this->Admin_m->tampil_data_id($id);
		$this->load->view('admin/update',$data);
	}
	public function proses_update($id)
	{
		$this->Admin_m->update($id);
		redirect("Admin");
	}
	public function proses_delete($id)
	{
		$this->Admin_m->delete($id);
		redirect("Admin");
	}
}
