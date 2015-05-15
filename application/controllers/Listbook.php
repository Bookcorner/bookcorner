<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbook extends CI_Controller {
    public function showListBooks() {
        $userId;
        
        $cookieName = 'bookcorner';
        $sessionName = 'id';
        
        if (check_cookie_exist ($cookieName)) {
            $cookieData = explode ( '#', $this->input->cookie ( $cookieName ) );
            $userId = $cookieData [0];
        }
        
        if (check_session_exist ($sessionName)) {
            $userId = $this->session->userdata ( $sessionName );
        }
        
        $this->load->model ( 'listbooks_model' );
        $data ['title'] = 'Lista de libros';
        $data ['books'] = $this->listbooks_model->getAllBooklistFromUser ( $userId );
        $contentURI = 'lists/all_listbook';
        loadBasicViews ( $contentURI, $data );
    }
}

    