<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
    public function presentation() {
        if (check_session_exist ( 'id' ) || (isset ( $_COOKIE ['cc_cookie_accept'] ) && $_COOKIE ['cc_cookie_accept'] == 'cc_cookie_accept')) {
            redirect ( base_url ( 'home' ), 'refresh' );
        } else {
            redirect ( base_url ( 'que-es-bookcorner' ), 'refresh' );
        }
    }
    public function index() {
        $data ['title'] = 'Home';
        $viewUri = 'home/main_content_view';
        $this->load->model ( 'Books_model' );
        $data ['books'] = $this->Books_model->getLastBooks ();
        $this->load->model ( 'Authors_model' );
        $data ['authors'] = $this->Authors_model->getLastAuthors ();
        $data ['popularbooks'] = $this->Books_model->getMostPopularBooks ();
        $data ['averagebooks'] = $this->Books_model->getMostPopularAVGBooks ();
        $data ['mostreadedbook'] = $this->Books_model->showMostReadedBook ();
        $data ['mostreadingbooks'] = $this->Books_model->showMostReadingBook ();
        $data ['mostabandonedbook'] = $this->Books_model->showMostAbandonedBook ();
        
        loadBasicViews ( $viewUri, $data );
    }
    public function goToWhoAreWe() {
        $data ['title'] = 'Quienes Somos';
        $viewUri = 'static_pages/who_are_we';
        $this->load->model ( 'users_model' );
        $data ['moderators'] = $this->users_model->getAllModerators ();
        $data ['administrators'] = $this->users_model->getAllAdministrators ();
        loadBasicViews ( $viewUri, $data );
    }
    public function goToWhatIs() {
        $data ['title'] = '¿Qué es Bookcorner?';
        $viewUri = 'static_pages/what_is';
        loadBasicViews ( $viewUri, $data );
    }
    public function goToContact() {
        $data ['title'] = 'Contacto';
        $viewUri = 'static_pages/contact';
        loadBasicViews ( $viewUri, $data );
    }
    public function legalInformation() {
        $data ['title'] = 'Información Legal';
        $viewUri = 'static_pages/legal_information';
        loadBasicViews ( $viewUri, $data );
    }
}