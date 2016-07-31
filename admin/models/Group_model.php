<?php
class Group_model extends CI_Model{
	private $table = 'blog_group';
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function GetAllGroup(){
		$this->db->order_by('gid','acs');
		$result = $this->db->get($this->table);
		return $result->result_array();
	}
	public function GetOneGroup($group_id){
		$this->db->where('gid',$group_id);
		return $this->db->get($this->table)->row_array();
	}
}

?>