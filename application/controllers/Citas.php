<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Citas extends CI_Controller {

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


		$this->crud->set_table('cita')
        ->set_subject('Citas')
        ->columns(
        	'idpaciente',
        	'idmedico',
        	'fecha',
        	'observacionescita'
        )
        ->display_as('idpaciente','Paciente')
        ->display_as('idmedico','Medico')
        ->display_as('fecha','Fecha')
        ->display_as('observacionescita','Observaciones');


	    $this->crud->fields(
        	'idpaciente',
        	'idmedico',
        	'fecha',
        	'observacionescita');
	   	$this->crud->required_fields(
            'idpaciente',
            'idmedico',
            'fecha',
            'observacionescita');/*
		$this->crud->set_field_upload("imagen","assets/imagenes/");*/
    	$this->crud->set_relation('idpaciente','pacientes','nombre');
    	$this->crud->set_relation('idmedico','medicos','nombre');


    	
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Modulo de citas medicas";
		$data["nombreusuario"]=$this->session->userdata('nombre');
		$this->load->view('modulo',$data);

	}

	
	
}