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

	function validate($data) {
        
        $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . md5($data['password']) . "'AND status = 1";
 
		$this->db->select('*');
	    $this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
			
		$query = $this->db->get();

		if ($query->num_rows() == 1) {

            return true;

        } else {
             
            return false;
        }
	} 
}
?>