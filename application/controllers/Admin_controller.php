<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url') ;
		$this->load->helper('form') ;
		$this->load->library('form_validation') ;
		$this->load->library('session');
		$this->load->model('admin_model');

		$user_id = $this->session->userdata('userid');
		if (!isset($user_id))
		{
			redirect('welcome') ;
		}

	}

	function display_dashboard()
	{
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;

		$this->load->view('includes/header.php',$data) ;
		$this->load->view('includes/sidebar_menu.php',$data) ;
		$this->load->view('includes/top_nav.php',$data) ;
		$this->load->view('view_dashboard',$data) ;
		$this->load->view('includes/footer.php',$data) ;		
	}

	function create_user()
	{
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;

		$this->form_validation->set_rules('names', 'Names', 'trim|required|alpha_numeric_spaces');
		$this->form_validation->set_rules('role', 'Role', 'trim|required|alpha');
		$this->form_validation->set_rules('status', 'Status', 'trim|required|alpha');
		$this->form_validation->set_rules('uname', 'Username', 'trim|required|alpha|is_unique[users.username]');
		$this->form_validation->set_rules('pwd1', 'Password', 'trim|required');
		$this->form_validation->set_rules('pwd2', 'Repeat Password', 'trim|required|matches[pwd1]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|numeric|min_length[11]|max_length[11]|is_unique[users.phone]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');

		if ($this->form_validation->run() == FALSE) 
		{
		$this->load->view('includes/header.php',$data) ;
		$this->load->view('includes/sidebar_menu.php',$data) ;
		$this->load->view('includes/top_nav.php',$data) ;
		$this->load->view('user_form',$data) ;
		$this->load->view('includes/footer.php',$data) ;
		}
	
	 else
	 {
	 	$insert = $this->admin_model->create_user();
	 	if ($insert == true) 
	 	{
			$data['success_message'] = 'Registration Successfull';

			$this->load->view('includes/header.php',$data) ;
			$this->load->view('includes/sidebar_menu.php',$data) ;
			$this->load->view('includes/top_nav.php',$data) ;
			$this->load->view('user_form',$data) ;
			$this->load->view('includes/footer.php',$data) ;
		} 
		
	 }

	}

	function display_all_users()
	{

		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ; 

		$data['user_detail'] = $this->admin_model->display_all_users();
		$this->load->view('includes/header.php',$data) ;
		$this->load->view('includes/sidebar_menu.php',$data) ;
		$this->load->view('includes/top_nav.php',$data) ;
		$this->load->view('view_all_users',$data) ;
		$this->load->view('includes/footer.php',$data) ;
	}

	function delete_user()
	{
		$user_id = $this->uri->segment(3); 
		$this->admin_model->delete_user($user_id) ;
	}

	function enable_user()
	{
		$user_id = $this->uri->segment(3); 
		$this->admin_model->enable_user($user_id) ;
	}

	function disable_user()
	{
		$user_id = $this->uri->segment(3); 
		$this->admin_model->disable_user($user_id) ;
	}

	function create_category()
	{
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;
		
$this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|alpha|is_unique[asset_categories.category_name]');
	
		if ($this->form_validation->run() == FALSE) 
		{
			
			$data['category_detail'] = $this->admin_model->display_categories();
			
			$this->load->view('includes/header.php',$data) ;
			$this->load->view('includes/sidebar_menu.php',$data) ;
			$this->load->view('includes/top_nav.php',$data) ;
			$this->load->view('category_form',$data) ;
			$this->load->view('includes/footer.php',$data) ;
		}

		else
		{
		 	$insert = $this->admin_model->create_category() ;

		 	if ($insert == true) 
		 	{
		 		$data['category_detail'] = $this->admin_model->display_categories();
				$data['success_message'] = 'Category Created';

				$this->load->view('includes/header.php',$data) ;
				$this->load->view('includes/sidebar_menu.php',$data) ;
				$this->load->view('includes/top_nav.php',$data) ;
				$this->load->view('category_form',$data) ;
				$this->load->view('includes/footer.php',$data) ;
			} 
			
		}

	}

	function display_single_category()
	{
		$category_id = $this->uri->segment(3); 
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ; 

		$data['category_name'] = $this->admin_model->display_single_category($category_id) ;
		$this->load->view('includes/header.php',$data) ;
		$this->load->view('includes/sidebar_menu.php',$data) ;
		$this->load->view('includes/top_nav.php',$data) ;
		$this->load->view('view_edit_category',$data) ;
		$this->load->view('includes/footer.php',$data) ;
	}

	function update_category()
	{
		$category_id = $this->uri->segment(3); 

		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;
		
$this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required|alpha|is_unique[asset_categories.category_name]');
		
		if ($this->form_validation->run() == FALSE) 
		{
			
			$this->load->view('includes/header.php',$data) ;
			$this->load->view('includes/sidebar_menu.php',$data) ;
			$this->load->view('includes/top_nav.php',$data) ;
			$this->load->view('view_edit_category',$data) ;
			$this->load->view('includes/footer.php',$data) ;
		}


		$this->admin_model->update_category($category_id) ;
	}

	function delete_category()
	{
		$category_id = $this->uri->segment(3); 
		$this->admin_model->delete_category($category_id) ;
	}

	function install_asset()
	{
		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ;
		
		$this->form_validation->set_rules('category_id', 'Category', 'trim|required|numeric');
		$this->form_validation->set_rules('asset_name', 'Asset Name', 'trim|required');
		$this->form_validation->set_rules('model', 'Model', 'trim|required');
		$this->form_validation->set_rules('serial_number', 'Serial Number', 'trim|required|is_unique[installed_assets.serial_number]');
		$this->form_validation->set_rules('po_number', 'PO Nnumber', 'trim|required|numeric');
		$this->form_validation->set_rules('vendor', 'Vendor', 'trim|required');
		$this->form_validation->set_rules('date_purchased', 'Date Purchased', 'trim|required');
		$this->form_validation->set_rules('warranty', 'Warranty', 'trim|required');
		$this->form_validation->set_rules('asset_specification', 'Asset Specification', 'trim|required');
	

		if ($this->form_validation->run() == FALSE) 
		{
			$data['category_detail'] = $this->admin_model->display_categories();

			$this->load->view('includes/header.php',$data) ;
			$this->load->view('includes/sidebar_menu.php',$data) ;
			$this->load->view('includes/top_nav.php',$data) ;
			$this->load->view('installation_form',$data) ;
			$this->load->view('includes/footer.php',$data) ;
		}

		else
		{
		 	$insert = $this->admin_model->install_asset() ;

		 	if ($insert == true) 
		 	{
		 		$data['category_detail'] = $this->admin_model->display_categories();
				$data['success_message'] = 'Asset installed Successfully';

				$this->load->view('includes/header.php',$data) ;
				$this->load->view('includes/sidebar_menu.php',$data) ;
				$this->load->view('includes/top_nav.php',$data) ;
				$this->load->view('installation_form',$data) ;
				$this->load->view('includes/footer.php',$data) ;
			} 
			
		}

	}


	function display_all_installed_assets()
	{

		$data['title'] = "Primera Assets" ;
		$data['primera'] = "Primera Africa" ;
		$data['purpose'] = "©2017 All Rights Reserved. Assets Management System. Privacy and Terms" ; 

		$data['asset_details'] = $this->admin_model->display_all_installed_assets();
		$this->load->view('includes/header.php',$data) ;
		$this->load->view('includes/sidebar_menu.php',$data) ;
		$this->load->view('includes/top_nav.php',$data) ;
		$this->load->view('view_all_installed_assets',$data) ;
		$this->load->view('includes/footer.php',$data) ;
	}

	function delete_asset()
	{
		$category_id = $this->uri->segment(3); 
		$this->admin_model->delete_asset($category_id) ;
	}



}
