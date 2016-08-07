<?php
class Article_model extends CI_Model{
	public $table = 'blog_article'; 
	public function __construct(){
		parent::__construct();
		$this->load->database(); 
	}
	public function index(){
		exit();
	}
	public function getTable($table='blog_article'){
		$this->db->order_by('art_id','acs');
		$result = $this->db->get($table);
		return $result->result_array();
	}
	public function GetCategory($table = 'blog_category'){
		$result = $this->db->get($table);
		return $result->result_array();
	}
	public function add($data){
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}
	//获得一条数据
	public function editShow($id=0){
		$this->db->where('art_id',$id);
		return $this->db->get($this->table)->row_array();
	}

	//修改
	public function edit($id=0,$data){
		$this->db->where('art_id',$id);
		$this->db->update($this->table,$data);
		return $this->db->affected_rows();
	}
	public function Del($id){
		$this->db->where('art_id',$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function count_article(){
		return $this->db->count_all($this->table);
	}




}

?>