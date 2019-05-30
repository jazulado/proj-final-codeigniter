<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Controlador salir
*/

class Salir extends CI_Controller {
	function __construct() {
		parent:: __construct(); 
	    $this->load->helper('url');
	    $this->load->helper('form');
		$this->load->model("usuarios_model");
		$this->load->library('session');
	}
	public function index()
	{
		// cuando se cargue el enlace hacia el controlador salir, en esta funcion se destruyen las variables y se redirecciona hacia login para que forze el usuario y clave de nuevo
		$this->session->sess_destroy();
		redirect(site_url("login"));
	}


}
