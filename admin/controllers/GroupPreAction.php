<?php
	class GroupPreAction extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model(array('Group_model'=>'group'));
			$this->load->helper('form');
			$this->load->library('form_validation');
		}
		/**
		 * 权限组权限展示默认
		 */
		public function index(){
			$data['groups'] = $this->group->GetAllGroup();
			$this->load->view('admin/group',$data);
		}
		/**
		 * 权限组修改展示
		 */
		public function GroupEditShow($id){
			$id=$this->uri->segment(3)+0;
			$data['premissions'] = $this->group->GetAllPremission();
			// print_r($data);exit();
			$data['one_group'] = $this->group->GetOneGroup($id);
			$data['group_id'] = explode(',', $data['one_group']['group_pre']);
			// $data['group_message']=$this->group->getwithpression($group_id);
			// print_r($data);exit();
			$this->load->view('admin/edit_group_pre',$data);
		}
		/**
		 * 修改操作
		 */
		public function GroupEdit(){
			$id = $this->uri->segment(3)+0;
			$this->form_validation->set_rules('group_name', 'groupname', 'required');
			//要启用验证模式的话
			//必须添加规则

			if($this->form_validation->run() == FALSE){
				 $this->formTips(validation_errors(),"GroupPreAction/index");
			} else {
			$data = array(
				'group_name' => $this->input->post('group_name'),
				'group_content' => $this->input->post('group_content'),
				'group_pre' => implode(',',$this->input->post('premissions'))
			);

			}
			if($this->group->EditGroup($id,$data)>0){
				$message=array('修改成功','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/GroupEditShow';
				$id=$id;
				$this->successtips($message,$url,$id,$index);
			}else{
				$message=array('修改失败','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/GroupEditShow';
				$id=$id;
				$this->errortips($message,$url,$id,$index);
			}
		}
		/**
		 * 权限组删除
		 */
		/**
		 * ajax用
		 */
		// public function GroupDel($id){
		// 	$id = $this->uri->segment(3)+0;
		// 	$result = $this->group->DelGroup($id);
		// 	if($result>0){
		// 		$back=array('status'=>1,'message'=>'删除成功');
		// 	}else{
		// 		$back=array('status'=>1,'message'=>'删除失败');
		// 	}
		// 	echo json_encode($back);
		// }
		/**
		 * 普通用
		 */
		public function GroupDel($id){
			$id = $this->uri->segment(3)+0;
			if(empty($id)){
				error('删除有误');
			}
			$result = $this->group->DelGroup($id);
			if($result>0){
				$message=array('删除成功','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/index';
				$id='';
				$this->successtips($message,$url,$id,$index);				
			}else{
				$message=array('删除失败','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/index';
				$id='';
				$this->successtips($message,$url,$id,$index);			
			}
		}
		/**
		 * 权限组增加展示
		 */
		public function GroupAddShow(){
			$data['premissions'] = $this->group->GetAllPremission();
			$this->load->view('admin/add_group_pre',$data);
		}

		public function GroupAdd(){
			// print_r($this->input->post('premission'));
			// exit();
			$this->form_validation->set_rules('group_name', 'groupname', 'required');
			//要启用验证模式的话
			//必须添加规则

			if($this->form_validation->run() == FALSE){
				 $this->formTips(validation_errors(),"GroupPreAction/index");
			} else {
			$data = array(
				'group_name' => $this->input->post('group_name'),
				'group_content' => $this->input->post('group_content'),
				'group_pre' => implode(',',$this->input->post('premission'))
			);

			}
			if($this->group->AddGroup($data)>0){
				$message=array('添加成功','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/GroupAddShow';
				$id='';
				$this->successtips($message,$url,$id,$index);
			}else{
				$message=array('添加失败','跳转主');
				$url = 'GroupPreAction/index';
				$index = 'GroupPreAction/GroupAddShow';
				$id='';
				$this->errortips($message,$url,$id,$index);
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
		//index代表要跳转地址
		//url代表要用户主页的地址
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

		function errortips($mseeage=array(0=>'添加失败',1=>'主页'),$url='ArticleDoAction/index',$id='',$index='ArticleDoAction/index'){
			$datass = array(
				'message'=>$message,
				'url'=>$url,
				'id'=>$id,
				'index'=>$index
			);
			$this->load->view('template/errors',$datass);
			return false;
		}
	}

?>