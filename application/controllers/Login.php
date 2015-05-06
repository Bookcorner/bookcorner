<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Login extends CI_Controller {
	public function signin() {
		$this->setSigninFormRules ();
		
		$isFormValidationOk = $this->form_validation->run () == TRUE;
		
		if ($isFormValidationOk) {
			$this->load->model ( 'users_model' );
			$username = set_value ( 'username' );
			$valid_user = $this->users_model->check_valid_user ( $username );
			
			$isValidUserOk = $valid_user == TRUE;
			
			if (! $isValidUserOk) {
				$this->session->set_flashdata ( 'error', 'Usuario erróneo, Por favor inténtelo otra vez' );
			} else {
				$pwd = set_value ( 'pwd' );
				$encriptedPwd = md5 ( $pwd );

				$areDifferentPwd = $valid_user->user_pwd != $encriptedPwd;

				if ($areDifferentPwd) {	
					$this->session->set_flashdata ( 'error', 'Contraseña errónea, Por favor inténtelo otra vez' );
				} else {
					
					$remember = set_value ( 'remember' );
					$isRememberChecked = $remember == 'on';
					
					if ($isRememberChecked) {
						$userCookie = $this->createUserCookie($valid_user);
						$this->input->set_cookie ( $userCookie );
					} else {
						$userSession = $this->createUserSession($valid_user);
						$this->session->set_userdata ( $userSession );
					}
				}
			}
		}
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
	
	public function logout() {
		delete_cookie ( 'bookcorner' );
		$this->session->sess_destroy ();
		
		redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
	}
	
	private function setSigninFormRules() {
		$this->form_validation->set_rules ( 'username', 'Usuario', 'required|alpha_numeric' );
		$this->form_validation->set_rules ( 'pwd', 'Contraseña', 'required' );
	}
	
	private function createUserCookie($user){
		$cookie = array (
				'name' => 'bookcorner',
				'value' => $user->user_nickname . '#' . $user->user_name . '#' . $user->user_surname,
				'expire' => time () + (86400 * 365),
				'path' => '/'
		);
		
		return $cookie;
	}
	
	private function createUserSession($user){
		$sessionData = array (
				'title' => 'bookcorner',
				'username' => $user->user_nickname,
				'name' => $user->user_name,
				'surname' => $user->user_surname
		);
		
		return $sessionData;
	}
}