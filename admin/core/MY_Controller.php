<?php
class MY_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$username=$this->session->userdata('username');
		$uid = $this->session->userdata('uid');
		if(!$username || !$uid){
			redirect('Login/index');
		}
	}
}

?>