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
			$id=$id+0;

		}
		/**
		 * 权限组删除展示
		 */
		public function GroupDel($id){
			$id=$id+0;
		}
		/**
		 * 权限组增加展示
		 */
		public function GroupAddShow(){
			
		}
	}

?>