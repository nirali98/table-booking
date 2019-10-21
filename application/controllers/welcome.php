<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'controllers/My_controller.php';

class Welcome extends My_controller{

	public function index()
	{
		$this->load_all_views('welcome_message');
	}
}
