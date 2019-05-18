<?php
class User_model extends CI_Model{

	function __construct() {

	    parent::__construct();
	}

	function save($data){
		// Inserting in Table(students) of Database(college)
		 $this->db->insert('user', $data);
	}

	function all() {
		
		$query = $this->db->get('user');
        return $query->result();
	}

	function log($data) {

	}
}
?>