<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	public function signin() {
		$this->form_validation->set_rules ( 'username', 'Usuario', 'required|alpha_numeric' );
		$this->form_validation->set_rules ( 'pwd', 'Contraseña', 'required' );
		$remember = set_value ( 'remember' );
		
		if ($this->form_validation->run () == FALSE) {
		} else {
			$this->load->model ( 'users_model' );
			
			$username = set_value ( 'username' );
			$valid_user = $this->users_model->check_valid_user ( $username );
			
			if ($valid_user == FALSE) {
				$this->session->set_flashdata ( 'error', 'Usuario erróneo, Por favor inténtelo otra vez' );
			} else {
				$pwd = md5 ( set_value ( 'pwd' ) );
				
				if ($valid_user->user_pwd != $pwd) {
					
					$this->session->set_flashdata ( 'error', 'Contraseña errónea, Por favor inténtelo otra vez' );
				} else {
					
					if ($remember == 'on') {
						
						$cookie = array (
								'name' => 'venue_details',
								'value' => 'Hello',
								'expire' => time () + 86500,
								'path' => '/' 
						);
						
						$cookie = array (
								'name' => 'bookcorner',
								'value' => $valid_user->user_nickname . '#' . $valid_user->user_name . '#' . $valid_user->user_surname,
								'expire' => time () + (86400 * 365),
								'path' => '/' 
						);
						
						$this->input->set_cookie ( $cookie );
					} else {
						$sessionData = array (
								'title' => 'bookcorner',
								'username' => $valid_user->user_nickname,
								'name' => $valid_user->user_name,
								'surname' => $valid_user->user_surname 
						);
						
						$this->session->set_userdata ( $sessionData );
					}
				}
			}
		}
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
	public function logout() {
		$this->load->helper ( 'cookie' );
		
		delete_cookie ( 'bookcorner' );
		
		$this->session->sess_destroy ();
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
}