<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Author extends CI_Controller {
    public function index() {
        $data ['title'] = 'Autores';
        $viewUri = 'authors/main_author_content';
        
        $this->load->model ( 'Authors_model' );
        $data['authors'] = $this->Authors_model->searchAllAuthorsOrderedByName();
        
        loadBasicViews ( $viewUri, $data );
    }
    public function showAuthorsSearched() {
        $searchName = prepareForSearchableWord($this->uri->segment(2));

        $this->load->model ( 'Authors_model' );
        $authors = $this->Authors_model->searchAuthors ( $searchName );
        
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
    
    public function showAuthor() {
        $data ['title'] = 'Se sacara de la bbdd';
        $this->load->model ( 'Authors_model' );
        
        $id_of_author = $this->uri->segment(2);
        
        $viewUri = 'authors/info_author';
        loadBasicViews ( $viewUri, $data );
    }
    public function updateAuthorname($authorId){
        $newAuthorName = $_POST['value'];
        $this->load->model('Authors_model');
        $this->Authors_model->updateAuthorname($authorId, $newAuthorName);
    }
    public function updateAuthordesc($authorId){
        $newAuthorDesc = $_POST['value'];
        $this->load->model('Authors_model');
        $this->Authors_model->updateAuthordesc($authorId, $newAuthorDesc);
    }
    public function setAuthorAvailable(){
        $authorId = $this->uri->segment(2);
        $this->load->model('Authors_model');
        $this->Authors_model->setAvailableAuthor($authorId);
        $this->session->set_flashdata ( 'verifySuccess', getVerifySuccessMsg () );
        redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );   
    }
}