<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();  
	    $this->load->helper('url');
		$this->load->helper('form');
	    $this->load->helper('form');
		$this->load->model("usuarios_model");
		$this->load->library('session');
		

	}
	public function index()
	{
		$this->load->view('login');
	}

	function acceso() {
		// este controlador es que permite validar con el modelo 
		// si el usuario existe
		/*if ($_POST['correo']<>"" && $_POST['clave']<>"") {
			// invoque el modelo
		} else {
			redirect('login');
		}*/

		/* ***************************************** */
		// el proceso de validacon lo hara por completo el modelo.
		// lo unico que va ser el controlador es invocar el modelo. 
		// si el modelo retorna valores, que permita cargar las variables de session
		// si no trae datos lo mande con un redirect a login
		$data=$this->usuarios_model->validar_acceso();

		if (sizeof($data)>0) {
			// cargar las sessiones
			// las sessiones en el ci no se cargan como normalmente que se hace
			// session_start();
			// $_SESSION['nombre']=;
			// en el ci se usa es pasar los datos a un vector asociativo y luego ejecutar la funcion set_userdata
			// para que estos funcione debe estar la libreria session activa
			$data_session=array(
				'id'=>$data[0]["id"],
				
				'nombre'=>$data[0]["nombre"]/*
				'telefono'=>$data[0]["telefono"],
				'foto'=>$data[0]["foto"],
				'facebook'=>$data[0]["facebook"],
				'twitter'=>$data[0]["twitter"],
				'linkedin'=>$data[0]["linkedin"]*/


			);
			$this->session->set_userdata($data_session);
			redirect(site_url("principal"));
		} else {
			redirect(site_url("login"));
		}

		/*
		http://localhost:8080/proj-final-codeigniter/index.php/login/acceso
		*/
	

	}




	
}