<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	public function index()
	{
		$this->load->model('Jenis_m');
		$data['jenis_data'] = $this->Jenis_m->get_data();
		$this->load->view('jenis/tampil',$data);
	}
	public function tambah()
	{
		$this->load->model('Jenis_m');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('harga','harga','required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('jenis/tambah');
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('jenis/tambah',$error);
			}
			else{
				$this->Jenis_m->insert();
				redirect('Jenis','refresh');
			}
			
		}
	}
	public function update($id)
	{
		$this->load->model('Jenis_m');
		$this->load->library('form_validation');
		$data['jenis'] = $this->Jenis_m->get_id($id);
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('harga','harga','required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('jenis/update',$data);
		} else {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('image')){
				$data['sepatu'] = $this->Sepatu_model->getSepatu($id);
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->load->view('jenis/update',$data);
			}
			else{
				$this->Jenis_m->update($id);
				redirect('Jenis','refresh');
			}
			
		}
	}
	public function delete($id)
	{
		$this->load->model('Jenis_m');
		$this->Jenis_m->delete($id);
		redirect('Jenis','refresh');
	}
}
