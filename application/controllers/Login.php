<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		 $this->load->library('form_validation');
		
	}
	public function login()
	{	$this->load->model('Login_Model');
		
	
		if(isset($_POST['typeUsers']))
		$this->load->model('Login_Model');
		if($this->Login_Model->login($_POST['user'], $_POST['passw'], $_POST['typeUsers'])){
			if($typeUsers ='Client'){
				$this->load->view('Layouts/header');
				$this->load->view('home');
				$this->load->view('Layouts/footer');
				
			}else{ 
				return $typeUsers;
				
			}
			
		}else{
			$this->load->view('Layouts/headerAdmin');
			 $this->load->view('home');
			 $this->load->view('hotels');
			 $this->load->view('cabins');
			 $this->load->view('house');
			 $this->load->view('Layouts/footer');
			
		}
		
	}	



   
}

		

	