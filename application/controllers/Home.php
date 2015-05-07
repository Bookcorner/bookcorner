<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	public function index() {
		$data ['title'] = 'Home';
		$this->loadViews ( $data );
	}
	
	private function loadViews($data) {
		$this->load->view ( 'templates/cabeceras/cabecera_base', $data );
		
		if (check_cookie_or_session_exist ()) {
			$this->load->view ( 'templates/menus/menu_logout' );
		} else {
			$this->load->view ( 'templates/menus/menu_login', $data );
		}
		$this->load->view ( 'home/main_content_view' );
		// $this->load->view ( 'templates/footer/footer' );
		$this->load->view ( 'templates/end' );
	}
}