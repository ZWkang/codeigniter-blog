<?php
//文章分类操作

class ArticleAction extends CI_Controller{
	public $urls = 'ArticleAction/edit';
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Article_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// $this->load->model('Article_Model');
	}
	/**
	*主页显示列表
	*/
	public function index(){

		$data=$this->Article_model->GetArticle();
		// print_r($data);
		// print_r($this->Article_model->GetCatTree($data));
		$data=array(
	        'categoryes'=>$this->Article_model->GetCatTree($data)
	          );
		$this->load->view('admin/article_category',$data);
	}
	/**
	*跳转到修改页面
	*/
	public function edit(){
		$data=array(
			'categorye'=>$this->Article_model->GetOneArticle($this->uri->segment(3)),
			'article'=>$this->Article_model->GetCatTree($this->Article_model->GetArticle())
		);
		$this->load->view('admin/edit_article_category',$data);
	}
	/**
	*查询一下当前要修改的新爹爹是不是在他的子孙树下面
	*返回一个bool值
	*/
	public function GetBool($cate_id,$cate_pid,$flag){
		$trees = $this->Article_model->GetTree($cate_pid);
		foreach($trees as $value){
			if($value['cate_id']==$cate_id){
				$flag = false;
				break;
			}
		}
		return $flag;
		
	}
	/**
	*对分类列表进行修改
	*/
	public function update($id=0){
		// {
		// 	$data=[]
		// 	$data
		// }
		if(empty($this->uri->segment(3))){
			redirect('ArticleAction/index');
		}
     	$this->form_validation->set_rules('cate_name', '分类名称', 'required|max_length[12]',
	     array(
			'required'  => '必须填写栏目名称!',
			'max_length' => '栏目名称不能超过12个字符!'
		  )
		);
		if($this->form_validation->run() == FALSE){
			// exit();
			$this->formTips(validation_errors(),"ArticleAction/edit/".($this->uri->segment(3)+0));
		} else {
			$data = array(
				'cate_id' => ($this->input->post('cate_id')+0),
				'cate_name' => $this->input->post('cate_name'),
				'cate_title' => $this->input->post('cate_title'),
				'cate_keywords' => $this->input->post('cate_keywords'),
				'cate_description' => $this->input->post('cate_description'),
				'cate_order' => $this->input->post('cate_order'),
				'cate_pid' => ($this->input->post('cate_pid')+0)
			);
		

		if($data['cate_id']==$data['cate_pid']){
			$datass = array(
				'message'=>'你添加自己干嘛啊??',
				'id'=>$id,
				'url'=>$this->urls
				);
			$this->load->view('template/error',$datass);
			return false;
		}
		
		//出错跳转出错页面
		$flag=true;
		// $trees = $this->Article_model->GetTree($data['cate_pid']);
		// foreach($trees as $value){
		// 	if($value['cate_id']==$data['cate_id']){
		// 		$flag = false;
		// 		break;
		// 	}
		// }
		// echo $this->GetBool($data['cate_id'],$data['cate_pid'],$flag);exit();
		if(!$this->GetBool($data['cate_id'],$data['cate_pid'],$flag)){
			$datas = array(
				'message'=>'你在他上面我不允许你这么操作!!',
				'id'=>$id,
				'url'=>$this->urls
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		$query = $this->Article_model->update($data,$id);
		if(!$query){
			$datas = array(
				'message'=>'修改成功!!',
				'id'=>$id,
				'url'=>'ArticleAction/index'
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
	}
	// /**
	// *跳转添加页面
	// */
	public function add(){
		$data=array(
				'article'=>$this->Article_model->GetCatTree($this->Article_model->GetArticle())
			);
		$this->load->view('admin/add_article_category',$data);
	}
	public function insert(){
		$this->form_validation->set_rules('cate_name', '分类名称', 'trim|required|max_length[12]',
	     array(
			'required'  => '必须填写栏目名称!',
			'max_length' => '栏目名称不能超过12个字符!'
		  )
		);
		if($this->form_validation->run() == FALSE){
			 $this->formTips(validation_errors(),"ArticleAction/edit/".$this->uri->segment(3));
		} else {
		$data = array(
			'cate_name' => $this->input->post('cate_name'),
			'cate_title' => $this->input->post('cate_title'),
			'cate_keywords' => $this->input->post('cate_keywords'),
			'cate_description' => $this->input->post('cate_description'),
			'cate_order' => $this->input->post('cate_order'),
			'cate_pid' => $this->input->post('cate_pid')
		);
		}
		$effect = $this->Article_model->GetEff($data['cate_name'],'cate_name');
		if($effect>0||$data['cate_name']==''){
			$datas = array(
				'message'=>'添加失败,说了用户名重复',
				'id'=>'',
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		$query = $this->Article_model->insert($data);
		if($query){
			$datas = array(
				'message'=>'添加成功!!!!!',
				'id'=>'',
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		else{
			$datas = array(
				'message'=>'添加失败!!',
				'id'=>'',
				'url'=>'ArticleAction/add'
				);
			$this->load->view('template/error',$datas);
			return true;
			//添加失败跳转添加界面
		}
	}
	public function delete($cate_pid){
		$son = $this->Article_model->GetSon($cate_pid);
		if(!empty($son)){
			$datas = array(
				'message'=>'有子栏目不允许删除!!',
				'id'=>$cate_pid,
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		$query = $this->Article_model->deleteCat($cate_pid);
		if($query){
			$datas = array(
				'message'=>'神秘力量删除成功!!',
				'id'=>$cate_pid,
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}else{
			$datas = array(
				'message'=>'莫名原因删除失败!!',
				'id'=>$cate_pid,
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;			
		}
	}
	public function CheckCateName(){
		if(!$this->Article_model->GetEff($this->input->post('cate_name'))){
			$data=['status'=>0,'msg'=>'该用户名可用'];
		}else{
			$data=['status'=>1,'msg'=>'该用户名不可用'];
		}
		echo json_encode($data);
		// return $data;
	}
	public function test(){
		if($this->Article_model->GetEff('腾讯体育')>0){
			echo 'hahaha';
		}else{
			echo 'xxxx';
		}
	}
	public function Show_One_Category(){
		if(empty($this->uri->segment(3))){
			redirect('ArticleAction/index');
		}
		$data = $this->Article_model->GetOneArticle($this->uri->segment(3));
		$this->Article_model->GetCatePid($data['cate_pid']);
		$datas = array(
			'OneCategory'=>$data['cate_name']
		);
		
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