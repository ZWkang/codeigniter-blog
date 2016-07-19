<?php
class admin_model extends CI_Model(){
	public $table = 'xxx';
	public $cookie_time='';

	public function login_check($data){
		
	}	
	function set_cookie($_username,$value){
		switch ($_time) {
			case '0'://浏览器进程
				CI_Input::set_cookie('username',$_username);
				break;
			case '1'://一天
				CI_Input::set_cookie('username',time()+86400);
				break;
			case '2'://一周
				CI_Input::set_cookie('username',time()+86400);
				break;
			case '3'://一月
				CI_Input::set_cookie('username',time()+86400);
				break;
			default:
				CI_Input::set_cookie('username',$_username);
				break;
		}
	}
}


?>