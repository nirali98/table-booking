<?php 

class Restaurant_controller extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant');
		$this->load->model('User');
		$this->load->model('City');
	}

	public function index()
	{
		$result=$this->Restaurant->get_all_restaurants();
		$data['restaurants']=$result;
		//debug($data);

		view_loader_with_data('layouts/index',$data);
	}

	public function view_restaurant_details($id)
	{
		$result=$this->Restaurant->get_restaurant_by_id($id);
		$business=$this->User->get_user_by_id($result->business_id);
		$city=$this->City->get_city_by_id($result->city_id);

		// debug($result);
		// debug($business);
		// debug($city);

		$data['restaurant']=$result;
		$data['business']=$business;
		$data['city']=$city;
		view_loader_with_data_simple('view_restaurant_details',$data);
	}

}
