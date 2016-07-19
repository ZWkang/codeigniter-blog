<?php
class User extends CI_Controller{

	//define('ROOT_PUBLIC',dirname());

	public function index(){
	}
	public function __construct(){
		parent::__construct();
		// $data['website']=$config['base_url'];
		$this->load->helper('url');
		$this->load->view('admin/index');
	}


}


?>