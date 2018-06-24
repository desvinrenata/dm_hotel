<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_m extends CI_Model {

    public function get_data()
    {
        $query = $this->db->get('jenis');
        return $query->result_array();
    }
    public function get_id($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('jenis');
        return $query->result_array()[0];
    }
    public function insert()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'image' => $this->upload->data('file_name')
        );
        $this->db->insert('jenis',$data);
    }
    public function update($id)
    {
        $set = array(
            'nama' => $this->input->post('nama'),
            'harga' => $this->input->post('harga'),
            'image' => $this->upload->data('file_name')
        );
        $this->db->where('id',$id);
        $this->db->update('jenis',$set);
    }
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('jenis');
    }
}

?>