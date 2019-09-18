<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
		
		public $code;
		public $obj_name;
		public $level;
		public $info;

	
	function __construct(){
	    parent::__construct();
	}
	function index(){
		$this->load->model('okrs_model','okrm');
		$data['query'] = $this->okrm->list_okrs();
		
		$this->load->view('v_manage',$data);

		
		
	}
	function add_Okrs(){
		$code = $this->input->post('code');
		$obj_name = $this->input->post('obj_name');
		$level = $this->input->post('level');
		$info = $this->input->post('info');

		$this->load->model('okrs_model','okrm');
		$okrm = $this->okrm;
		$okrm->code = $code;
		$okrm->obj_name = $obj_name;
		$okrm->level = $level;
		$okrm->info = $info;
		$okrm->insert();
		redirect("http://localhost/ci/index.php/Manage/index");
	}
	function deleteokrs($code){
		//$code = $this->input->post('code');
		$this->load->model('okrs_model','okrm');
		$okrm = $this->okrm;
		$okrm->code = $code;
		$okrm->delete();
		redirect("http://localhost/ci/index.php/Manage/index");
	}
	function edit_okrs(){
		$this->load->model('okrs_model','okrm');
		$okrm = $this->okrm;
		$okrm->code = $this->input->post('code');
		$okrm->obj_name = $this->input->post('obj_name');
		$okrm->level = $this->input->post('level');
		$okrm->info = $this->input->post('info');
		$okrm->edit();
		redirect("http://localhost/ci/index.php/Manage/index");
	}
}
?>