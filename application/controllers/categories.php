<?php

class Categories extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->helper('url');
	}
	public function index(){
		
		$this->load->view('header');
		$data['full']=$this->categories_model->get_full();
		$this->load->view('categories',$data);
		$this->load->view('footer');
	}

	public function add(){
	
		$this->load->view('header');
		$this->load->helper('form');
		$data['cats']=$this->categories_model->get_all();
		$this->load->view('categories_form',$data);
		$this->load->view('footer');
	}
	
	public function edit($cid){
		
		$this->load->view('header');
		$this->load->helper('form');
		$data['cats']=$this->categories_model->get_all();
		$data['cat']=$this->categories_model->get_cat($cid);
		$this->load->view('categories_editform',$data);
		$this->load->view('footer');
	}
	
	public function delete($cid){
		$this->load->helper('url');
		$dd['def']="del";
		$this->categories_model->delete($cid);
		$this->load->view('categories_message',$dd);
		
	}
	
	public function save(){
	
		$this->load->helper('url');
		$postdata=array(
		'category'=>$this->input->post('category'),
		'parent'=>$this->input->post('parent')
		);
		$dd['def']="add";
		$dd['addid']=$this->categories_model->add($postdata);
		$this->load->view('categories_message',$dd);
		
	}
	public function editsave(){
	
		$this->load->helper('url');
		$postdata=array(
		'id'=>$this->input->post("id"),
		'category'=>$this->input->post("category"),
		'parent'=>$this->input->post("parent")
		);
		$dd['def']="edit";
		$this->categories_model->update($postdata);
		$this->load->view('categories_message',$dd);
	
	}
}

?>
