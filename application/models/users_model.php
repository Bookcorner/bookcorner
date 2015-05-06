<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Users_model extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	function check_valid_user($username) {
		$userBean = R::findOne ( 'user', ' user_nickname = ? ', [ 
				$username 
		] );
		return $userBean;
	}
}