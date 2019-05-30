<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();  
	    $this->load->helper('url');
	    $this->load->helper('form');
		$this->load->model("usuarios_model");
		$this->load->library('session');
		

	}
	public function index()
	{
			$data["titulo"]="Login";
			$this->load->view('login',$data);
		//$this->load->view('login');
	}

	function acceso() {
		$data=$this->usuarios_model->validar_acceso();

		if (sizeof($data)>0) {
			$data_session=array(
				'id'=>$data[0]["id"],
				
				'nombre'=>$data[0]["nombre"]


			);
			$this->session->set_userdata($data_session);
			redirect(site_url("principal"));
		} else {

			redirect(site_url("login"));
		}

	

	}




	
}