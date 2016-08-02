<?php
class LinksAction extends MY_Controller{
	public $urls = 'LinksAction/editShow';
	//初始化加载
	function __construct(){
		parent::__construct();
		$premission=$this->session->userdata('premission');
		if(!in_array('5', $premission)){
			error('无权访问友情链接');
		}
		$this->load->helper('url');
		$this->load->model('Links_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	//友情链接列表
	function index(){
		$result = $this->Links_model->indexShow();
		$data = array(
			'Links' => $result,
			
			);
		$this->load->view('admin/Links',$data);
		// echo var_dump($string);
	}
	//修改页面展示
	function editShow($id=0){

		$result = $this->Links_model->GetFiled('link_id',$id);
		// print_r($result);
		$data = array(
			'Link'=>$result
		);
		// print_r($data);
		$this->load->view('admin/edit_links',$data);
	}
	//添加栏目展示
	function addShow(){
		$this->load->view('admin/add_link');
	}

	//处理修改链接
	function editUpdate(){
		$id=$this->uri->segment(3)+0;
		$this->form_validation->set_rules('link_id', 'Username', 'required');
		//要启用验证模式的话
		//必须添加规则
		if($this->form_validation->run() == FALSE){
			 $this->formTips(validation_errors(),"LinksAction/editShow/".$this->uri->segment(3));
		} else {
		$data = array(
			'link_id' => $this->input->post('link_id'),
			'link_name' => $this->input->post('link_name'),
			'link_title' => $this->input->post('link_title'),
			'link_url' => $this->input->post('link_url'),
			'link_order' => $this->input->post('link_order')
		);
		}

		$result = $this->Links_model->LinkUpdate($id,$data);
		if($result>0){
			$datas = array(
				'message'=>'修改成功!!',
				'id'=>$id,
				'url'=>'LinksAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;		
		}else{
			$datas = array(
				'message'=>'修改失败!!',
				'id'=>$id,
				'url'=>$this->urls
				);
			$this->load->view('template/error',$datas);
			return true;		
		}
	}
	//处理添加链接
	function addInsert(){
		$this->form_validation->set_rules('link_name', 'Links_name', 'required');
		if($this->form_validation->run() == FALSE){
			 $this->formTips(validation_errors(),"ArticleAction/add/");
		} else {
		$data = array(
			'link_name' => $this->input->post('link_name'),
			'link_title' => $this->input->post('link_title'),
			'link_url' => $this->input->post('link_url'),
			'link_order' => $this->input->post('link_order')
		);
		}		
		$result = $this->Links_model->LinkInsert($data);
		if($result>0){
			$datas = array(
				'message'=>'添加成功!!!!!',
				'id'=>'',
				'url'=>'LinksAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		else{
			$datas = array(
				'message'=>'添加失败!!!!!',
				'id'=>'',
				'url'=>'LinksAction/addShow'
				);
			$this->load->view('template/error',$datas);
			return true;			
		}
	}
	//处理删除链接
	function LinksDel(){
		$id=$this->uri->segment(3)+0;
		$result = $this->Links_model->LinkDel($id);
		if($result>0){
			$datas = array(
				'message'=>'删除成功!!!!!',
				'id'=>'',
				'url'=>'LinksAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;			
		}
		else{
			$datas = array(
				'message'=>'删除失败!!!!!',
				'id'=>'',
				'url'=>'LinksAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;				
		}
	}
	public  function formTips($tips="",$url="/"){
		$data = array(
		        'Tips'=> $tips,
		        'url'=> $url
		    );
		// echo $data['Tips'];
		// exit();
		$this->load->view('admin/formTips',$data);
	}
}
