<?php
class Manager_model extends CI_Model{
	public $table = 'blog_user';
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function GetAllManager(){
		$this->db->order_by('user_id','acs');
		$this->db->select(array('user_id','user_email','user_name','user_group','user_addtime','user_lastlogin','user_ip','blog_group.group_name','blog_group.group_content'));
		$this->db->from($this->table);
		$this->db->join('blog_group','blog_group.gid=blog_user.user_group');
		$result = $this->db->get();
		return $result->result_array();
	}
	public function GetOneManager($id=0){
		$this->db->where('user_id',($id+0));
		return $this->db->get($this->table)->row_array();
	}
	public function DelOneManager($id=0){
		$this->db->where('user_id',$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function DelManagers($ids = array()){
		$this->db->where_in('user_id',$ids);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function UpdateManager($id=0,$date){
		$this->db->where('user_id',$id);
		$this->db->update($this->table,$date);
		return $this->db->affected_rows();
	}
	public function AddManager($data){
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}
	public function GetPremission(){
		$tables = 'blog_premission';
		$result = $this->db->get($tables);
		return $result->result_array;		
	}
	public function GetGroupPremission($group_id){
		$tables  =  'blog_group';
		$this->db->where('gid',$group_id);
		$result = $this->db->get($tables);
		return $result->result_array();
	}
	public function CheckPass($id,$pass){
		$this->db->where(array('user_id'=>$id,'user_pass'=>$pass));
		$this->db->get($this->table);
		return $this->db->affected_rows();
	}
}


?>