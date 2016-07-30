<?php
class ManagerAction extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->model('Manager_model');
	}
	public function index(){
		
		$data['Managers'] = $this->Manager_model->GetAllManager();
		// print_r($data['Managers']);exit();
		$this->load->view('admin/manager',$data);
	}
	public function CheckPass($pass){


	}
	/**
	 * 展示一个管理员
	 */
	public function ShowOneManager($id){
		if($id<=0){
			error('请输入正确的参数');
		}
		$id=$id+0;
		if(empty($id)){
			error('请输入正确的参数');
		}
		$result = $this->Manager_model->GetOneManager($id);
		if(empty($result['premission'])){
			$ManagerPre = array();
		}else{
			$ManagerPre = explode( ',',$result['premission']);
		}

		$data['manager'] = $result;
		$data['manager_pre'] = $ManagerPre;
		$data['premissions'] = $this->Manager_model->GetPremission();
		$this->load->view('admin/show_manager',$data);
		// print_r($data);exit();
	}	
	/**
	 * 修改管理员页面展示
	 */
	public function EditManagerShow($id=0){
		
		
	}
	/**
	 * 增加管理员页面展示
	 */
	public function AddManagerShow(){

	}
	/**
	 * 修改管理员执行
	 */
	public function EditDoManager($id){

	}
	/**
	 * 增加管理员执行
	 */
	public function AddDoManager(){

	}
	/**
	 * 删除一个管理员执行
	 */
	public function DelManager($id){

	}
	/**
	 * 删除多个管理员执行
	 */
	public function DelManagers($arr){
		if(!is_array($arr)){
			exit();
		}
	}
}

?>