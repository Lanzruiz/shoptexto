<?php
class Service_model extends CI_Model{

	function __construct() {

	    parent::__construct();
	}

	function save($data){
		// Inserting in Table(students) of Database(college)
		 $this->db->insert('services', $data);
	}

	function all() {
		
		$query = $this->db->get('services');
        return $query->result();
	}
}
?>