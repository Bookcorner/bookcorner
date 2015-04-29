<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	
	public function signin() {
		$username = set_value ( "username" );
		$pwd = md5 ( set_value ( "pwd" ) );
		$remember = set_value ( "remember" );
		
		/* Debe realizarse el modelo */
		$this->load->model ( 'Prueba_Model' );
		$correct = $this->Prueba_Model->credentialsCheck ( $username, $pwd );
		/* Debe realizarse el modelo */
		
		if ($correct && $remember == 'on') {
			// creo una cookie
			$this->load->helper ( 'cookie' );
			
			$this->input->set_cookie ( "sessionuser", $username, (time () + (86400 * 365)) );
			// la cookie expira en un año
			
		} else if ($correct) {
			// creo una sesion
			
			$newsession = array (
					'sessionuser' => $username,
					'ingresado' => TRUE 
			);
			
			$this->session->set_userdata ( $newsession );
		}
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
	
	public function logout() {
		$this->load->helper ( 'cookie' );
		
		delete_cookie ( 'sessionuser' );
		
		$this->session->sess_destroy ();
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
}