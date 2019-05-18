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
	function __construct() {

		parent::__construct();
		
		$this->load->model('user_model');
		$this->load->model('collaborator_model');
		$this->load->model('service_model');
		$this->load->helper('url');
		$this->load->helper('date');
	}

	public function index()
	{
		 //$this->load->view('/dashboard/dashboard');
        $this->load->database();
        $this->load->dbutil();

       // check connection details
       if( !$this->dbutil->database_exists('shoptexto_database')) {
            echo 'Not connected to a database, or database not exists';
        } else {
        	$this->load->view('/dashboard/dashboard');
        }   


	} 

	public function dashboard() {

        $this->load->view('/dashboard/dashboard');

	}

	public function createuser() {
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->view('/dashboard/createuser');

	}

	public function users() {

		$data['user'] = $this->user_model->all();

		$this->load->view('/dashboard/users', $data);
	}

	public function createcollab() {

		$this->load->view('/dashboard/createcollaborator');
	}

	public function collaborators() {

	   $data['collaborators'] = $this->collaborator_model->all();	

       $this->load->view('/dashboard/collaborators', $data);

	}

	public function createservice() {

		$this->load->view('/dashboard/createservice');
	}

	public function services() {

        $data['services'] = $this->service_model->all();
        $this->load->view('/dashboard/services', $data);

	}

	public function createindustry() {

		$this->load->view('/dashboard/createindustry');
	}

	public function industries() {

		$this->load->view('/dashboard/industries');
	}
  
    public function createproject() {

    	$this->load->view('/dashboard/createproject');
    }

    public function projects() {

    	$this->load->view('/dashboard/projects');
    }

	public function login() {

        $this->load->view('/dashboard/login');
	}

}
