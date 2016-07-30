<?php
class Manager_model extends CI_Model{
	public $table = 'blog_user';
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function GetAllManager(){
		$this->db->order_by('user_id','acs');
		$this->db->select(array('user_id','user_email','user_name','premission'));
		$result = $this->db->get($this->table);
		return $result->result_array();
	}
	public function GetOneManager($id=0){
		$this->db->order_by('user_id','acs');
		$this->db->select(array('user_id','user_email','user_name','premission'));
		$this->db->where('user_id',$id);
		return $this->db->get($this->table)->row_array();
	}
	public function DelOneManager($id=0){
		$this->db->where('user_id',$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function DelManagers($ids = array()){
		$this->db->where('user_id',$ids);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function UpdateManager($id=0,$date = array()){
		$this->db->where('user_id',$id);
		$this->db->update($this->table,$date);
		return $this->db->affected_rows();
	}
	public function GetPremission(){
		$tables  =  'blog_premission';
		$result = $this->db->get($tables);
		return $result->result_array();
	}
}


?>