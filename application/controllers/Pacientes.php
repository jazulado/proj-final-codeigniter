<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {

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


		$this->crud->set_table('pacientes')
        ->set_subject('Pacientes')
        ->columns(
        	'nombre',
        	'apellido',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad',
        	'observaciones'
        )
        ->display_as('nombre','Nombre')
        ->display_as('apellido','Apellido')
        ->display_as('telefono','Telefono')
        ->display_as('email','Email')
        ->display_as('direccion','Direccion')
        ->display_as('idciudad','Ciudad')
        ->display_as('observaciones','Observaciones');


	    $this->crud->fields(
        	'nombre',
        	'apellido',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad',
        	'observaciones');
	   	$this->crud->required_fields(
        	'nombre',
        	'apellido',
        	'telefono',
        	'email',
        	'direccion',
        	'idciudad',
        	'observaciones');/*
		$this->crud->set_field_upload("imagen","assets/imagenes/");*/
    	$this->crud->set_relation('idciudad','ciudades','nombreciudad');/*
    	$this->crud->set_relation('idtipoidentificacion','tipoidentificacion','tipoid');
    	$this->crud->set_relation('idepsasociada','tipoeps','nombreeps');*/
	   	$tablacrud = $this->crud->render();

		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;

		$data["titulo"]="Modulo de pacientes";
		$data["nombreusuario"]=$this->session->userdata('nombre');

		//$this->load->view('header', $arrayHeader = array(
		//	'tituloHeader' => "Principal HDV", 
		//	"nombreusuario" => $data["nombreusuario"]));
		$this->load->view('modulo',$data);

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

		//$this->load->view('header', $arrayHeader = array(
			//'tituloHeader' => "Principal HDV", 
			//"nombreusuario" => $data["nombreusuario"]));
		$this->load->view('principal',$data);
	}

	public function cliente()
	{
		$this->crud->set_theme('flexigrid');


		$this->crud->set_table('tipocliente')
        ->set_subject('Tipo de clientes')
        ->columns(
        	'idtipocliente',
        	'tipo'
        )
        ->display_as('idtipocliente','# id')
        ->display_as('tipo','Rango de cliente');


	    $this->crud->fields(
        	'idtipocliente',
        	'tipo');
	   	$this->crud->required_fields(
        	'idtipocliente',
        	'tipo');
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