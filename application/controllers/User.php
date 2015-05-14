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
    public function signup() {
        $this->form_validation->set_rules ( 'name', 'Nombre', 'required' );
        $this->form_validation->set_rules ( 'surname', 'Apellido', 'required' );
        $this->form_validation->set_rules ( 'user', 'Usuario', 'required' );
        $this->form_validation->set_rules ( 'pass', 'Contraseña', 'required' );
        $this->form_validation->set_rules ( 'repass', 'Confirmar Contraseña', 'required' );
        $this->form_validation->set_rules ( 'email', 'Email', 'required' );
        $this->form_validation->set_rules ( 'reemail', 'Email', 'required' );
        
        if ($this->form_validation->run () == true) {
            $this->load->model ( 'users_model' );
            
            $username = set_value ( 'user' );
            $email = set_value ( 'email' );
            
            $exist_user = $this->users_model->check_exist_user ( $username, $email );
            /*
             * 0 -> ok
             * 1 -> nickname in use
             * 2 -> email in use
             */
            
            if ($exist_user == 0) {
                $maxid = $this->users_model->lastid ();
                $id = $maxid + 1;
                
                $newUser = R::Dispense ( 'user' );
                $newUser->id = $id;
                $newUser->user_id = $id;
                $newUser->user_name = set_value ( 'name' );
                $newUser->user_surname = set_value ( 'surname' );
                $newUser->user_nickname = $username;
                $newUser->user_pwd = md5 ( set_value ( 'pass' ) );
                $newUser->user_email = $email;
                $newUser->user_avatar = 'basic.jpg'; // imagen basica
                $newUser->user_genre = 'M';
                $newUser->userrole_id = 1; // registrado, no es moderador ni admin
                $newUser->userstatus_id = 2; // inactivo, enviar correo de activacion
                
                $listbookNewUser = R::Dispense ( 'listbook' );
                $listbookNewUser->id = $id;
                $listbookNewUser->listbook_id = $id;
                $listbookNewUser->listbook_name = "Listbook of $username";
                
                $listbookNewUser->ownUserList [] = $newUser;
                
                R::store ( $newUser );
                R::store ( $listbookNewUser );
            } else if ($exist_user == 1) {
                $this->session->set_flashdata ( 'error', 'El nombre de usuario está en uso' );
            } else if ($exist_user == 2) {
                $this->session->set_flashdata ( 'error', 'El correo electrónico está en uso' );
            }
        }
        
        redirect ( base_url ( 'home' ), 'refresh' );
    }
}
