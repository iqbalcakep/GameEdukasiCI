<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["tipe_soal"] = $this->db->query("select * from tipe_soal")->result();
		$this->load->view('index',$data);
	}

	public function setData(){
		$nama = $this->input->post("nama");
		$kelas = $this->input->post("kelas");
		$sess_arr = array(
			'nama' => $nama,
			'kelas' => $kelas,
			);
			$this->session->set_userdata('datadiri',$sess_arr);
			echo "success";
	}

	public function destroy(){
		$this->session->unset_userdata('datadiri');
		redirect("Home","refresh");
	}
}
