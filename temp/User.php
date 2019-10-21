<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model	
{

	public function LoginData()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		$para = array('email' => $email ,'password' => $pass );
		$data=$this->db->where($para)->select('*')->from('users')->get();
		if($data)
		{
			return $data->result();
		}
	}
}
?>