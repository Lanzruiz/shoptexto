<?php
class Collaborator_model extends CI_Model{

	function __construct() {

	    parent::__construct();
	}

	function save($data){
		// Inserting in Table(students) of Database(college)
		 $this->db->insert('collaborators', $data);
	}

	function all() {

		$query = $this->db->get('collaborators');
        return $query->result();        
        
	}

	function log($data) {

	}
}
?>