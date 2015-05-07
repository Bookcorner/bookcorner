<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Books_model extends CI_Model {
	
	function __construct() {
		parent::__construct ();
	}
	
	function searchBooks($bookname) {
		$booknameFormatted = $bookname.'%';
		$booksBeans = R::find( 'book', ' book_name LIKE :bookname ', [ 
				'bookname' => $booknameFormatted 
		] );
		return $booksBeans;
	}
}