<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_m extends CI_Model {

    public function get_data()
    {
        $this->db->select('kamar.*,jenis.nama,jenis.harga,jenis.image');
        $this->db->join('jenis','kamar.fk_id_jenis=jenis.id');
        $query = $this->db->get('kamar');
        return $query->result_array();
    }
    public function get_data_jenis($id)
    {
        $this->db->select('kamar.*,jenis.nama,jenis.harga,jenis.image');
        $this->db->join('jenis','kamar.fk_id_jenis=jenis.id');
        $this->db->where('fk_id_jenis',$id);
        $query = $this->db->get('kamar');
        return $query->result_array();
    }
    public function get_jenis()
    {
        return $this->db->get('jenis')->result();
    }
    public function get_id($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('kamar');
        return $query->result()[0];
    }
    public function insert()
    {
        $data = array(
            'fk_id_jenis' => $this->input->post('fk_id_jenis'),
            'no_kamar' => $this->input->post('no_kamar')
        );
        $this->db->insert('kamar',$data);
    }
    public function update($id)
    {
        $set = array(
            'fk_id_jenis' => $this->input->post('fk_id_jenis'),
            'no_kamar' => $this->input->post('no_kamar')
        );
        $this->db->where('id',$id);
        $this->db->update('kamar',$set);
    }
    public function delete($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('kamar');
    }
}

?><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

    public function login($username,$password)
    {
    	$this->db->select('id,username,level');
    	$this->db->where('username',$username);
    	$this->db->where('password',$password);
    	$query = $this->db->get('admin');
    	if ($query->num_rows() == 1) {
    		return $query->result_array()[0];
    	}else {
    		return false;
    	}
    }
}
