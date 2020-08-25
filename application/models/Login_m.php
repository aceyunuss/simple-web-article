<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {
	
	public function __construct(){

    
		parent::__construct();
	}


	public function index()
	{
		
	}

	public function getLogin($username, $password){

		$login = $this->db->where(array('username'=>$username, 'password'=>$password))->get('adm_user');

		return $login;
	}
}
