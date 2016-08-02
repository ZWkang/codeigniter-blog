<?php
class ManagerAction extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$premission=$this->session->userdata('premission');
		if(!in_array('2', $premission)){
			error('无权访问文章管理');
		}
		$this->load->helper(array('form','url'));
		$this->load->model(array('Manager_model','Group_model','Premission_model'));
		$this->load->library('form_validation');
	}
	public function index(){
		$data['Managers'] = $this->Manager_model->GetAllManager();
		// print_r($data['Managers']);exit();
		$this->load->view('admin/manager',$data);

	}
	/**
	 *  ajax接口
	 */
	public function CheckPass(){
		$id = $this->input->post('id')+0;
		$pass = $this->input->post('pass');
		if(!empty($id) || !empty($pass)){
			if($this->Manager_model->CheckPass($id,md5($pass))>0){
				$data['msg'] = '密码输入正确';
				$data['status']=1;
			}else{
				$data['msg'] = '当前密码输入有错误';
				$data['status'] = 0;				
			}
		}else{
			$data['msg'] = '当前密码输入有错误';
			$data['status'] = 0;
		}
		// $data=array('id'=>empty($id),'pass'=>!empty($pass));
		echo json_encode($data);
	}
	function test(){
		// echo $this->Manager_model->CheckPass(1,md5('user'));
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
		// print_r($result);exit();
		if(!empty($result['user_group'])){
			$Presult  = $this->Group_model->GetOneGroup($result['user_group']);
			$data['group']= $Presult;
		}else{
			$data['group'] = '';
		}

		$data['manager'] = $result;
		// print_r($data);exit();
		$this->load->view('admin/show_manager',$data);
		// print_r($data);exit();
	}	
	/**
	 * 修改管理员页面展示
	 */
	public function EditManagerShow($id=0){
		$id = $id+0;
		$data['manager'] = $this->Manager_model->GetOneManager($id);
		$data['groups'] = $this->Group_model->GetAllGroup();

		$this->load->view('admin/edit_manager',$data);
	}
	/**
	 * 增加管理员页面展示
	 */
	public function AddManagerShow(){
		$data['groups'] = $this->Group_model->GetAllGroup();
		$this->load->view('admin/add_manager',$data);
	}
	/**
	 * 修改管理员执行
	 */
	public function EditDoManager($id){
    	$this->form_validation->set_rules('user_name', '用户名称', 'required',array('required'  => '必须用户栏目名称!'));
    	$this->form_validation->set_rules('update_pass', '修改密码不为空', 'required',array('required'  => '必须输入密码!'));
    	$this->form_validation->set_rules('user_pass', '用户密码', 'required',array('required'  => '必须输入密码!'));
    	$this->form_validation->set_rules('user_group', '所属权限组名称', 'required',array('required'  => '必须输入所属权限名称!'));  	
		if($this->form_validation->run() == FALSE){
			// exit();
			// echo validation_errors();
			// exit();
			error(validation_errors());
		} else {

			if(empty($this->input->post('user_pass'))){
				error('当前密码不为空');
			}
			if(empty($this->input->post('update_pass'))){
				error('当前修改密码不为空');
			}
			if(empty($this->input->post('user_group'))){
				error('当前权限组不为空');
			}
			if(empty($this->input->post('user_name'))){
				error('当前用户名不为空');
			}
			if($this->input->post('user_pass')==$this->input->post('update_pass')){
				error('两个密码不能相同');
			}
			$data['user_name'] = $this->input->post('user_name');
			// echo empty($data['user_name']);exit();
			// $data['user_name'] = $this->input->post('user_name');
			$data['user_group'] = $this->input->post('user_group');
			$data['user_pass'] = md5($this->input->post('update_pass'));
			$data['user_email'] = $this->input->post('user_email');
			$id = $this->uri->segment(3)+0;
			$result = $this->Manager_model->UpdateManager($id,$data);
			if($result>0){
				error('成功了');
			}else{
				error('失败了');
			}
		}
	}
	/**
	 * 增加管理员执行
	 *为了速度 丝毫不验证 任性
	 */
	public function AddDoManager(){
    		$this->form_validation->set_rules('user_name', '用户名称', 'required',array('required'  => '必须用户栏目名称!'));
    		$this->form_validation->set_rules('user_pass', '修改密码不为空', 'required',array('required'  => '必须输入密码!'));
    		$this->form_validation->set_rules('user_group', '所属权限组名称', 'required',array('required'  => '必须输入所属权限名称!')); 
			if($this->form_validation->run() == FALSE){
			// exit();
			// echo validation_errors();
			// exit();
			error(validation_errors());
			} else {

				if(empty($this->input->post('user_pass'))){
					error('当前密码不为空');
				}
				if(empty($this->input->post('user_group'))){
					error('当前权限组不为空');
				}
				if(empty($this->input->post('user_name'))){
					error('当前用户名不为空');
				}
				$data = array(
					'user_name'=>$this->input->post('user_name'),
					'user_pass'=>$this->input->post('user_pass'),
					'user_group'=>$this->input->post('user_group'),
					'user_email'=>$this->input->post('user_email'),
					'user_addtime'=>time(),
					'user_lastlogin'=>'',
					'user_ip'=>$this->input->ip_address()
					);

				$result = $this->Manager_model->AddManager($data);
				if($result>0){
					error('成功了');
				}else{
					error('失败了');
			}
		}
	}
	/**
	 * 删除一个管理员执行
	 */
	public function DelManager($id){
		$result = $this->Manager_model->DelOneManager($id);
		if($result>0){
			echo   '成功';
		}else{
			echo 	'失败';
		}
	}
	/**
	 * 删除多个管理员执行
	 */
	public function DelManagers($arr){
		if(is_array($arr)){
			$result = $this->Manager_model->DelManagers($arr);
			if($result>0){
				echo '成功';
			}else{
				echo '失败';
			}
		}else{
			error('不是数组');
		}
	}
}

?>