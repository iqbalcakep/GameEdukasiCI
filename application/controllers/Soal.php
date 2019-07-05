<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {

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
		$data["setting"] = $this->db->query("select * from setting inner join tipe_soal on setting.id_tipe = tipe_soal.id_tipe ")->result();
		$data["soal"] = $this->db->query("select * from soal inner join cerita on soal.id_cerita = cerita.id_cerita join tipe_soal on soal.id_tipe = tipe_soal.id_tipe")->result();
		$this->load->view('admin/soal/index',$data);
	}

	public function add(){
		$this->load->view('admin/soal/add');
	}

	public function Listtipe(){
		$data = $this->soal_model->listtipe();
		echo json_encode($data);
	}

	public function Listcerita(){
		$data = $this->soal_model->listcerita();
		echo json_encode($data);
	}

	public function save(){
		$config['upload_path']="./assets/file";
        $config['allowed_types']='gif|jpg|png|mp4|mkv'; 
        $this->load->library('upload',$config); 
        if($this->upload->do_upload("gambar")){ 
            $foto = array('upload_data' => $this->upload->data());
            $gambar= $foto['upload_data']['file_name']; 
		}else{
			$gambar ="null";
		}
		if($this->upload->do_upload("video")){ 
            $vid = array('upload_data' => $this->upload->data()); 
            $video= $vid['upload_data']['file_name']; 
		}else{
			$video="null";
		}
		$data = array(
			"id_cerita" => $this->input->post('id_cerita'),
			"id_tipe" => $this->input->post('id_tipe'),
			"text" => $this->input->post('anak_soal'),
			"a" => $this->input->post('a'),
			"b" => $this->input->post('b'),
			"c" =>$this->input->post('c'),
			"d" =>$this->input->post('d'),
			"jawaban" => $this->input->post('jawaban'),
			"gambar" => $gambar,
			"video" => $video
		);
		$this->soal_model->save($data);
			echo "success";
		
		
	}

	public function save_isian(){
		$config['upload_path']="./assets/file";
        $config['allowed_types']='gif|jpg|png|mp4|mkv'; 
        $this->load->library('upload',$config); 
        if($this->upload->do_upload("gambar")){ 
            $foto = array('upload_data' => $this->upload->data());
            $gambar= $foto['upload_data']['file_name']; 
		}else{
			$gambar ="null";
		}
		if($this->upload->do_upload("video")){ 
            $vid = array('upload_data' => $this->upload->data()); 
            $video= $vid['upload_data']['file_name']; 
		}else{
			$video="null";
		}
		$data = array(
			"id_cerita" =>"null",
			"id_tipe" => $this->input->post('id_tipe2'),
			"text" => $this->input->post('anak_soal2'),
			"a" => "null",
			"b" => "null",
			"c" =>"null",
			"d" =>"null",
			"jawaban" => $this->input->post('jawaban'),
			"gambar" => $gambar,
			"video" => $video
		);
		$this->soal_model->save($data);
			echo "success";
		
		
	}

	public function save_cerita(){
		$data = array(
			"tema" => $this->input->post('subjek'),
			"cerita" => $this->input->post('cerita')
		);
		$this->soal_model->save_cerita($data);
			echo "success";
	}

	public function update_cerita(){

		$id = $this->input->post('id_cerita');
		
		$data = array(
			"tema" => $this->input->post('subjek'),
			"cerita" => $this->input->post('cerita')
		);

		$this->soal_model->update_cerita($data,$id);
		echo "success";
	}

	public function pilihMetode($id){
		$data = $this->db->query("select * from tipe_soal where id_tipe = $id")->result();
		echo json_encode($data);
	}

	public function updateSetting(){
		$jumlah = $this->db->query("select * from setting inner join tipe_soal on setting.id_tipe = tipe_soal.id_tipe ")->num_rows();
		for($i=1;$i<=$jumlah;$i++){
			$id = $i;
			$jml = $this->input->post($i);
			$this->db->query("update setting set jumlah = '$jml' where id_setting = $id ");
		}
		redirect('/soal','refresh');
	}


	public function getCerita($id){
		$data =	$this->soal_model->getCerita($id);
		echo json_encode($data);
	}

	public function addCerita(){
		$this->load->view('admin/soal/addcerita');
	}

	public function delete($id)
	{
		$this->soal_model->delete_soal($id);
		redirect('soal','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */