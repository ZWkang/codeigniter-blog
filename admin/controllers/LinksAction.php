<?php
class LinksAction extends CI_Controller{
	//初始化加载
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Links_model');
		$this->load->library('form_validation');
	}
	//友情链接列表
	function index(){
		$result = $this->Links_model->indexShow();
		$data = array(
			'Links' => $result
			);
		$this->load->view('admin/Links',$data);
	}
	//修改页面展示
	function editShow($id=0){
		
	}
	function addShow(){

	}
	function indexShow(){
		
	}
	//处理修改链接
	function editUpdate($id=0){
	
	}
	//处理添加链接
	function addInsert(){

	}
	//处理删除链接
	function LinksDel(){

	}
}
