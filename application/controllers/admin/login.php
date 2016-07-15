<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {
	
	
	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper(array('form')); // cargo helpers de url y para crear formularios

		$this->load->view('backend/login_view'); // muestro la vista de form login
	}

	
	
	
}

