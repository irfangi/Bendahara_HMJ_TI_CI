<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyModel extends CI_Model {
	public function getTabPH()
	{
		$data = $this->db->query('SELECT * FROM bendahara_tabunganPH');
		return $data->result_array();
	}
	public function insertData($tabel,$data){
			$res = $this->db->insert($tabel,$data);
			return $res;
	}
	public function updateData($tabel,$data,$where){
		$res = $this->db->update($tabel,$data,$where);
		return $res;
	}
	public function deleteData($tabel,$where){
		$res = $this->db->delete($tabel,$where);
		return $res;
	}
}
