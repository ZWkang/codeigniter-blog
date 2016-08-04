<?php
	class Index_model extends CI_Model{
		private $table='blog_record';
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		public function GetAllRecord(){
			$this->db->order_by('id','desc');
			return $this->db->get($this->table)->result_array();
		}
		public function insertRecord($data){
			$this->db->insert($this->table,$data);
			return $this->db->affected_rows();
		}
	}

?>