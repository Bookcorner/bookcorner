<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    public function showUserInfo() {
        $cookieData = explode ( '#', $this->input->cookie ( 'bookcorner' ) );
        $userId = $cookieData [0];
        
        $this->load->model ( 'users_model' );
        $data ['userInfo'] = $this->users_model->getUserInfo ( $userId );
        $data ['title'] = 'Información de Usuario';
        
        $viewURI = 'user/user_info';
        $headerURI = 'templates/cabeceras/cabecera_usuario';
        loadBasicViewsAndCustomHeader ( $viewURI, $headerURI, $data );
    }
    public function showUserConfig() {
        $data ['title'] = 'Información de Usuario';
        
        $viewURI = 'user/user_config';
        loadBasicViews ( $viewURI, $data );
    }
}
