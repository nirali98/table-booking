<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('User');
	}
		
	public function index()
	{
		view_loader('Login_View');
	}
	
	public function Login_data()
	{	
					
			$data = $this->User->LoginData();
			//debug($data);die();
			$status="";
			if(!empty($data))
			{
				$id=$data->id;
				$email=$data->email;
				$password=$data->password;
				$status=$data->is_active;
				
				if ($password == $this->input->post('pass'))
				{
					if ($data->role_id == 1)
					{
						$this->session->set_userdata('customer',$email);
					}
					if($data->role_id == 2)
					{
						$this->session->set_userdata('business',$email);
					}

					view_loader_with_data('layouts/index',$data);
					
				}
				else
				{
					$vars['error']="invalid Password!!";
					view_loader_with_data('Login_View',$vars);
				}

			}
			else
			{
				$vars['error']="invalid Email!!";
				view_loader_with_data('Login_View',$vars);
			}
	}

	public function LogOut()
	{
		$data = ['id', 'email'];
        $this->session->unset_userdata($data);

        view_loader('Login_view');
	}

}

?>