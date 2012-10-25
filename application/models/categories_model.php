<?php

class categories_model extends CI_Model
{

	public function __construct(){
		
		$this->load->database();
		$this->load->helper('url');
	}
	public function add($pdata){

	
		$this->db->insert("categories",$pdata);
		return $this->db->insert_id();
	}
	
	public function update($pdata){
		$upid=array_shift($pdata);
		$where="id = '".$upid."'";
		$this->db->update("categories",$pdata,$where);
		return $this->db->affected_rows();	
	}
	
	public function delete($postdata){
	
		$this->db->query("delete from categories where id='".$postdata."'");
		return true;
	
	}

	public function get_cat($r){
		$query=$this->db->query("select * from categories where id='".$r."'");
		return $query->row();
	}
	public function get_all(){
	
		$query=$this->db->get('categories');
		return $query;
	}
	
	public function get_full(){
		$sql="select * from categories where parent=0";
			$q1=$this->db->query($sql);
			function dodo($r,$obj){	
			$clist="<ul class='cats'>";
				foreach($r->result() as $cat){
			
					$clist.="<li><a href='".base_url()."index.php/categories/edit/".$cat->id."'>".$cat->category."</a> <a href='".base_url()."index.php/categories/delete/".$cat->id."'>X</a>";
			
					$sql2="select * from categories where parent ='".$cat->id."'";
					$q2=$obj->db->query($sql2);
					if($q2->num_rows() > 0){
					$clist.=	dodo($q2,$obj);
					}
					
					
					$sql3="select * from items,cats_items_rel where items.id=cats_items_rel.relid and cats_items_rel.relid='".$cat->id."'";
					
					$q3=$obj->db->query($sql3);
					if($q3->num_rows() > 0){
					$clist.="<ul class='items'>";
						foreach($q3->result() as $item){
							$clist.= "<li>".$item->item."</li>";
						}
						$clist.="</ul>";
					}
					$clist.= "</li>";
				}
				$clist.="</ul>";
			return $clist;
			}
				
		return		dodo($q1,$this);
		 
			
	
	}
}

 ?>
