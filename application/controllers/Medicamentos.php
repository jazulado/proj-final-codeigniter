<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicamentos extends CI_Controller {

	function __construct() {
		parent:: __construct();  
		$this->load->helper('form');
		$this->load->model("usuarios_model");
		$this->load->database();
		$this->load->library('session');
	    $this->load->helper('form');
	    $this->load->helper('url');
		$this->load->library("grocery_CRUD");
		$this->crud=new grocery_CRUD();
		if (!$this->session->userdata('id')) {
			redirect('login');
		}  
		

	}

	public function index()
	{
		$this->crud->set_theme('flexigrid');


		$this->crud->set_table('medicamentos')
        ->set_subject('Medicamento')
        ->columns(
        	'refmedicamento',
        	'nombremedicamento'
        )
        ->display_as('refmedicamento','Ref del medicamento')
        ->display_as('nombremedicamento','Nombre');


	    $this->crud->fields(
        	'refmedicamento',
        	'nombremedicamento');
	   	$this->crud->required_fields(
        	'refmedicamento',
        	'nombremedicamento');
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Modulo de medicamentos";
		$data["nombreusuario"]=$this->session->userdata('nombre');
		
		$this->load->view('modulo',$data);

	}

	
}