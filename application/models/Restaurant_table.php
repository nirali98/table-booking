<?php 
class Restaurant_table extends CI_Model
{
	var $table='restaurant_tables';

	public function __construct()
	{
		parent::__construct();
	}

	public function get_all_restaurant_tables()
	{
		$query=$this->db->get($this->table);
		return $query->result();
	}

	public function get_free_restaurant_tables()
	{
		$query=$this->db->select('*')->from($this->table)->where('status','0')->get();
		return $query->result();
		
	}

	public function get_restaurant_table_by_id($id)
	{
		$query=$this->db->select('*')->from($this->table)->where('id',$id)->get();
		return $query->row();
	}
}