<?php

class Content extends CI_Model{

	public function get_content(){
		$this->db->select()->from('pagedata')->where(['page' => $this->uri->segment(2), 'id >' => 2]);
        $query = $this->db->get();
		return $query->result();
	}
}