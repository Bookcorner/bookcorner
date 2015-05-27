<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
    public function index() {
    	$data['title'] = 'Admin';
    	loadBasicViews('templates/crud/read', $data);
    	
    	if (get_userrole() != 3) {
    	    $this->session->set_flashdata ( 'signUpError', 'No tiene permiso para acceder' );
    	    redirect ( base_url (), 'refresh' );
    	}
    	
    }
}