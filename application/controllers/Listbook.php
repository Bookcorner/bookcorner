<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbook extends CI_Controller {
    public function showListBooks() {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg() );
            redirect ( base_url (), 'refresh' );
        }
        
        $data ['title'] = 'Lista de libros';
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'listbooks_model' );
        $listbookId = $this->listbooks_model->getListbookFrom ( $userId );
        $data['listbook_name'] = $this->listbooks_model->getListbookName($listbookId);
        $data['nickname'] = $this->session->userdata ( 'nickname' );
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
        $this->listbooks_model->updateBookScore ( $bookscore, $val_id );
    }
    public function updateBookNote($val_id) {
        $booknote = $_POST ['value'];
        $this->load->model ( 'listbooks_model' );
        $this->listbooks_model->updateBookNote ( $booknote, $val_id );
    }
    public function addBookToList($bookId) {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg() );
            redirect ( base_url (), 'refresh' );
        }
        
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'listbooks_model' );
        $listbook_id = $this->listbooks_model->getListbookFrom ( $userId );
        
        $isBookAlreadyInList = $this->listbooks_model->getBookFromListbook ( $bookId, $listbook_id );
        
        if ($isBookAlreadyInList) {
            $this->session->set_flashdata ( 'bookAlreadyAdded', getBookAlreadyAddedErrorMsg() );
            redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
        }
        
        $success = $this->listbooks_model->addBookToList ( $bookId, $listbook_id );
        $this->session->set_flashdata ( 'bookAddedSuccess', getBookAddedSuccessMsg() );
        redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
    }
}

    