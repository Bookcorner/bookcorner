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
    public function updateBookState($val_id) {
        $bookstatus = $_POST ['value'];
        $this->load->model ( 'listbooks_model' );
        $this->listbooks_model->updateBookState ( $bookstatus, $val_id );
        
    }
    
    public function updateBookScore($val_id) {
        $bookscore = $_POST ['value'];
        $this->load->model ( 'listbooks_model' );
        $this->listbooks_model->updateBookScore( $bookscore, $val_id );
    }
    public function addBookToList($bookId){
        $sessionName = 'id';
        
        if (!check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signUpError', 'Debes Registrarte Primero' );
            redirect ( base_url (), 'refresh' );
        }
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'listbooks_model' );
        $listbook = $this->listbooks_model->getListbookFrom ($userId);
        $success = $this->listbooks_model->addBookToList( $bookId, $listbook );
        if ($success){
            $this->session->set_flashdata ( 'signUpSuccess', 'Libro añadido correctamente.' );            
        } else {
            $this->session->set_flashdata ( 'signUpFail', 'Problemas al añadir el libro.' );
        }
        redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
    }
    
}

    