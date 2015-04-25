<?php
class Prueba_Model extends CI_Model {
	var $title = '';
	var $content = '';
	var $date = '';
	
	function __construct() {
		// Llamando al contructor del Modelo
		parent::__construct ();
	}
	
	function get_mensajito() {
		$query = $this->db->get( 'saludos' );
		
		//return $query->result();
		return $query->row_array();
	}
	
	
}
?>