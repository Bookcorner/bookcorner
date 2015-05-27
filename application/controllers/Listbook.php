<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbook extends CI_Controller {
    public function showListBooks() {
        $userId;
        $sessionName = 'id';
        
        if (check_session_exist ( $sessionName )) {
            $userId = $this->session->userdata ( $sessionName );
        } else {
            $this->session->set_flashdata ( 'signUpError', 'No tiene permiso para acceder' );
            redirect ( base_url (), 'refresh' );
        }
        
        $this->load->model ( 'listbooks_model' );
        $data ['title'] = 'Lista de libros';
        $data ['books'] = $this->listbooks_model->getAllBooklistFromUser ( $userId );
        
        $views = [ 
                'cabeceras' => [ 
                        'templates/cabeceras/cabecera_base',
                        'templates/cabeceras/cabecera_usuario',
                        'templates/cabeceras/cabecera_popup',
                        'templates/cabeceras/cabecera_xeditable' 
                ],
                'contenidos' => [ 
                        'lists/all_listbook' 
                ],
                'footer' => 'templates/footers/base_footer' 
        ];
        
        loadCustomViews ( $views, $data );
    }
    public function updateState($val_id) {
        $bookstatus = $_POST ['value'];
        $this->load->model ( 'listbooks_model' );
        $result = $this->listbooks_model->updateState ( $bookstatus, $val_id );
    }
}

    