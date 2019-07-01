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
		$this->load->view('admin/dashboard');
	}

	public function profil()
	{
		$this->load->view('admin/profil');
	}

	public function tabel()
	{
		$this->load->view('admin/tabel');
	}

	public function blank()
	{
		$this->load->view('admin/blank');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */