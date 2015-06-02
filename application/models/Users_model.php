<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Users_model extends CI_Model {
    public function __construct() {
        parent::__construct ();
    }
    public function check_valid_user($username) {
        $userBean = R::findOne ( 'user', ' user_nickname = ? ', [ 
                $username 
        ] );
        
        if ($userBean ['userstatus_id'] == 2) {
            return 'inactive';
        } else if ($userBean ['userstatus_id'] == 3) {
            return 'banned';
        }
        
        return $userBean;
    }
    function getUserInfo($userId) {
        $userBean = R::findOne ( 'user', ' id = ? ', [ 
                $userId 
        ] );
        return $userBean;
    }
    function check_exist_user($username, $email) {
        $countUser = R::count ( 'user', ' user_nickname = ? ', [ 
                $username 
        ] );
        
        if ($countUser != 0) {
            return 1;   //nickname in use
        }
        
        $countUser = R::count ( 'user', ' user_email = ? ', [ 
                $email 
        ] );
        
        if ($countUser != 0) {
            return 2;   //email in use
        }
        
        return 0;   //User exist
    }
    public function getAllModerators() {
        $mod_users = R::find ( 'user', 'userrole_id = 2' );
        return $mod_users;
    }
    public function getAllAdministrators() {
        $admin_users = R::find ( 'user', 'userrole_id = 3' );
        return $admin_users;
    }
    function saveUser($userBean) {
        $id = R::store ( $userBean );
        $userbean = R::load ( 'user', $id );
        
        $username = $userbean->user_nickname;
        
        $listbookNewUser = R::Dispense ( 'listbook' );
        $listbookNewUser->listbook_id = $id;
        $listbookNewUser->listbook_name = "Listbook of $username";
        $userbean->user_id = $id;
        
        $listbookNewUser->ownUserList [] = $userbean;
        R::store ( $userbean );
        R::store ( $listbookNewUser );
    }
    function getRandomString() {
        $this->load->helper ( 'string' );
        
        $validation = '';
        $loop = true;
        
        while ( $loop ) {
            $validation = random_string ( 'alnum', 24 );
            $bean = R::findOne ( 'user', ' user_validation = ? ', [ 
                    $validation 
            ] );
            
            if ($bean == null) {
                $loop = false;
            }
        }
        
        return $validation;
    }
    function activateUser($string) {
        $userBean = R::findOne ( 'user', ' user_validation = ? ', [ 
                $string 
        ] );
        
        if ($userBean == null) {
            $this->session->set_flashdata ( 'signUpError', 'No corresponde la clave de validación' );
        } else {
            if ($userBean->userstatus_id == 2) {
                $userBean->userstatus_id = 1;
                R::store ( $userBean );
                $this->session->set_flashdata ( 'ok', 'Usuario activado correctamente' );
            } else if ($userBean->userstatus_id == 1) {
                $this->session->set_flashdata ( 'signUpError', 'El usuario ya estaba activado' );
            } else if ($userBean->userstatus_id == 3) {
                $this->session->set_flashdata ( 'signUpError', 'El usuario está baneado, no puede activarlo' );
            }
        }
    }
    function cancelUser($string) {
        $userBean = R::findOne ( 'user', ' user_validation = ? ', [ 
                $string 
        ] );
        
        if ($userBean == null) {
            $this->session->set_flashdata ( 'signUpError', 'No corresponde la clave de validación' );
        } else {
            if ($userBean->userstatus_id == 2) {
                $id = $userBean->id;
                $userList = R::findOne ( 'listbook', ' id = ? ', [ 
                        $id 
                ] );
                
                R::trash ( $userBean );
                R::trash ( $userList );
                $this->session->set_flashdata ( 'ok', 'Registro cancelado correctamente' );
            } else if ($userBean->userstatus_id == 1) {
                $this->session->set_flashdata ( 'signUpError', 'El usuario ya estaba activado' );
            } else if ($userBean->userstatus_id == 3) {
                $this->session->set_flashdata ( 'signUpError', 'El usuario está baneado, no puede borrarlo' );
            }
        }
    }
}