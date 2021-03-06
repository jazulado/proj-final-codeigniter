<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();  
	    $this->load->helper('form');
		$this->load->model("usuarios_model");
		$this->load->library('session');
		$this->load->database();
	    $this->load->helper('url');
		$this->load->library("grocery_CRUD");
		$this->crud=new grocery_CRUD();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}  
		

	}

	public function index()
	{
		$data["titulo"]="Inicio";

	    $querypac = $this->db->query('SELECT * FROM pacientes');
		$data["numpacientes"] = $querypac->num_rows();


	    $querypac = $this->db->query('SELECT * FROM medicos');
		$data["numedicos"] = $querypac->num_rows();

	    $querypac = $this->db->query('SELECT * FROM cita');
		$data["numcitas"] = $querypac->num_rows();

	    $querypac = $this->db->query('SELECT * FROM medicamentos');
		$data["numedicamentos"] = $querypac->num_rows();

		$data["nombreusuario"]=$this->session->userdata('nombre');
		$this->load->view('index',$data);


	}


	


	
}