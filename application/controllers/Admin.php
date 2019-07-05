<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$status = $this->session->userdata("login");
		if($status){
				
		}else{
			redirect("Login","refresh");
		}
	}

	public function index()
	{
		$data["komentar"] = $this->db->query("select * from komentar join tipe_soal on komentar.id_tipe = tipe_soal.id_tipe")->result();
		$this->load->view('admin/dashboard',$data);
	}

	public function profil()
	{
		$this->load->view('admin/profil');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */