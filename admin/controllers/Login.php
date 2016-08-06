<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('captcha');
		$this->load->model(array('Admin_model'=>'admin','Index_model'=>'index'));
		$this->CheckStatus();
		date_default_timezone_set('Asia/Shanghai');//'Asia/Shanghai'
		//载入辅助函数
	}
	public function CheckStatus(){
		if(!empty($this->session->userdata('username'))){
			redirect('IndexAction/index');
		}
	}
	public function index_bak(){
		
		// $speed = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $word = '';
		// for($i = 0;$i<4;$i++){
		// 	$word .+$speed[mt_rand(0,strlen($speed)-1)];
		// }
		// //配置项
		// $vals = array(
		// 	'word'=>$word,
		// 	'img_path'=>'./captcha/',
		// 	'img_url'=>base_url().'/captcha/',//图片地址
		// 	'img_width'=>80,//宽高
		// 	'img_height'=>25,
		// 	'expiration'=>10
		// 	//存在时间 秒
		// 	);
		// //创建验证码
		// $cap = create_captcha($vals);
		//开session存在session里面
		// if(!isset($_SESSION)){
		// 	session_start();
		// }
		// $_SESSION['code'] = $cap['word'];
		// print_r($cap);exit();
		//打印文件
		$data['img'] = $cap['image'];
		$this->load->view('admin/login',$data);
	}
	/**
	 * 登录主页展示
	 */
	public function index(){
		// print_const();exit();

		$this->load->view('admin/login');
	}
	/**
	 * 验证码
	 */
	public function code(){
		$config = array(
			'width' => 100,
			'height' => 40,
			'fontSize' => 20
			);
		$this->load->library('code',$config);
		$this->code->show();
	}
	/**
	 * 登录执行
	 */
	public function login_in(){
		$code = $this->input->post('code');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$ipaddress = $this->input->post('ipaddress');
		$cityname = $this->input->post('cityname');

		if(!isset($_SESSION)){
			session_start();
		}
		if(strtoupper($code)!=$_SESSION['code']){
			error('验证码不正确');
		}
		
		$Userdata = $this->admin->check($username);
		// print_r($Userdata);exit();
		$passwd = md5($password);
		if(!$Userdata || $passwd!=$Userdata[0]['user_pass']){
			error('用户名或者密码不正确');
		}
		if(empty($Userdata[0]['user_group'])){
			error('有误,失败');
		}
		// echo $Userdata[0]['user_group'];exit();
		$result = $this->admin->GetrGroup($Userdata[0]['user_group']);
		// print_r($result);exit();
		$premission = explode(',', $result['group_pre']);
				// print_r($premission);exit();
		if(!in_array('1', $premission)){
			error('无权访问后台');
		}
		//设置权限访问
		$sessionData=array(
			'username'=>$username,
			'premission'=>$premission,
			'uid' => $Userdata[0]['user_id'],
			'logintime' => time()
			);
		$this->session->set_userdata($sessionData);
		$data = $this->session->userdata();
		// print_r($data);exit();
		$_arr = array('user'=>$username,'time'=>time(),'ip'=>$ipaddress,'message'=>'登录后台','address'=>$cityname);
		$affect  = $this->index->insertRecord($_arr);
		if($affect>0){
			redirect('IndexAction/index');
		}else{
			error('用户信息有误');
		}
	}
	/**
	 * 退出登录
	 */
	public function login_out(){
		$this->session->sess_destory();
		redirect('login/index');
	}
}

?>