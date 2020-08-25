<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
	
	public function __construct(){

		parent::__construct();
		$this->load->model("Article_m");
		$usersess = $this->session->userdata['login'];
		
		if ($usersess != "admin") {
			echo "<script>
				alert('Hanya admin yang dapat mengakses halaman ini')
			  	window.history.back();
			</script>";
		}
	}

	public function index(){
		
		$article = $this->Article_m->getArticle()->result_array();

		$arr['article'] = $article;
		$arr['content'] = 'admin_v';
		$arr['title'] = 'Admin';

		$this->template($arr);
	}

	public function new_article(){

		$data['title'] = "Artikel Baru";
		$data['content'] = 'new_article_v';

		$this->template($data);
	}

	public function add_article(){
		
		$post = $this->input->post();

		$insert = [
			'title' 	=> $post['title'],
			'content'	=> $post['berita'],
			'created_by'=> $this->session->userdata['login'],
			'created'	=> date("Y-m-d H:i:s"),
			'modified'	=> date("Y-m-d H:i:s")
		];

		if (!empty($_FILES['image']['name'])) {
			$upload = $this->ups();
			$insert['image'] = $upload;
		}

		$result = $this->Article_m->insertArticle($insert);

		if ($result) {
			$this->session->set_userdata('result','Success');  
		}else{
			$this->session->set_userdata('result','Failed'); 
		}

		redirect('/article');

	}

	public function load_article($id=""){

		$article = $this->Article_m->getArticle($id)->row_array();

		$data['article'] = $article;
		$data['content'] = 'new_article_v';
		$data['title'] = $article['title'];

		$this->template($data);

	}

	public function edit_article($id=""){

		$post = $this->input->post();
		$id = $post['id'];
		$update = [
			'title' 	=> $post['title'],
			'content'	=> $post['berita'],
			'created_by'=> $this->session->userdata['login'],
			'modified'	=> date("Y-m-d H:i:s")
		];

		if (!empty($_FILES['image']['name'])) {
			$upload = $this->ups();
			$update['image'] = $upload;
		}

		$result = $this->Article_m->updateArticle($id, $update);

		if ($result) {
			$this->session->set_userdata('result','Success');  
		}else{
			$this->session->set_userdata('result','Failed'); 
		}

		redirect('/article');

	}

	public function delete_article($id=""){


		$result = $this->Article_m->deleteArticle($id);

		if ($result) {
			$this->session->set_userdata('result','Success');  
		}else{
			$this->session->set_userdata('result','Failed'); 
		}

		redirect('/article');
	}
	 
	private function ups()
	{
		$config['upload_path'] 		= 'uploads/articles/';
		$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
		$config['max_size'] 		= 10240;
		// $config['max_widht'] 	= 1000;
		// $config['max_height']  	= 1000;
		$config['file_name'] 		= round(microtime(true)*1000);
 
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
		}
		return $this->upload->data('file_name');
	}
}
