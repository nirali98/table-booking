<?php

class Booking extends CI_Model
{
	var $table='bookings';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_bookings()
	{
		$query=$this->db->get($this->table);
		return $query->result();
	}

	public function get_booking_by_id($id)
	{
		$query=$this->db->select('*')->from($this->table)->where('id',$id)->get();
		return $query->row();
	}

	public function book_table($data)
	{
		$rs=$this->db->insert($this->table,$data);
		$insert_id=$this->db->insert_id();
		return $insert_id;
	}

	public function get_free_restaurant_tables($arrival_time,$leaving_time)
	{
		// $query=$this->db->select('*')->from($this->table)->where('status','0')->get();
		// return $query->result();
		$query=$this->db->select('*')->from($this->table)->where("(arrival_time > $leaving_time) OR (leaving_time < $arrival_time)")->get();
		return $query->result();
	}

}