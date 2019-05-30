<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos extends CI_Controller {

	function __construct() {
		parent:: __construct();  
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


		$this->crud->set_table('medicos')
        ->set_subject('Medicos')
        ->columns(
        	'nombre',
        	'apellidos',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad'
        )
        ->display_as('nombre','Nombres')
        ->display_as('apellidos','Apellidos')
        ->display_as('telefono','Telefono')
        ->display_as('email','Email')
        ->display_as('direccion','Direccion')
        ->display_as('idciudad','Ciudad');


	    $this->crud->fields(
        	'nombre',
        	'apellidos',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad');
	   	$this->crud->required_fields(
        	'nombre',
        	'apellidos',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad');

    	$this->crud->set_relation('idciudad','ciudades','nombreciudad');
	   	$tablacrud = $this->crud->render();
	    
	    $data["tablacrud"] = $tablacrud->output;	

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;

		$data["titulo"]="Modulo de medicos";
		$data["nombreusuario"]=$this->session->userdata('nombre');

		$this->load->view('modulo',$data);

	}

	
}