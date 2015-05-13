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
}