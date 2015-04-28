<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Prueba extends CI_Controller {
	
	public function index() {
		$this->load->view ( 'templates/cabecera' );
		$this->load->view ( 'templates/menu_login' );
		$this->load->view ( 'templates/end' );
	}
	public function mensaje() {
		$this->load->model ( 'Prueba_Model' );
		$data ['query'] = $this->Prueba_Model->get_mensajito ();
		
		$this->load->view ( 'prueba_view', $data );
	}
	public function orm() {
		R::setAutoResolve ( TRUE );
		$coche = R::dispense ( 'coche' );
		$coche->modelo = 'Seat';
		
		$id = R::store ( $coche ); // Create or Update
		$coche = R::load ( 'coche', $id );
		R::trash ( $coche );
	}
	
	public function create_coche() {
		R::setAutoResolve ( TRUE );
		$coche = R::dispense ( 'coche' );
		$coche->modelo = 'Seat';
	
		$id = R::store ( $coche ); // Create or Update
	}
	
	public function show_coche() {
		$data['coches'] = R::findOne( 'coche' );
		$this->load->view ( 'templates/cabeceras/cabecera_base' );
		$this->load->view ( 'templates/menus/menu_login' );
		$this->load->view ( 'coches' , $data);
		$this->load->view ( 'templates/end' );
	}
	
}