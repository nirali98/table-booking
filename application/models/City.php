<?php

class City extends CI_Model
{
	var $table='cities';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_cities()
	{
		$query=$this->db->get($this->table);
		return $query->result();
	}

	public function get_city_by_id($id)
	{
		$query=$this->db->select('*')->from($this->table)->where('id',$id)->get();
		return $query->row();
	}

}