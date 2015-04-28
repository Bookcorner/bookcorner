<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	public function index() {
		$data['title'] = 'Home';
		$this->load->view ( 'templates/cabeceras/cabecera_base', $data);
		$this->load->view ( 'templates/menus/menu_login' );
		$this->load->view ( 'templates/end' );
	}
}