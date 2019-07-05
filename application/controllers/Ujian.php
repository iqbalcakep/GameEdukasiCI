<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('ujianpg');
	}

	public function pg(){
		if($this->session->userdata("soal")!=null){
			$data["soal"] = $this->session->userdata("soal");
			$this->load->view('ujianpg',$data);
		}else{
			redirect("Home","refresh");
		}
	}

	public function isian()
	{
		if($this->session->userdata("soal")!=null){
			$data["soal"] = $this->session->userdata("soal");
			$this->load->view('ujianisi',$data);
		}else{
			redirect("Home","refresh");
		}
		
	}

	public function kirimkomentar(){
		$data = array(
			"nama" => $this->input->post('nama'),
			"kelas" => $this->input->post('kelas'),
			"id_tipe" => $this->input->post('id_tipe'),
			"komentar" => $this->input->post('komentar')
		);
		$this->db->insert("komentar",$data);
		echo json_encode("sukses");
	}

	public function tipe($tipe){
		$this->session->unset_userdata('soal');
		$max = $this->db->query("select tipe,jumlah,metode from setting as s inner join tipe_soal as st on s.id_tipe = st.id_tipe where st.tipe = '$tipe'")->row();
		if($max->metode == "pg"){
			$sql = $this->db->query("select * from soal as s inner join cerita as c on s.id_cerita = c.id_cerita inner join tipe_soal as ts on s.id_tipe = ts.id_tipe where ts.tipe='$tipe' limit $max->jumlah")->result();
			$this->session->set_userdata('soal',$sql);
		}else if($max->metode == "isian"){
			$sql = $this->db->query("select * from soal as s inner join tipe_soal as ts on s.id_tipe = ts.id_tipe where ts.tipe='$tipe' limit $max->jumlah")->result();
			$this->session->set_userdata('soal',$sql);
		}
		redirect("Ujian/$max->metode","refresh");
	}


}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */