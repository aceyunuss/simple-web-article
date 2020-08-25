<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_m extends CI_Model {
	
	public function __construct(){

    
		parent::__construct();
	}


	public function index()
	{
		
	}


	public function getArticle($id=""){

		if (!empty($id)) {
			$this->db->where("id", $id);
		}

		return $this->db->get("adm_article");
	}
	
	public function insertArticle($data){

		return $this->db->insert('adm_article', $data);
	}

	public function updateArticle($id="", $data=array()){
		
		if (!empty($id)) {
			return $this->db->where("id", $id)->update("adm_article", $data);
		}
	}

	public function deleteArticle($id=""){
		
		if (!empty($id)) {
			return $this->db->where("id", $id)->delete("adm_article");
		}
	}
}
