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
		$this->load->view('Login_View');
	}
	
	public function Login_data()
	{	
					
			$data = $this->User->LoginData();
			$status="";
			if($data)
			{
				foreach($data as $row)
				{
						$id=$row->id;
						$email=$row->email;
						$status=$row->is_active;
				}
				if($status=="1")
				{
					$data = array('email' => $email , 'id' => $id);
					$this->session->set_userdata($data);
					$this->load->view('layouts/index');
					/*$data = array('email' => $email , 'id' => $id);
					$this->session->set_userdata($data);*/
				}
				else
				{
					echo "<script>alert('You r Blocked..!!!')</script>";
					$this->load->view('Login_view');
				}
			}
			else
			{
				echo "<script>alert('Invalid User..!!!')</script>";
					$this->load->view('Login_view');
			}
	}

	public function LogOut()
	{
		$data = ['id', 'email'];
        $this->session->unset_userdata($data);

        $this->load->view('Login_view');
	}

}

?>