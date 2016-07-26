<?php
class ArticleDoAction extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Article_model');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index(){
		$this->config->set_item('url_suffix', '');
		//载入分页类
		$this->load->library('pagination');
		$perPage = 5;
		//配置项设置
		$config['base_url'] = site_url('ArticleDoAction/index');
		$config['total_rows'] = $this->db->count_all_results('blog_article');
		// echo $config['total_rows'] ;exit();
		$config['per_page'] = $perPage;
		$config['use_page_numbers'] = TRUE;
		$config['uri_segment'] = 2;
		$config['enable_query_strings']=TRUE;
		$config['page_query_string']=TRUE;
		$config['last_link'] = '最后一页';
		$config['first_link'] = '第一页';
		$config['prev_link'] = '上一页';
		$config['next_link'] = '下一页';

		$this->pagination->initialize($config);

		
		// print_r($data);die;
		$offset = $this->uri->segment(4);
		$this->db->limit($perPage, $offset);

		$articles = $this->Article_model->getTable();

		$data = array(
				'articles'=>$articles
			);
		$this->load->view('admin/article',$data);
	}
	public function indexShow(){
		$articles = $this->Article_model->getTable();

		$data = array(
				'articles'=>$articles
			);
		$this->load->view('admin/article',$data);
	}
	/**
	*筛选功能
	*传进一个分类名字和一个关键字
	*/
	public function SortArticle($cate_name,$keyword){

	}
	/**
	*移动文章分类   传递一个自身id和要移动的目标id
	*/
	public function MoveCategory($id,$cate_id){

	}
	/**
	*删除多个文章 
	*传递一个id数组用于删除
	*/
	public function DelArticles($ids){

	}
	/**
	*编辑增加文章页面
	*/
	public function AddArticle(){
		$datas = $this->Article_model->GetCategory();
		//获得分类栏目
		$data = array(
			'category' => $this->GetCatTree($datas));
		// print_r($data);exit();
		$this->load->view('admin/addarticle',$data);
	}
	/**
	*编辑增加文章
	*/
	public function AddDoArticle(){
		$this->form_validation->set_rules('art_title', '分类名称', 'required',
	     array(
			'required'  => '必须填写栏目名称!'
		  )
		);	
		//执行表单验证
		if($this->form_validation->run()){
			// 缩略图上传
			// 先添加配置信息
			$config['upload_path'] = '../upload/thumb/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '10000';

			//载入上传类
			$this->load->library('upload',$config);
			//执行上传
			$status = $this->upload->do_upload();
			$wrong = $this->upload->display_errors();
			if($wrong){
				error($wrong);
			}
			//返回信息
			$info = $this->upload->data();
			print_r($info);
			$arr['source_image'] = $info['full_path'];
			$arr['create_thumb'] = FALSE;
			$arr['maintain_ratio'] = TRUE;
			$arr['width'] = 200;
			$arr['height'] = 200;

			//载入缩略图类
			$this->load->library('image_lib', $arr);
			//执行
			$status = $this->image_lib->resize();
			//判断状态
			if(!$status){
				error('缩略图动作失败');
			}
			$data = array(
				'art_title'	=> $this->input->post('art_title'),
				'art_tag'	=> $this->input->post('art_tag'),
				'art_description'	=> $this->input->post('art_description'),
				'art_thumb'	=> $info['file_name'],
				'art_content'	=> $this->input->post('art_content'),
				'art_time'	=> time(),
				'cate_id'=> $this->input->post('cate_id')
				
				);		
			$result = $this->Article_model->add($data);
				if($result){
					$datass = array(
						'message'=>array(0=>'添加成功',1=>'主页'),
						'url'=>'ArticleDoAction/index',
						'id'=>'',
						'index'=>'ArticleDoAction/index'
					);
					$this->load->view('template/success',$datass);
					return false;
				}else{
					$datass = array(
						'message'=>array(0=>'添加失败',1=>'添加'),
						'url'=>'ArticleDoAction/AddArticle',
						'id'=>'',
						'index'=>'ArticleDoAction/index'
					);
					$this->load->view('template/errors',$datass);
					return false;
				}
		}else{
				$datass = array(
						'message'=>array(0=>'表单提交失败',1=>'添加'),
						'url'=>'ArticleDoAction/AddArticle',
						'id'=>'',
						'index'=>'ArticleDoAction/index'
					);
					$this->load->view('template/errors',$datass);
					return false;
		}
	}
	/**
	*修改文章
	*/
	public function EditArticle(){
		$id=$this->uri->segment(3)+0;
		$this->form_validation->set_rules('art_title', '文章标题', 'required',
	     array(
			'required'  => '必须填写文章标题!'
		  )
		);	
		if(!$this->form_validation->run()){
			$datass = array(
			'message'=>array(0=>'请正确填写表单',1=>'修改'),
			'url'=>'ArticleDoAction/show/'.$id,
			'id'=>$id,
			'index'=>'ArticleDoAction/index'
		);
			$this->load->view('template/errors',$datass);
			return false;
		}else{
			$data = array(
				'art_title'	=> $this->input->post('art_title'),
				'art_tag'	=> $this->input->post('art_tag'),
				'art_description'	=> $this->input->post('art_description'),
				'art_content'	=> $this->input->post('art_content'),
				'art_time'	=> time(),
				'cate_id'=> $this->input->post('cate_id')
				);		
			$result = $this->Article_model->edit($id,$data);
			if($result>0){
				$message = array(0=>'修改成功',1=>'主页');
				$urls = 'ArticleDoAction/index';
				$ids='';
				$indexs='ArticleDoAction/index';
				$this->successtips($message,$urls,$ids,$indexs);
			}else{
				$message = array(0=>'修改失败',1=>'修改');
				$urls = 'ArticleDoAction/show/';
				$ids=$id;
				$indexs='ArticleDoAction/index';
				$this->errortips($message,$urls,$ids,$indexs);
			}
		}
	}
	//
	public function show(){
		$id=$this->uri->segment(3)+0;
		$category = $this->Article_model->GetCategory();
		$article = $this->Article_model->editShow($id);
		$data = array(
			'category'=>$this->GetCatTree($category),
			'article'=>$article
			);
		$this->load->view('admin/edit_article',$data);
	}
	/**
	*删除单个文章
	*用ajax做
	*/
	public function DelArticleA(){
		$id=$this->uri->segment(3)+0;
		$result = $this->Article_model->Del($id);
		if($result>0){
			$data=['status'=>0,'msg'=>'删除成功'];
		}else{
			$data=['status'=>1,'msg'=>'删除失败'];
		}
		echo json_encode($data);
	}
	/**
	*删除文章 不用ajax
	*
	*/
	public function DelArticle(){
		$id=$this->uri->segment(3)+0;
		$result = $this->Article_model->Del($id);
		if($result>0){
				$message = array(0=>'删除成功',1=>'主页');
				$urls = 'ArticleDoAction/index';
				$ids='';
				$indexs='ArticleDoAction/index';
				$this->successtips($message,$urls,$ids,$indexs);
		}else{
				$message = array(0=>'删除失败',1=>'主页');
				$urls = 'ArticleDoAction/index';
				$ids='';
				$indexs='ArticleDoAction/index';
				$this->successtips($message,$urls,$ids,$indexs);
		}
	}
	/**
	*得到分类子孙树
	*/
	public function GetCatTree($arr,$id=0,$lev=0){
		$tree = array();
		foreach($arr as $v){
			if($v['cate_pid']==$id){
				$v['lev'] = $lev;
				$tree[] = $v;
				$tree =array_merge($tree,$this->GetCatTree($arr,$v['cate_id'],($lev+1)));
			} 
		}
		return $tree;
	}
	//index代表要跳转主页地址
	//url代表要用户调转的地址
	//message是一个数组  message[0]是第一个弹框  [1]是第二个弹框
	function successtips($mseeage,$url='ArticleDoAction/index',$id,$index='ArticleDoAction/index'){
		$datass = array(
			'message'=>$mseeage,
			'url'=>$url,
			'id'=>$id,
			'index'=>$index
		);
		$this->load->view('template/success',$datass);
		return false;
	}
	function errortips($mseeage,$url='ArticleDoAction/index',$id,$index='ArticleDoAction/index'){
		$datass = array(
			'message'=>array(0=>'添加成功',1=>'主页'),
			'url'=>'ArticleDoAction/index',
			'id'=>'',
			'index'=>'ArticleDoAction/index'
		);
		$this->load->view('template/errors',$datass);
		return false;
	}
}


?>