<?php
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
    public function login_kustomer($username,$password)
    {
        $this->db->select('id,nama,alamat,notelp,username');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('kustomer');
        if ($query->num_rows() == 1) {
            return $query->result_array()[0];
        }else {
            return false;
        }
    }
    public function register()
    {
        $data = $this->input->post();
        $data['password'] = md5($data['password']);
        $this->db->insert('kustomer',$data);
    }
}
