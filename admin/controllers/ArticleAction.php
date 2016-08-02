<?php
//文章分类操作
// This is Article category
class ArticleAction extends MY_Controller{
	public $urls = 'ArticleAction/edit';
	public function __construct(){
		parent::__construct();
		$premission=$this->session->userdata('premission');
		if(!in_array('3', $premission)){
			error('无权访问文章管理');
		}
		$this->load->helper('url');
		$this->load->model('Article_category_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
		// $this->load->model('Article_category_model');
	}
	/**
	*主页显示列表
	*/
	public function index(){
		//后台设置后缀为空，否则分页出错
		// $this->config->set_item('url_suffix', '');
		//载入分页类
		// $this->load->library('pagination');
		// $perPage = 3;
		// //配置项设置
		// $config['base_url'] = site_url('admin/article/index');
		// $config['total_rows'] = $this->db->count_all_results('article');
		// $config['per_page'] = $perPage;
		// $config['uri_segment'] =4;
		// $config['last_link'] = '最后一页';
		// $config['first_link'] = '第一页';
		// $config['prev_link'] = '上一页';
		// $config['next_link'] = '下一页';

		// $this->pagination->initialize($config);

		// $data['links'] = $this->pagination->create_links();
		// print_r($data);exit();
		// $offset = $this->uri->segment(4);
		// $this->db->limit($perPage, $offset);

		$data=$this->Article_category_model->GetArticle();
		// print_r($data);
		// print_r($this->Article_category_model->GetCatTree($data));
		$data=array(
	        'categoryes'=>$this->Article_category_model->GetCatTree($data),

	          );

		$this->load->view('admin/article_category',$data);
	}
	/**
	*跳转到修改页面
	*/
	public function edit(){
		$data=array(
			'categorye'=>$this->Article_category_model->GetOneArticle($this->uri->segment(3)),
			'article'=>$this->Article_category_model->GetCatTree($this->Article_category_model->GetArticle())
		);
		$this->load->view('admin/edit_article_category',$data);
	}
	/**
	*查询一下当前要修改的新爹爹是不是在他的子孙树下面
	*返回一个bool值
	*/
	public function GetBool($cate_id,$cate_pid,$flag){
		$trees = $this->Article_category_model->GetTree($cate_pid);
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
		//这里如果直接url访问update/2这样子类似的话访问
		//form_validation是不工作的  因为它只给form post 工作啊
     	$this->form_validation->set_rules('cate_name', '分类名称', 'required',
	     array(
			'required'  => '必须填写栏目名称!'
		  )
		);
		if($this->form_validation->run() == FALSE){
			// exit();
			// echo validation_errors();
			// exit();
			if(empty(validation_errors())){
				$this->formTips('你不能这么做啊快返回吧',"ArticleAction/edit/".($this->uri->segment(3)+0));
			}else{
				$this->formTips(validation_errors(),"ArticleAction/edit/".($this->uri->segment(3)+0));
			}
			
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
		// $trees = $this->Article_category_model->GetTree($data['cate_pid']);
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
		$query = $this->Article_category_model->update($data,$id);
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
				'article'=>$this->Article_category_model->GetCatTree($this->Article_category_model->GetArticle())
			);
		$this->load->view('admin/add_article_category',$data);
	}
	//添加栏目
	public function insert(){
		$this->form_validation->set_rules('hehe', '分类名称', 'required',
	     array(
			'required'  => '必须填写栏目名称!'
		  )
		);		
		var_dump($this->form_validation->run());exit();
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
		$effect = $this->Article_category_model->GetEff($data['cate_name'],'cate_name');
		if($effect>0||$data['cate_name']==''){
			$datas = array(
				'message'=>'添加失败,说了用户名重复',
				'id'=>'',
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		$query = $this->Article_category_model->insert($data);
		if($query>0){
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
	//删除栏目分类
	public function delete($cate_pid){
		$son = $this->Article_category_model->GetSon($cate_pid);
		if(!empty($son)){
			$datas = array(
				'message'=>'有子栏目不允许删除!!',
				'id'=>$cate_pid,
				'url'=>'ArticleAction/index'
				);
			$this->load->view('template/error',$datas);
			return true;
		}
		$query = $this->Article_category_model->deleteCat($cate_pid);
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
	//校验分类名是否可用
	//做接口给添加分类使用的
	public function CheckCateName(){
		if(!$this->Article_category_model->GetEff($this->input->post('cate_name'))){
			$data=['status'=>0,'msg'=>'该分类名字可用'];
		}else{
			$data=['status'=>1,'msg'=>'该分类名字不可用'];
		}
		echo json_encode($data);
		// return $data;
	}
	//测试
	public function test(){
		if($this->Article_category_model->GetEff('腾讯体育')>0){
			echo 'hahaha';
		}else{
			echo 'xxxx';
		}
	}
	//展示一个分类
	public function Show_One_Category(){
		if(empty($this->uri->segment(3))){
			redirect('ArticleAction/index');
		}
		$data = $this->Article_category_model->GetOneOfArticle($this->uri->segment(3));

		$result = $this->Article_category_model->GetCatePid($data['cate_pid']);

		if(empty($result)){
			$data['pid_name']='无';
		}else{
			$data['pid_name']=$result;
		}
		if(empty($data['cate_keywords'])){
			$data['cate_keywords'] ='无';
		}
		if(empty($data['cate_description'])){
			$data['cate_description'] ='无';
		}
		if(empty($data['cate_title'])){
			$data['cate_title'] ='无';
		}
		$datas = array(
			'OneCategory'=>$data
		);
		$this->load->view('admin/show_article_category',$datas);
		
	}
	//表单错误提示页面
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