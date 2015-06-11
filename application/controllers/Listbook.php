<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbook extends CI_Controller {
    public function showListBooks() {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            go_back();
        }
        
        $data ['title'] = 'Lista de libros';
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'Listbooks_model' );
        $listbookId = $this->Listbooks_model->getListbookFrom ( $userId );
        $data ['listbook_name'] = $this->Listbooks_model->getListbookName ( $listbookId );
        $data ['nickname'] = $this->session->userdata ( 'nickname' );
        $data ['books'] = $this->Listbooks_model->getAllBooklistFromUser ( $userId );
        
        $views = [ 
                'cabeceras' => [ 
                        'templates/cabeceras/cabecera_base',
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
        $this->load->model ( 'Listbooks_model' );
        $this->Listbooks_model->updateBookState ( $bookstatus, $val_id );
    }
    public function updateBookScore($val_id) {
        $bookscore = $_POST ['value'];
        $this->load->model ( 'Listbooks_model' );
        $this->Listbooks_model->updateBookScore ( $bookscore, $val_id );
    }
    public function updateBookNote($val_id) {
        $booknote = $_POST ['value'];
        $this->load->model ( 'Listbooks_model' );
        $this->Listbooks_model->updateBookNote ( $booknote, $val_id );
    }
    public function removeBookFromList() {
        $bookId = $this->uri->segment(2);
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            go_back();
        }
        
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'Listbooks_model' );
        $listbook_id = $this->Listbooks_model->getListbookFrom ( $userId );
        
        $isBookAlreadyInList = $this->Listbooks_model->getBookFromListbook ( $bookId, $listbook_id );
        
        if (!$isBookAlreadyInList) {
            $this->session->set_flashdata ( 'bookNotAdded', bookNotAddedErrorMsg () );
            go_back();
        }
        
        $this->load->model ( 'books_model' );
        $existBook = $this->books_model->getBook ( $bookId );
        
        if (!$existBook) {
            $this->session->set_flashdata ( 'bookAlreadyAdded', bookNotExistErrorMsg () );
            go_back();
        }
        
        $success = $this->Listbooks_model->removeBookFromList ( $bookId, $listbook_id );
        $this->session->set_flashdata ( 'bookRemovedSuccess', bookRemovedSuccessMsg () );
        go_back();
        
    }
    public function addBookToList() {
        $bookId = $this->uri->segment(2);
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url('libros'), 'refresh' );
        }
        
        $userId = $this->session->userdata ( $sessionName );
        $this->load->model ( 'Listbooks_model' );
        $listbook_id = $this->Listbooks_model->getListbookFrom ( $userId );
        
        $isBookAlreadyInList = $this->Listbooks_model->getBookFromListbook ( $bookId, $listbook_id );
        
        if ($isBookAlreadyInList) {
            $this->session->set_flashdata ( 'bookAlreadyAdded', getBookAlreadyAddedErrorMsg () );
            go_back();
        }
        $this->load->model ( 'books_model' );
        $existBook = $this->books_model->getBook ( $bookId );
        
        if (!$existBook) {
            $this->session->set_flashdata ( 'bookAlreadyAdded', bookNotExistErrorMsg () );
            go_back();
        }
        
        $success = $this->Listbooks_model->addBookToList ( $bookId, $listbook_id );
        $this->session->set_flashdata ( 'bookAddedSuccess', getBookAddedSuccessMsg () );
        redirect ( base_url('lista-libros'), 'refresh' );
    }
}

    