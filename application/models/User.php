<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model	
{
	//******** Happy's code ***************
	public function LoginData()	
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$para = array('email' => $email);
		$data=$this->db->where($para)->select('*')->from('users')->get();
		if(isset($data))
		{
			return $data->row();
		}
	}

	//******** Janvi's code ***************

	public function insertdata($data)
	{
		if(isset($_POST["business"]))
		{
			$data=array('email'=>$this->input->post('email'),
						'password'=>$this->input->post('password'),
						'dob'=>$this->input->post('dob'),
						'gender'=>$this->input->post('gender'),
						'contact_no'=>$this->input->post('contact_no'),
						'role_id'=>2,
						'is_active'=>1);
		}
		elseif(isset($_POST["customer"]))
		{
			$data=array('email'=>$this->input->post('email'),
						'password'=>$this->input->post('password'),
						'dob'=>$this->input->post('dob'),
						'gender'=>$this->input->post('gender'),
						'contact_no'=>$this->input->post('contact_no'),
						'role_id'=>1,
						'is_active'=>1);

		}
		return $this->db->insert('users',$data);
			
	}

}
