<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Users_model extends CI_Model {
    public function __construct() {
        parent::__construct ();
    }
    public function check_valid_user($string) {
        $userBean = R::findOne ('user', 'user_nickname = :nick OR user_email = :email', [ 
                'nick' => $string, 
                'email' => $string
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
    function getUserByNick($userNick) {
        $userBean = R::findOne ( 'user', ' user_nickname = ? ', [
                $userNick
        ] );
        return $userBean;
    }
    public function getAllModerators() {
        $mod_users = R::find ( 'user', 'userrole_id = 2' );
        return $mod_users;
    }
    public function getAllAdministrators() {
        $admin_users = R::find ( 'user', 'userrole_id = 3' );
        return $admin_users;
    }
    function check_username_exists($username) {
        $userBean = R::findLike ( 'user', [ 
                'user_nickname' => [ 
                        $username 
                ] 
        ] );
        return $userBean;
    }   
    function check_email_exists($email) {        
        $userBean = R::findOne ( 'user', ' user_email = ? ', [ $email ] );
        
        return $userBean;
    } 
    function update_username($username, $val_id) {
        R::exec ( 'UPDATE user SET user_nickname = :username WHERE id = :id', [ 
                'username' => $username,
                'id' => $val_id 
        ] );
    }    
    function update_email($email, $val_id) {
        R::exec ( 'UPDATE user SET user_email= :email WHERE id = :id', [ 
                'email' => $email,
                'id' => $val_id 
        ] );
    }
    function check_oldpass_matches($pass) {
        $userBean = R::findLike ( 'user', [ 
                'user_pwd' => [ 
                        $pass 
                ] 
        ] );
        return $userBean;
    }
    function update_pass($pass, $val_id) {
        R::exec ( 'UPDATE user SET user_pwd= :pwd WHERE id = :id', [ 
                'pwd' => $pass,
                'id' => $val_id 
        ] );
    }
    function generate_new_pass($userId) {
        $this->load->helper ( 'string' );        
        $pwd = random_string ( 'alnum', 10 );
        $pwdEncrypt = encrypt($pwd);
        
        R::exec ( 'UPDATE user SET user_pwd= :pwd WHERE id = :id', [
                'pwd' => $pwdEncrypt,
                'id' => $userId
        ] );
        
        return $pwd;
    }
    function check_exist_user($username, $email) {
        $countUser = R::count ( 'user', ' user_nickname = ? ', [ 
                $username 
        ] );
        
        if ($countUser != 0) {
            return 1; // nickname in use
        }
        
        $countUser = R::count ( 'user', ' user_email = ? ', [ 
                $email 
        ] );
        
        if ($countUser != 0) {
            return 2; // email in use
        }
        
        return 0; // User exist
    }
    function saveUser($userBean) {
        $id = R::store ( $userBean );
        $userbean = R::load ( 'user', $id );
        
        $username = $userbean->user_nickname;
        
        $listbookNewUser = R::Dispense ( 'listbook' );
        $listbookNewUser->listbook_name = "Lista de $username";
        
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
            return 0;
        } else {
            if ($userBean->userstatus_id == 2) {
                $userBean->userstatus_id = 1;
                R::store ( $userBean );
                return 2;
            } else if ($userBean->userstatus_id == 1) {
                return 1;
            } else if ($userBean->userstatus_id == 3) {
                return 3;
            }
        }
    }
    function updateAvatarName($userId, $newName) {
        $userBean = $this->getUserInfo ( $userId );
        $userBean->user_avatar = $newName;
        R::store ( $userBean );
    }
    function deleteAvatar($userId) {
        $userBean = $this->getUserInfo ( $userId );
        $avatar = $userBean->user_avatar;
        if ($avatar != 'basic.jpg') {
            $file = 'assets/images/users/' . $avatar;
            $do = unlink ( $file );
            if ($do) {
                return true;
            } else {
                return false;
            }
        }
    }
    function deleteUser($id) {
        $userBean = R::findOne ( 'user', ' id = ? ', [ 
                $id 
        ] );
        
        $userList = R::findOne ( 'listbook', ' id = ? ', [ 
                $id 
        ] );
        
        $avatar = $userBean->user_avatar;
        if ($avatar != 'basic.jpg') {
            $file = 'assets/images/users/' . $avatar;
            $do = unlink ( $file );
        }
        
        R::trash ( $userBean );
        R::trash ( $userList );
    }
    function cancelUser($string) {
        $userBean = R::findOne ( 'user', ' user_validation = ? ', [ 
                $string 
        ] );
        
        if ($userBean == null) {
            return 0;
        } else {
            if ($userBean->userstatus_id == 2) {
                $id = $userBean->id;
                $userList = R::findOne ( 'listbook', ' id = ? ', [ 
                        $id 
                ] );
                
                R::trash ( $userBean );
                R::trash ( $userList );
                return 2;
            } else if ($userBean->userstatus_id == 1) {
                return 1;
            } else if ($userBean->userstatus_id == 3) {
                return 3;
            }
        }
    }
    function countUsers() {
        $numOfUsers = R::count ( 'user' );
        return $numOfUsers;
    }
    function getPwd($userId){
        $user = R::load('user', $userId);
        $pwd = $user->user_pwd;
        return $pwd;
    }
}