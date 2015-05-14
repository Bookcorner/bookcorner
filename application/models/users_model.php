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
        return $userBean;
    }
    
    function getUserInfo($userId) {
        $userBean = R::findOne ( 'user', ' user_id = ? ', [ 
                $userId
        ] );
        return $userBean;
    }
    
    function check_exist_user($username, $email) {
        $countUser = R::count( 'user', ' user_nickname = ? ', [ $username ] );
        
        if ($countUser != 0) {
            return 1;
        }
                
        $countUser = R::count( 'user', ' user_email = ? ', [ $email ] );
        
        if ($countUser != 0) {
            return 2;
        }
        
        return 0;
    }
    
}