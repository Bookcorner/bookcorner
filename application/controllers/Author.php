<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Author extends CI_Controller {
    public function index() {
        $data ['title'] = 'Autores';
        $viewUri = 'authors/main_author_content';
        
        $this->load->model ( 'authors_model' );
        $data['authors'] = $this->authors_model->searchAllAuthorsOrderedByName();
        
        loadBasicViews ( $viewUri, $data );
    }
    public function showAuthorsSearched() {
        $authors = $this->session->flashdata ( 'authorData' );
        $data ['title'] = 'Autores';
        
        if (empty ( $authors )) {
            $viewUri = 'authors/no_author_found';
            loadBasicViews ( $viewUri, $data );
        } else {
            $data ['authors'] = $authors;
            $viewUri = 'authors/list_of_authors';
            loadBasicViews ( $viewUri, $data );
        }
    }
}