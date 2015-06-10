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
        $contentURI = 'votes/showVotes';
        loadBasicViews($contentURI, $data);
    }
    
}

    