<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$status = $this->session->userdata("login");
		$this->load->model('soal_model');
		if($status){
				
		}else{
			redirect("Login","refresh");
		}
	}

	public function index()
	{
		$data["cerita"] = $this->db->query("select * from cerita")->result();
		$this->load->view('admin/cerita/index',$data);
	}

	public function update($id)
	{
		$data["cerita"] = $this->db->query("select * from cerita where id_cerita=$id ")->result();
		$this->load->view('admin/cerita/updatecerita',$data);
	}
	
	public function delete($id)
	{
		$this->soal_model->delete_cerita($id);
		redirect('cerita','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */