<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class User extends CI_Controller {
    public function showUserInfo(){
        $this->load->model('users_model');
        $data['title'] = 'Información Usuarios';
        $data['userinfo'] = $this->users_model->getUsersInfo();
        $this->load->view('templates/cabeceras/cabecera_usuario');
        $this->load->view('user/user_info');
    }
}
