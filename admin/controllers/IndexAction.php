<?php
class IndexAction extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Index_model','index');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index(){
		$data['records'] = $this->index->GetAllRecord();
		$this->load->view('admin/index',$data);
	}

}

?>