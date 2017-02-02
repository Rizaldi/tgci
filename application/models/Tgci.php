<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Tgci extends CI_Model
{
	
	function __construct()
	{
		
	}
	public function get_menu()
	{
		return $this->db->where('parent_id',0)->get('tgci_categories');
	}
	public function get_sub_menu($parent_id)
	{
		return $this->db->where('parent_id',$parent_id)->get('tgci_categories');
	}
}
