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
		$data["nombreusuario"]=$this->session->userdata('nombre');
		$this->load->view('index',$data);

	}


	public function identificacion()
	{
		$this->crud->set_theme('flexigrid');


		$this->crud->set_table('tipoidentificacion')
        ->set_subject('Tipo de identificacion')
        ->columns(
        	'idtipoidentificacion',
        	'tipoid'
        )
        ->display_as('idtipoidentificacion','# id')
        ->display_as('tipoid','Tipo de Identificacion');


	    $this->crud->fields(
        	'idtipoidentificacion',
        	'tipoid');
	   	$this->crud->required_fields(
        	'idtipoidentificacion',
        	'tipoid');
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Listado de usuarios";
		$data["nombreusuario"]=$this->session->userdata('nombre');

		$this->load->view('header', $arrayHeader = array(
			'tituloHeader' => "Principal HDV", 
			"nombreusuario" => $data["nombreusuario"]));
		$this->load->view('principal',$data);
	}


	
}