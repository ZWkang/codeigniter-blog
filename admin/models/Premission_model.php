<?php
class Premission_model extends CI_Model{
	private $table = 'blog_premission';
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function GetAllPremission(){
		$result = $this->db->get($table);
		return $result->result_array();
	}
	public function GetOnePremission($id){
		$id = $id+0;
		$this->db->where('user_');
	}
}

?>