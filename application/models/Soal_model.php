<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Soal_model extends CI_Model
{

	public function listtipe(){
		return $this->db->query("select * from tipe_soal")->result();
	}

	public function listcerita(){
		return $this->db->query("select * from cerita")->result();
	}
	public function save($data){
		$this->db->insert("soal",$data);
	}

	public function save_cerita($data){
		$this->db->insert("cerita",$data);
	}

	public function save_tipe($data){
		$this->db->insert("tipe_soal",$data);
	}

	public function update_cerita($data,$id){
		$this->db->where('id_cerita', $id);
		$this->db->update("cerita",$data);

	}

	public function getCerita($id){
		return $this->db->query("select * from cerita where id_cerita = '$id'")->result();
	}

	public function delete_cerita($id)
	{
		$this->db->where('id_cerita', $id);
		$this->db->delete('cerita');
	}

	public function delete_soal($id)
	{
		$this->db->where('id_soal', $id);
		$this->db->delete('soal');
	}

	public function delete_tipe($id)
	{
		$this->db->where('id_tipe', $id);
		$this->db->delete('tipe_soal');
	}

}