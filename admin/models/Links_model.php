<?php
class Links_model extends CI_Model{
	public $table = 'blog_links';
	public function __construct(){
		parent::__construct();
		$this->load->database(); 
	}
	public function index(){

	}
	public function indexShow(){
		$data = $this->db->get($this->table);
		return $data->result_array();
	}
	public function GetLink($id=0){
		$data = $this->db->get($this->table);
	}
}

?>  