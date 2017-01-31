<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url') ;
		$this->load->helper('form') ;
		$this->load->library('form_validation') ;
		$this->load->library('session');
		$this->load->model('admin_model');

	}
	
	function index()
	{
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;
		$this->load->view('view_welcome',$data);
		
	}

	function validate_login_details()
	{
			
		$query = $this->admin_model->check_user_details() ;
		if ($query) 
		{
			return true ;
		}

		else
		{
		
			$data['title'] = "Primera Assets" ;
			$data['primera'] = "Primera Africa" ;
			$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;
			$data['feedback']= "Access Denied !";
			$data['home']='current-menu-item';

			$this->load->view('view_welcome',$data);
			
		}
		
	}

	 public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome') ;
	}
}
