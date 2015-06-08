<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Error extends CI_Controller {
    public function index() {
        //$this->output->set_status_header ( '404' );
        $data ['title'] = 'No se encuentra';
        loadBasicViews ( 'custom_errors/not_found', $data );
    }
    public function showForbiddenError() {
        $data ['title'] = 'Acceso denegado';
        loadBasicViews ( 'custom_errors/forbidden', $data );
    }
    public function showNotFoundError() {
        $data ['title'] = 'No se encuentra';
        loadBasicViews ( 'custom_errors/not_found', $data );
    }
}
?>