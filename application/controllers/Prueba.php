<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Prueba extends CI_Controller {
	
	public function index() {
		$this->load->view ( 'templates/cabecera' );
		$this->load->view ( 'templates/menu_login' );
		$this->load->view ( 'templates/end' );
	}
	
	public function tabla() {
		R::setAutoResolve ( TRUE );
		$user = R::dispense ( 'user' );		
		$usubasico = new user();		
		$user->import( $usubasico );
		$id = R::store ( $user );
	}
	
	public function usuario() {
		
		R::setAutoResolve ( TRUE );
		$usuario = R::dispense ( 'user' );
		$usuario->username = 'Mario Cantelar dsfsdfdf';
		$usuario->nickname = "marcant94";
		$fecha = new DateTime('09/13/1994');
		$usuario->user_birthdate = $fecha;
		$usuario->email = "mcantelar@gmail.com";
		$usuario->user_genre = "M";
		$usuario->user_avatar = "http://iconos.gratis.es/iconos/viajes/ico48/tierra--iconos.gratis.es--.ico";
		
		$id = R::store ( $usuario );
		
		print_r($usuario);
		
		//$usuarioRecuperado = R::load ( 'user', $id );
		//R::trash ( $usuarioRecuperado );
		
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

class User {
	var $id = 1;
	var $username = "";	
	var $nickname = "";
	var $user_birthdate = "";
	var $email = "";
	var $user_genre = "";
	var $user_avatar = "";
}