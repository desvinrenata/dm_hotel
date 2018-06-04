<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Login_m');
    }	
    public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|trim|callback_proses');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		}else{
			redirect('Home');
		}
	}
	public function proses($username)
	{
		$password = md5($this->input->post('password'));
		if ($data = $this->Login_m->login($username,$password)) {
			$this->session->set_userdata('logged_in',$data);
			return true;
		}else{
			$this->form_validation->set_message('proses','Username dan password tidak valid');
			return false;
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login','refresh');
	}
}
