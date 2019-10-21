<?php 

class Restaurant_controller extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant');
	}

	public function index()
	{
		$result=$this->Restaurant->get_all_restaurants();
		$data['restaurants']=$result;
		//debug($data);

		view_loader_with_data('layouts/products',$data);
	}

	public function view_restaurant_details($id)
	{
		$result=$this->Restaurant->get_restaurant_by_id($id);
		//debug($result);
		$data['restaurant']=$result;
		view_loader_with_data_simple('view_restaurant_details',$data);
	}

}
