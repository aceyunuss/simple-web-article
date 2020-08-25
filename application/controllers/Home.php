<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		$this->load->model("Article_m");
	}


	public function index()
	{
		
		$this->db->limit(4);
		$article = $this->Article_m->getArticle()->result_array();

		$data['article'] = $article;
		$data['content'] = 'home_v';
		$data['title'] = 'Dashboard';

		$this->template($data);
	}

	public function articles(){

		$article = $this->Article_m->getArticle()->result_array();

		$data['article'] = $article;
		$data['content'] = 'articles_v';
		$data['title'] = 'Artikel';

		$this->template($data);
	}

	public function read($id=""){

		$article = $this->Article_m->getArticle($id)->row_array();

		$data['article'] = $article;
		$data['content'] = 'read_article_v';
		$data['title'] = $article['title'];

		$this->template($data);
	}

	public function about(){

		$data['content'] = 'about_us_v';
		$data['title'] = 'Tentang Kami';

		$this->template($data);
	}
}
