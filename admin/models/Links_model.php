<?php
class Links_model extends CI_Model{
	public $table = 'blog_links';
	public function __construct(){
		parent::__construct();
		$this->load->database(); 
	}
	public function index(){

	}
	/**
	*返回当前link表下所有结果集
	*/
	public function indexShow(){
		$data = $this->db->get($this->table);
		return $data->result_array();
	}
	/**
	*得到某个字段下面的某个相似的值
	*然后返回结果集   eg:select * form xxx where id = xx;
	*多行
	*/
	public function GetFileds($filed,$value){
		$this->db->where($filed,$value);
		$result = $this->db->get($this->table);
		return $result->result_array();
	}
	/**
	*一行
	*/
	public function GetFiled($filed,$value){
		$this->db->where($filed,$value);
		$result = $this->db->get($this->table);
		return $result->row_array();
	}
	public function LinkDel($id){
		$this->db->where('link_id',$id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}
	public function LinkUpdate($link_id=0,$data){
		$this->db->where('link_id',$link_id);
		$this->db->update($this->table,$data);
		return $this->db->affected_rows();
	}
	public function LinkInsert($data){
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}
}

?>  