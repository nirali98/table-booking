<?php

class Restaurant extends CI_Model
{
	var $table='restaurants';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_restaurants()
	{
		$query=$this->db->get($this->table);
		return $query->result();
	}

	public function get_restaurant_by_id($id)
	{
		$query=$this->db->select('*')->from($this->table)->where('id',$id)->get();
		return $query->row();
	}

}