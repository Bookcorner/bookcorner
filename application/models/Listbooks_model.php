<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbooks_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function getAllBooklistFromUser($userId) {
        $booksInList = R::getAll ( 
                'SELECT b.book_id, b.book_isbn, b.book_name, v.val_puntuacion, v.val_nota_libro, v.val_estado_libro, v.val_id
                    FROM book_listbook lb, book b, valuation v 
                    WHERE lb.listbook_id = (SELECT listbook_id FROM `user` WHERE user_id = :userId)
	                   AND lb.book_id = b.book_id
                       AND v.book_id = b.book_id
                       AND v.listbook_id = (SELECT listbook_id FROM `user` WHERE user_id = :userId)
                    ORDER BY book_name', [':userId' => $userId] );
        return $booksInList;
    }
}