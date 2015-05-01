<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Users_model extends CI_Model {
	
	 function check_valid_user() {
		//obtener datos del formulario
		$username = set_value('username');
		
		$userBean = R::findOne( 'user', ' user_nickname = ? ', [ $username ] );
		//$userBean = R::load( 'book', $id ); //reloads our book
		
		return $userBean;
	}
	
}