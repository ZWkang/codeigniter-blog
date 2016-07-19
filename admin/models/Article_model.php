<?php
//文章分类操作model
class Article_model extends CI_Model{
	public $table='blog_category';
	public function __construct(){
		parent::__construct();
		$this->load->database(); 
	}
	public function index(){
		//默认的话是展示的
		return 'hahahah';
		// $data = $this->db->get($this->table);

		// return $data;
	}
	/**
	*获得本表下面所有数据
	*/
	public function GetArticle(){
		$datas = $this->db->get($this->table);
		return $datas->result_array();
		//返回表的所有
	}
	/**
	*返回指定id的一行结果集数组数据
	*/
	public function GetOneArticle($cate_id){
		$this->db->where('cate_id',$cate_id);
		$data = $this->db->get($this->table);
		return $data->result_array();
	}

	/**
	*返回指定id的一行数组
	*/
	public function GetOneArticles($cate_id){
		$this->db->where('cate_id',$cate_id);
		$data = $this->db->get($this->table);
		return $data->row_array();
	}

	/**
	*一个id返回家谱树
	*/
	public function GetTree($id=0){
		$tree = array();
		$cates = $this->GetArticle();
		while($id>0){
			foreach($cates as $value){
				if($value['cate_id']==$id){
					$tree[] = $value;
					$id = $value['cate_pid'];
					break;
				}
			}
		}
		return array_reverse($tree);
	}
	/**
	*得到分类子孙树
	*/
	public function GetCatTree($arr,$id=0,$lev=0){
		$tree = array();
		foreach($arr as $v){
			if($v['cate_pid']==$id){
				$v['lev'] = $lev;
				$tree[] = $v;
				$tree =array_merge($tree,$this->GetCatTree($arr,$v['cate_id'],($lev+1)));
			} 
		}
		return $tree;
	}
	/**
	*取得id下子栏目
	*/
	public function GetSon($id){
		$this->db->where('cate_pid',$id);
		$data = $this->db->get($this->table);
		return $data->row_array();
	}
	public function DelArticle($id=0){
		$data = array();
		$this->db->where('cate_id',$id);
		$data[] = $this->db->delete('news');
		$where = array('cate_id'=>$id);
		$datas = array('cate_id'=>0);
		$data[] = $this->db->query('articlebiao',$data,$where);
		return array_reverse($data);
	}
	//删除分类

	public function deleteCat($cate_id=0){
		$this->db->where('cate_id',$cate_id);
		$this->db->delete($this->table);
		return $this->db->affected_rows();
	}


	//更新分类

	public function update($data,$cate_id){
		$this->db->where('cate_id',$cate_id);
		$this->db->update($this->table,$data);
	}

	public function insert($data){
		$this->db->insert($this->table,$data);
		return $this->db->affected_rows();
	}


}