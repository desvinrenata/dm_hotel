<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

    public function tampil_data()
    {
        return $this->db->get('admin')->result_array();
    }
    public function tampil_data_id($id)
    {
        return $this->db->where('id',$id)->get('admin')->result_array()[0];
    }
    public function insert()
    {
        $data = $this->input->post();
        $this->db->insert('admin',$data);
    }
    public function update($id)
    {
        $data = $this->input->post();
        $this->db->where('id',$id);
        $this->db->update('admin',$data);
    }
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('admin');
    }
}
