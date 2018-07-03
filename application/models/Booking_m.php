<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_m extends CI_Model {

	public function book()
	{
		$ret = $this->gen_no_book();
		$set = array(
			'no_book' => $this->gen_no_book(),
			'tanggal' => date('Y-m-d'),
			'tanggal_in' => $this->input->post('tanggal_in'),
			'tanggal_out' => $this->input->post('tanggal_out'),
			'status' => 1,
			'fk_id_kamar' => $this->input->post('fk_id_kamar'),
			'fk_id_kustomer' => $this->session->userdata('logged_in')['id']
		);
		$this->db->insert('booking',$set);
		return $ret;
	}
	public function gen_no_book()
	{
		$query = $this->db->query("select * from booking order by no_book desc limit 1");
		if ($query->num_rows() > 0) {
			$result = $query->result();
			$row = $result[0];
			$id = (int) substr($row->no_book, 9,5)+1;
			$newid = substr('00000'.($id), -5);
			return 'DM-Hotel-'.$newid.'-'.rand(100000,999999);
		}else{
			return 'DM-Hotel-00001-'.rand(100000,999999);
		}
	}
}

?>