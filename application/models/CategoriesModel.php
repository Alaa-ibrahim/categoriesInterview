<?php

class Categories_model extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
	
	}
	public function add(){
		$data=array(
				'category'=>$category,	
				'parent'=>$parent,
				'color'=>$color
			);
	
		$this->db->insert("categories",$data);
		return $this->db->insert_id;
	}
	
	public function edit(){

	
		$this->db->update();
		return $this->db->affect_rows;	
	}
	
	public function delete(){
	
		$this->db->delete();
	
	
	}

	public function get_all(){
	
		$query=$this->db->get('categories');
		return $query->result_array();
	}
	
	public static function get_full(){
		$ff="Hello thereS";
		return $ff;
	}
}

 ?>
