<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Application extends CI_Controller {

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
	public function index()
	{
		 $this->load->view('/dashboard/dashboard');

	} 

	public function dashboard() {

        $this->load->view('/dashboard/dashboard');

	}

	public function createuser() {

		$this->load->view('/dashboard/createuser');

	}

	public function users() {

		$this->load->view('/dashboard/users');
	}

	public function createcollab() {

		$this->load->view('/dashboard/createcollaborator');
	}

	public function collaborators() {

       $this->load->view('/dashboard/collaborators');

	}

	public function createservice() {

		$this->load->view('/dashboard/createservice');
	}

	public function services() {

        $this->load->view('/dashboard/services');

	}

	public function createindustry() {

		$this->load->view('/dashboard/createindustry');
	}

	public function industries() {

		$this->load->view('/dashboard/industries');
	}

	public function login() {

        $this->load->view('/dashboard/login');
	}

}
