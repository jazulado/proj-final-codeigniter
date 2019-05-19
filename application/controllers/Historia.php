<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Historia extends CI_Controller {

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


		$this->crud->set_table('historiaclinica')
        ->set_subject('Historia clinica')
        ->columns(
        	'idpaciente',
        	'idmedico',
        	'idciudad',
        	'estatura',
        	'peso',
        	'motivoconsulta',
        	'antecedentes',
        	'diagnostico',
        	'tratamiento',
        	'fechaingreso'
        )
        ->display_as('idpaciente','Paciente')
        ->display_as('idmedico','Medico')
        ->display_as('idciudad','Ciudad')
        ->display_as('estatura','Estatura(metros)')
        ->display_as('peso','Peso(Kg)')
        ->display_as('motivoconsulta','Motivo de la consulta')
        ->display_as('antecedentes','Antecedentes')
        ->display_as('diagnostico','Diagnostico')
        ->display_as('tratamiento','Tratamiento')
        ->display_as('fechaingreso','Fecha de creacion de la historia medica');


	    $this->crud->fields(
        	'idpaciente',
        	'idmedico',
        	'idciudad',
        	'estatura',
        	'peso',
        	'motivoconsulta',
        	'antecedentes',
        	'diagnostico',
        	'tratamiento',
        	'fechaingreso');
	   	$this->crud->required_fields(
            'idpaciente',
            'idmedico',
            'idciudad',
            'estatura',
            'peso',
            'motivoconsulta',
            'antecedentes',
            'diagnostico',
            'tratamiento',
            'fechaingreso');

    	$this->crud->set_relation('idpaciente','pacientes','nombre');
    	$this->crud->set_relation('idmedico','medicos','nombre');
        $this->crud->set_relation('idciudad','ciudades','nombreciudad');


    	
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Modulo de Historias medicas";
		$data["nombreusuario"]=$this->session->userdata('nombre');
		$this->load->view('modulo',$data);

	}

	
	
}