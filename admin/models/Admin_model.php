<?php
/**
*后台用户管理模型
*/
class Admin_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	/**
	 * 查询后台用户数据记录
	 */
	public function check($username){
		// $this->db->where(array('username'=>$username))->get('blog_user');
		$data = $this->db->get_where('blog_user',array('user_name'=>$username))->result_array();
		return $data;
	}
}

?>