<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct() {
		parent::__construct();  
		$this->load->helper('form');
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
	{/*
		$this->crud->set_theme('flexigrid');


		$this->crud->set_table('usuarios')
        ->set_subject('Hoja de vida de usuarios')
        ->columns(
        	'nombres',
        	'apellidos',
        	'telefono',
        	'fechanacimiento',
        	'idepsasociada',
        	'idtipoidentificacion',
        	'identificacion',
        	'idtipocliente',
        	'imagen'
        )
        ->display_as('nombres','Nombres')
        ->display_as('apellidos','Apellidos')
        ->display_as('telefono','Telefono')
        ->display_as('fechanacimiento','Fecha de nacimiento')
        ->display_as('idepsasociada','Eps asociada')
        ->display_as('idtipoidentificacion','Tipo de identificacion')
        ->display_as('identificacion','# id')
        ->display_as('idtipocliente','Tipo de cliente')
        ->display_as('imagen','Imagen');


	    $this->crud->fields(
        	'nombres',
        	'apellidos',
        	'telefono',
        	'fechanacimiento',
        	'idepsasociada',
        	'idtipoidentificacion',
        	'identificacion',
        	'idtipocliente',
        	'imagen');
	   	$this->crud->required_fields(
        	'nombres',
        	'apellidos',
        	'telefono',
        	'fechanacimiento',
        	'idepsasociada',
        	'idtipoidentificacion',
        	'identificacion',
        	'idtipocliente',
        	'imagen');
		$this->crud->set_field_upload("imagen","assets/imagenes/");
    	$this->crud->set_relation('idtipocliente','tipocliente','tipo');
    	$this->crud->set_relation('idtipoidentificacion','tipoidentificacion','tipoid');
    	$this->crud->set_relation('idepsasociada','tipoeps','nombreeps');
	   	$tablacrud = $this->crud->render();
*//*
		$data["js_files"]=$tablacrud->js_files;
		$data["css_files"]=$tablacrud->css_files;
	    $data["tablacrud"] = $tablacrud->output;
*/
		$data["titulo"]="Listado de usuarios";
		$data["nombreusuario"]=$this->session->userdata('nombre');

		//$this->load->view('header', $arrayHeader = array(
		//	'tituloHeader' => "Principal HDV", 
		//	"nombreusuario" => $data["nombreusuario"]));
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

	public function cliente()
	{/*
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
		$this->load->view('principal',$data);*/
	}

	
}