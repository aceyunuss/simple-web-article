<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		$this->load->model("Article_m");
	}


	public function index(){
		
		$article = $this->Article_m->getArticle()->result_array();

		$arr['article'] = $article;
		$arr['content'] = 'admin_v';
		$arr['title'] = 'Admin';

		$this->template($arr);
	}
}
