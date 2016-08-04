<?php
class IndexAction extends MY_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model(array('Index_model'=>'index','Article_model'=>'article',''=>''));
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index(){
		// print_const();exit();
		
		// exit();
		$data['count_article'] = $this->article->count_article();;
		$data['records'] = $this->index->GetAllRecord();
		$this->load->view('admin/index',$data);
	}

}

?>