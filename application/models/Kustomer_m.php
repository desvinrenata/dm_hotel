<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer_m extends CI_Model {

	public function getAll()
    {
        $this->db->select("id,nama,alamat,notelp,username,'*******' as password");
        $query = $this->db->get('kustomer');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $set['password'] = md5($set['password']);
        $this->db->insert('kustomer', $data);
    }
    public function update()
    {
        $set = $this->input->post();
        $set['password'] = md5($set['password']);
        $this->db->where('id',$set['id']);
        $this->db->update('kustomer', $set);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kustomer');
    }
}

?>