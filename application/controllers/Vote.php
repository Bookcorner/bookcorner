<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Vote extends CI_Controller {
    public function showTablesVotes() {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url (), 'refresh' );
        }
        
        $this->load->model('Books_model');
        $data['popularBooks'] = $this->Books_model->getAllPopularBooks();
        $data['averageBooks'] = $this->Books_model->getAllPopularAVGBooks();
        $data['title'] = 'Votaciones';
        $contentURI = 'votes/showVotes';
        loadBasicViews($contentURI, $data);
    }
    public function showAllPopularBooks() {
        $sessionName = 'id';
    
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url (), 'refresh' );
        }
    
        $this->load->model('Books_model');
        $data['popularBooks'] = $this->Books_model->getAllPopularBooks();
        $data['title'] = 'Puntuación total Libros';
        $contentURI = 'votes/showPopularVotes';
        loadBasicViews($contentURI, $data);
    }
    public function showAllPopularAVGBooks() {
        $sessionName = 'id';
    
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url (), 'refresh' );
        }
    
        $this->load->model('Books_model');
        $data['averageBooks'] = $this->Books_model->getAllPopularAVGBooks();
        $data['title'] = 'Puntuación Media Libros';
        $contentURI = 'votes/showPopularAVGVotes';
        loadBasicViews($contentURI, $data);
    }
    
    public function showAllStateBooks() {
        $sessionName = 'id';
    
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( base_url (), 'refresh' );
        }
    
        $this->load->model('Books_model');
        $data['stateBooks'] = $this->Books_model->getAllStatesBooks();
        $data['title'] = 'Estados de los libros';
        $contentURI = 'votes/showStateBooksVotes';
        loadBasicViews($contentURI, $data);
    }
}

    