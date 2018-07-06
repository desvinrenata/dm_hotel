<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in')['level'] == null) {
            redirect('Login/logout','refresh');
        }
    }
    public function index()
    {
       $this->load->view('kustomer/tampil');
    }

     public function getAll()
    {
        $this->load->model('Kustomer_m');
        $result = $this->Kustomer_m->getAll(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('Kustomer_m');
        $this->Kustomer_m->save();
    }

    public function update()
    {
    	$this->load->model('Kustomer_m');
        $this->Kustomer_m->update();
    }
    public function delete()
    {
        $this->load->model('Kustomer_m');
        $id = $this->input->post('id'); 
        $this->Kustomer_m->delete($id);
    }
}
