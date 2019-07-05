<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe extends CI_Controller {

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
		$data["tipe"] = $this->db->query("select * from tipe_soal")->result();
		$this->load->view('admin/tipe/index',$data);
	}

	public function save_tipe(){
		$data = array(
			"tipe" => $this->input->post('namatipe'),
			"metode" => $this->input->post('metode'),
			"deskripsi" => $this->input->post('deskripsi')
		);
		$this->soal_model->save_tipe($data);
			echo "success";
	}

	public function addTipe(){
		$this->load->view('admin/tipe/addtipe');
	}

	public function update($id)
	{
		$data["tipe"] = $this->db->query("select * from tipe where id_tipe=$id ")->result();
		$this->load->view('admin/tipe/updatetipe',$data);
	}
	
	public function delete($id)
	{
		$this->soal_model->delete_tipe($id);
		redirect('tipe','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */