<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbooks_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function getAllBooklistFromUser($userId) {
        $booksInList = R::getAll ( 
                'SELECT b.book_id, b.book_isbn, b.book_name, b.book_desc, b.book_img
	               FROM book_listbook lb, book b 
	               WHERE lb.listbook_id = (SELECT listbook_id FROM `user` WHERE user_id = :userId)
		              AND lb.book_id = b.book_id
                   ORDER BY book_name', [':userId' => $userId] );
        return $booksInList;
    }
}