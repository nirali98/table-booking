<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model	
{

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
}
