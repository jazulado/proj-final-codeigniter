<?php
/*
MODELO de la tabla usuarios
los modelos herexdan de la clase principal CI_model 
aprovechar las caracteristicas para ahorrar codigo 
*/
class Usuarios_model extends CI_model {

	function __construct() {
		// invocar el helper security
		$this->load->helper('security');
	}
}