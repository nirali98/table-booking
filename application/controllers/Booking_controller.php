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

	public function select_table()
	{
		//debug($_POST);

		$leaving_time=$_POST['arrival_time']+$_POST['allocation_hours'];
		if ($leaving_time>23)
		{
			$leaving_time-=24;
		}
		//echo $leaving_time;

		//$tables=$this->Restaurant_table->get_all_restaurant_tables();
		
		
		$free_tables=$this->Restaurant_table->get_free_restaurant_tables($_POST['arrival_time'],$leaving_time);
		//debug($free_tables);
		$valid_tables = array();
		foreach ($free_tables as $table)
		{
			if ($table->capacity >= $_POST['no_of_persons']  )
			{
				array_push($valid_tables, $table->id);
			}
		}
		$final_tables = array();
		
		foreach ($valid_tables as $table)
		{
			array_push($final_tables, $this->Restaurant_table->get_restaurant_table_by_id($table));
			
		}

		//debug($final_tables);die();
		//debug($valid_tables);
		$data['booking']=$_POST;
		$data['tables']=$final_tables;

		view_loader_with_data_simple('select_table_view',$data);

	}

	public function book_table()
	{
		debug($_POST);
		$data = array(
			'restaurant_id' => $_POST['restaurant_id'], 
			'customer_id' => $_POST['customer_id'], 
			'no_of_persons' => $_POST['no_of_persons'], 
			'date' => $_POST['date'], 
			'arrival_time' => $_POST['arrival_time'],
			'leaving_time' => $_POST['arrival_time'],
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