<?php
class LinksAction extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Links_model');
		$this->load->library('form_validation');
	}
	function index(){
		$this->Links_model->model('');
	}
	function editShow(){

	}
	function addShow(){

	}
	function indexShow(){

	}
	function editUpdate(){

	}
	function addInsert(){

	}
	function LinksDel(){

	}
}
