<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class Login_Controller extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		
		$this->load->model('Login_Model');
	}
		
	public function index()
	{
		$this->load->view('Login_View');
	}
	
	public function Login_data()
	{	
					
			$data = $this->Login_Model->LoginData();
			$status="";
			if($data)
			{
				foreach($data as $row)
				{
						$id=$row->id;
						$email=$row->email;
						$status=$row->is_active;
				}

				//$this->session->set_userdata($ses);
			
			
			//var_dump($ses);
				if($status=="1")
				{
					$this->load->view('Index');
					$data = array('email' => $email , 'id' => $id);
					$this->session->set_userdata($data);
				}
				else
				{
					//var_dump($ses);
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