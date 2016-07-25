<?php 
class TestAction extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Tag_model');
	}
	public function index(){
		// var_dump(is_php('7.0'));
		$data = $this->Tag_model->GetAllTag();
		$result = array();
		foreach($data as $v){
			$arr = explode(',',$v['art_tag']);
			foreach($arr as $value){
				array_push($result, $value);
			}
		}
		print_r($result);
		print_r(array_unique($result));
	}
}