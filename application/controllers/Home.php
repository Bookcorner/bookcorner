<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
	public function index() {
		$data['title'] = 'Home';
		$this->load->view ( 'templates/cabecera', $data);
		$this->load->view ( 'templates/menu_login' );
		$this->load->view ( 'templates/end' );
	}
}