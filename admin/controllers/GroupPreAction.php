<?php
	class GroupPreAction extends MY_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model(array('Group_model'=>'group'));
			$this->load->helper('form');
			$this->load->library('form_validation');
		}
		public function index(){
			$data['groups'] = $this->group->GetAllGroup();
			$this->load->view('admin/group',$data);
		}
		public function GroupEditShow($id){
			$id=$id+0;

		}
		public function GroupDel($id){
			$id=$id+0;
		}
		public function GroupAddShow(){
			
		}
	}

?>