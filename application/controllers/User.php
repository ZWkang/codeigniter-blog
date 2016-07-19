<?php
class User extends CI_Controller(){


	public function index(){

	}
	public function __construct(){
		parent::__construct();
		$this->load->view('admin/login');
		$this->load->model('admin_model');
	}


}


?>