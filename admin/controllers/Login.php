<?php
class Login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('captcha');
		//载入辅助函数
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
	public function index(){
		// print_const();exit();
		
		$this->load->view('admin/login');
	}
	public function code(){
		$config = array(
			'width' => 100,
			'height' => 40,
			'fontSize' => 20
			);
		$this->load->library('code',$config);
		$this->code->show();


	}
	public function login_in(){
		$code = $this->input->post('code');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if(!isset($_SESSION)){
			session_start();
		}
		if(strtoupper($code)!=$_SESSION['code']){
			error('验证码不正确');
		}
		$this->load->model('Admin_model','admin');
		$Userdata = $this->admin->check($username);
		// print_r($Userdata);exit();
		$passwd = md5($password);
		if(!$Userdata || $passwd!=$Userdata[0]['user_pass']){
			error('用户名或者密码不正确');
		}
		$sessionData=array(
			'username'=>$username,
			'uid' => $Userdata[0]['user_id'],
			'logintime' => time()
			);
		$this->session->set_userdata($sessionData);
		$data = $this->session->userdata();
		redirect('LinksAction/index');
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