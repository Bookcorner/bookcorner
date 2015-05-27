<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
    public function index() {
    	$data['title'] = 'Admin';
    	$templates = loadBasicViews('templates/crud/read', $data);
    	
    	if (!$templates) {
    	    $this->session->set_flashdata ( 'signUpError', 'No tiene permiso para acceder' );
    	    redirect ( base_url (), 'refresh' );
    	}
    	
    }
}