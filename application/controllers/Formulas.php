<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulas extends CI_Controller {

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


		$this->crud->set_table('formulas')
        ->set_subject('Formulas')
        ->columns(
        	'idpaciente',
        	'idmedico',
        	'fechaformula',
        	'ref1',
        	'cant1',
        	'ref2',
        	'cant2',
        	'ref3',
        	'cant3',
        	'observacionesformula'
        )
        ->display_as('idpaciente','Paciente')
        ->display_as('idmedico','Medico')
        ->display_as('fechaformula','Fecha de recetacion')
        ->display_as('ref1','Medicamento 1')
        ->display_as('cant1','Cantidad Medicamento 1')
        ->display_as('ref2','Medicamento 2')
        ->display_as('cant2','Cantidad Medicamento 2')
        ->display_as('ref3','Medicamento 3')
        ->display_as('cant3','Cantidad Medicamento 3')
        ->display_as('observacionesformula','Observaciones');


	    $this->crud->fields(
        	'idpaciente',
        	'idmedico',
        	'fechaformula',
        	'ref1',
        	'cant1',
        	'ref2',
        	'cant2',
        	'ref3',
        	'cant3',
        	'observacionesformula');
	   	$this->crud->required_fields(
        	'idpaciente',
        	'idmedico',
        	'fechaformula',
        	'ref1',
        	'cant1',
        	'observacionesformula');/*
		$this->crud->set_field_upload("imagen","assets/imagenes/");*/
    	$this->crud->set_relation('idpaciente','pacientes','nombre');
    	$this->crud->set_relation('idmedico','medicos','nombre');

    	$this->crud->set_relation('ref1','medicamentos','nombremedicamento');
    	$this->crud->set_relation('ref2','medicamentos','nombremedicamento');
    	$this->crud->set_relation('ref3','medicamentos','nombremedicamento');


    	
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Modulo de formulas medicas";
		$data["nombreusuario"]=$this->session->userdata('nombre');
		$this->load->view('modulo',$data);

	}

	
	
}