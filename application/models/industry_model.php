<?php
class Industry_model extends CI_Model{

	function __construct() {

	    parent::__construct();
	}

	function save($data){
		// Inserting in Table(students) of Database(college)
		 $this->db->insert('industries', $data);
	}

	function all() {
		
		$query = $this->db->get('industries');
        return $query->result();
	}
}
?>