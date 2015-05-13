<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    public function showUserInfo() {
        $this->load->model('users_model');
        $data['userinfo'] -> $this->users_model->getUserInfo();
        $viewURI = 'user/user_info';
        $headerURI = 'templates/cabeceras/cabecera_usuario';
        loadBasicViewsAndCustomHeader($viewURI, $headerURI, $data);
    }
}
