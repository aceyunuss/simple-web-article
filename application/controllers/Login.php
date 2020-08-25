<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct(){

    
		parent::__construct();
		$this->load->model('Login_m');
	}


	public function index()
	{
		
	}

	public function in(){

		$post = $this->input->post();

		//username = admin
		//password = admin
		//21232f297a57a5a743894a0e4a801fc3

		$data = $this->Login_m->getLogin($post['username'], md5($post['password']))->row_array();
		// var_dump($data);
		// echo $this->db->last_query();
		// exit();
		if ($data > 0) {
			$this->session->set_userdata("login",$data['username']);
			echo "mantull";
		}
	}

	public function out(){
		
		$this->session->sess_destroy();
        redirect('/home');

	}
}
