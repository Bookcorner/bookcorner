<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	
	public function index() {
		$data ['title'] = 'Home';
		$this->load->view ( 'templates/cabeceras/cabecera_base', $data );
		
		
		if (check_cookie_session_exist()) {
			//$this->load->view ( 'templates/menus/menu_logout' );
		} else {
			$this->load->view ( 'templates/menus/menu_login', $data);
		}
		//$this->load->view ( 'templates/footer/footer' );		
		$this->load->view ( 'templates/end' );
		
	}
	
}