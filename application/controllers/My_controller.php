<?php

class My_controller extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
	}

	public function debug($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	public function load_all_views($view_name)
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/nav');
		//$this->load->view('layouts/slider');
		$this->load->view('layouts/features');
		//$this->load->view('layouts/catagories');
		$this->load->view('layouts/products');
		$this->load->view($view_name);
		$this->load->view('layouts/partners');
		$this->load->view('layouts/footer');
	}

}