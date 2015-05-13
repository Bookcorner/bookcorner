<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbook extends CI_Controller {
    public function showListBooks() {
        if (check_cookie_exist ()) {
            $cookieData = explode ( '#', $this->input->cookie ( 'bookcorner' ) );
            $userId = $cookieData [0];
        }
        if (check_session_exist ()) {
            $userId = $this->session->userdata ( 'id' );
        }
        
        $this->load->model ( 'listbooks_model' );
        $data ['books'] = $this->listbooks_model->getAllBooklistFromUser ( $userId );
        $data ['title'] = 'Lista de libros';
        $contentURI = 'lists/all_listbook';
        loadBasicViews ( $contentURI, $data );
    }
}

    