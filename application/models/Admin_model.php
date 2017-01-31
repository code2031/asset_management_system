<?php
	
class Admin_model extends CI_Model
{

		function __construct()
		{
			parent:: __construct(); 
		}

		// Creating User //
		function create_user()
		{	
			$user_data = array(
						'names' => $this->input->post('names'),
						'role' => $this->input->post('role'),
						'username' => $this->input->post('uname'),
						'password' => md5($this->input->post('pwd1')),
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
						'status' => $this->input->post('status'),
							   );
			$this->db->insert('users',$user_data ) ;
			return true ;

		}

		// Login process //
	function check_user_details()
	{
	 	$uname_fone = $this->input->post('uname_fone') ;
		$pwd = md5($this->input->post('pwd1')) ;
		$get = $this->db->query("SELECT * FROM users WHERE (username='$uname_fone' or phone='$uname_fone') and password='$pwd' and status='Enabled'");
		if($get->num_rows()== 1)
		{
			foreach ($get->result()as $value) 
			{
				$id = $value->id ;
				$username = $value->username ;
				$name = $value->names ;
				$role = $value->role ;
			}

			$this->session->set_userdata('userid', $id);
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('names', $name);
			$this->session->set_userdata('role', $role);

			$user_role = $this->session->userdata('role');

			if ($user_role == 'Admin') 
			{
				redirect('admin_controller/display_dashboard') ;
			}

			if ($user_role == 'User') 
			{
				redirect('user_controller/display_dashboard') ;
			}

		}
	}

	function display_all_users()
	{
		$get = $this->db->query("SELECT * FROM users") ;
		if ($get->num_rows() >= 0) 
		{
			return $get->result() ;
		}
		else
		{
			return NULL ; 
		}
	}

	function delete_user($id)
	{
		$delete = $this->db->delete('users', array('id' => $id)) ;
		redirect('admin_controller/display_all_users') ;
	}

	function enable_user($id)
	{

		$data = array('status' => 'Enabled');
		$enable = $this->db->update('users', $data , array('id' => $id)); 
		if ($enable) 
		{
			redirect('admin_controller/display_all_users') ;
		}
		else
		{
			return NULL ; 
		}
		
	}

	function disable_user($id)
	{

		$data = array( 'status' => 'Disabled' );
		$disable = $this->db->update('users', $data , array('id' => $id)); 
		if ($disable) 
		{
			redirect('admin_controller/display_all_users') ;
		}
		else
		{
			return NULL ; 
		}
		
	}

	function create_category()
	{
		$insert_category['category_name'] =  strtolower($this->input->post('cat_name')) ;
		$this->db->insert('asset_categories',$insert_category ) ;
		return true ;
	}

	function display_categories()
	{
		$get = $this->db->query("SELECT * FROM asset_categories") ;
		if ($get->num_rows() >= 0) 
		{
			
			return $get->result() ;
		}
		else
		{
			return NULL ; 
		}
	}

	function display_single_category($id)
	{
		$get = $this->db->query(" SELECT * FROM asset_categories WHERE id = '$id' ") ;
		if ($get->num_rows() == 1) 
		{
			return $get->result() ;
		}
		else
		{
			return NULL ; 
		}
	}

	function update_category($id)
	{
		$new_name['category_name'] = strtolower( $this->input->post("cat_name") ) ;

		$edit = $this->db->update('asset_categories', $new_name, array('id' => $id)); 
		if ($edit) 
		{
			redirect('admin_controller/create_category') ;
		}
		else
		{
			return NULL ; 
		}
	
	}

	function delete_category($id)
	{
		$delete = $this->db->delete('asset_categories', array('id' => $id)) ;
		redirect('admin_controller/create_category') ;
	}

	function install_asset()
	{	
		$installer_name = $this->session->userdata('names');  

		$asset_data = array(
					'category_id' => $this->input->post('category_id'),
					'asset_name' => $this->input->post('asset_name'),
					'model' => $this->input->post('model'),
					'serial_number' => $this->input->post('serial_number'),
					'po_number' => $this->input->post('po_number'),
					'vendor' => $this->input->post('vendor'),
					'date_purchased' => $this->input->post('date_purchased'),
					'warranty' => $this->input->post('warranty'),
					'asset_specification' => $this->input->post('asset_specification'),
					'status' => 'Installed', 
					'installed_by' => $installer_name  
						   );

		$this->db->insert('installed_assets',$asset_data ) ;
		return true ;
	}

	function display_all_installed_assets()
	{
		$get = $this->db->query("SELECT * FROM installed_assets") ;
		if ($get->num_rows() >= 0) 
		{
			return $get->result() ;
		}
		else
		{
			return NULL ; 
		}
	}

	function delete_asset($id)
	{
		$delete = $this->db->delete('installed_assets', array('id' => $id)) ;
		redirect('admin_controller/display_all_installed_assets') ;
	}


	
}


 ?>