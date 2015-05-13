<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Home extends CI_Controller {
    public function index() {
        $data ['title'] = 'Home';
        $viewUri = 'home/main_content_view';
        loadBasicViews ( $viewUri, $data );
    }
    public function goToWhoAreWe() {
        $data ['title'] = 'Quienes Somos';
        $viewUri = 'static_pages/who_are_we';
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
    public function privacyPolicy() {
        $data ['title'] = 'Política de Privacidad';
        $viewUri = 'static_pages/privacy_policy';
        loadBasicViews ( $viewUri, $data );
    }
    public function copyright() {
        $data ['title'] = 'Copyright';
        $viewUri = 'static_pages/copyright';
        loadBasicViews ( $viewUri, $data );
    }
    public function legalInformation() {
        $data ['title'] = 'Información Legal';
        $viewUri = 'static_pages/legal_information';
        loadBasicViews ( $viewUri, $data );
    }
}