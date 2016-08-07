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
	public function AddGroup($data){
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}
	public function EditGroup($id,$data){
		$this->db->where('gid',$id);
		$this->db->update($this->table,$data);
		return $this->db->affected_rows();
	}
	public function DelGroup($id){
		$id=$id+0;
		$this->db->where('gid',$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function getwithpression($arr){
		$this->db->where_in('id',$arr);
		$result = $this->db->get('blog_premission');
		return $result->result_array();
	}
}

?>