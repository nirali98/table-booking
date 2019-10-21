<?php

class Booking_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Restaurant');
		$this->load->model('Restaurant_table');
		$this->load->model('Booking');
	}

	public function index()
	{
		//debug($_POST);
		if (isset($_POST)) {
			$data['restaurant']=$_POST;
		}

		if (isset($_GET['id'])) {
			$data['restaurant']=$_GET;
		}
				
		$result=$this->Restaurant_table->get_free_restaurant_tables();
		//debug($result);
		$data['restaurant_tables']=$result;
		view_loader_with_data_simple('booking_view',$data);
	}

	public function book_table()
	{
		//debug($_POST);
		$data = array(
			'restaurant_id' => $_POST['restaurant_id'], 
			'customer_id' => $_POST['customer_id'], 
			'no_of_persons' => $_POST['no_of_persons'], 
			'date' => $_POST['date'], 
			'arrival_time' => $_POST['arrival_time'],
			'is_active' => 1, 
			'table_id' => $_POST['table_id'], 
		);
		$insert_id=$this->Booking->book_table($data);
		if (isset($insert_id))
		{
			redirect(base_url().'index.php/Booking_controller/booking_report/'.$insert_id);
		}
		else
		{
			echo "failed";
		}

	}

	public function booking_report($id)
	{
		$booking=$this->Booking->get_booking_by_id($id);
		//debug($booking);
		$data['booking']=$booking;
		view_loader_with_data_simple('booking_report_view',$data);
	}

}