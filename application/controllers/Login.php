<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	
	public function signin() {
		$username = set_value ( "username" );
		$pwd = md5 ( set_value ( "pwd" ) );
		$remember = set_value ( "remember" );
		
		/* Debe realizarse el modelo */
		$this->load->model ( 'Prueba_Model' );
		$correct = $this->Prueba_Model->credentialsCheck ( $user, $password );
		/* Debe realizarse el modelo */
		
		if ($correct && $remember) {
			// creo una cookie
			$this->load->helper ( 'cookie' );
			
			$this->input->set_cookie ( "sessionuser", $user, (time () + (86400 * 365)) );
			// la cookie expira en un año
			
		} else if ($correct) {
			// creo una sesion
			$this->load->library ( 'session' );
			
			$newsession = array (
					'sessionuser' => $user,
					'ingresado' => TRUE 
			);
			
			$this->session->set_userdata ( $newsession );
		}
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
	
	public function logout() {
		$this->load->helper ( 'cookie' );
		$this->load->library ( 'session' );
		
		delete_cookie ( 'sessionuser' );
		
		$this->session->sess_destroy ();
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
}

function checkperm() {
	if (isset ( $_COOKIE ['sessionuser'] )) {
		return true;
	}
	
	// las sesiones de codeigniter no usa las de php, y esta funcion no es un objeto que herede
	// de ninguna clase de codeigniter
	if ($_COOKIE == null) {
		return false;
	} else {
		return true;
	}
	
	// return false;
}