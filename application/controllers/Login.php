<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$status = $this->session->userdata("login");
		if($status){
				redirect("Admin","refresh");
		}
		$this->load->view('login');
	}

	public function cekDB($password)
	{
		$this->load->Model('login_model');
		$username = $this->input->post('username');
		$hasil = $this->login_model->login($username,$password);
		if($hasil){
			return true;
		}else{
			return false;
		}
	}

	public function login_aksi(){
		$dataLogin = array(
				"username" => $this->input->post('username'),
				"password" => $this->input->post('password')
				);
		$this->form_validation->set_data($dataLogin);
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required|callback_cekDB');
			if ($this->form_validation->run() == FALSE) {
				echo "danger";
			} else {
				$sess_arr = array(
				'logged_id' => true,
				'username' => $this->input->post('username'),
				);
				$this->session->set_userdata('login',$sess_arr);
				echo "success";
					
			}
	}

	public function log_out(){
		$this->session->unset_userdata('login');
		redirect("Login","refresh");
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */