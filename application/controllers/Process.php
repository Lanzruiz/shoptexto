<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {

		parent::__construct();

		$this->load->model('user_model');
		$this->load->model('service_model');
		$this->load->model('collaborator_model');
		$this->load->helper('url');
		$this->load->helper('date');
	}

	function save($entities) {

		$format = 'DATE_RFC822';
        $time = time();

		if($entities == 'user') {

			$data = array(
				'firstname' => $this->input->post('fname'),
				'lastname' => $this->input->post('lname'),
				'code' => $this->input->post('code'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post("password")),
				'phone' => $this->input->post('phone'),
				'status' => 0,
				'role' => $this->input->post('role'),
				'datecreated' => date('y-m-d')
			);

			$this->user_model->save($data);

			redirect('application/users', 'refresh');

		} else if($entities == 'collaborator') {

			$data = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'type' => $this->input->post('type'),
				'sourcelang' => $this->input->post('sourcelang'),
				'targetlang' => $this->input->post('targetlang'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'rank' => $this->input->post('rank'),
				'status' => 0,
				'datecreated' => date('y-m-d')
			);

			$this->collaborator_model->save($data);

			redirect('application/collaborators', 'refresh');

		} else if($entities == 'service') {

			$data = array(
                'servicename' => $this->input->post('servicename'),
                'status' => 0,
				'datecreated' => date('y-m-d')

			);

			$this->service_model->save($data);

			redirect('application/services', 'refresh');

		}
	}

	function login() {

	}

}
