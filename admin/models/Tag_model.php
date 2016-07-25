<?php
class Tag_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public $table = 'blog_article';
	//得到tag
	public function GetAllTag(){

		
		$this->db->select('art_tag');
		$result = $this->db->get($this->table);
		return $result->result_array();
	}

}