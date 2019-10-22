<?php
class Registration_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->view('registration_view');
	}

	public function insertdata()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]|max_length[18]');
		$this->form_validation->set_rules('password', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
		$this->form_validation->set_rules('contact_no', 'Contact Number', 'required|numeric');

		if($this->form_validation->run()==FALSE)
		{
			view_loader('registration_view');
		}
		else
		{
			$this->session->set_userdata('email',$this->input->post('email'));
			$this->session->set_userdata('password',$this->input->post('password'));

			$this->User->insertdata($_POST);
			view_loader('layouts/index');

		}


		
	}

}