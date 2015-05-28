<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbooks_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function getAllBooklistFromUser($userId) {
        $booksInList = R::getAll ( 'SELECT b.book_id, b.book_isbn, b.book_name, v.val_puntuacion, v.val_nota_libro, v.val_estado_libro, v.val_id, v.id
                    FROM book_listbook lb, book b, valuation v 
                    WHERE lb.listbook_id = (SELECT listbook_id FROM `user` WHERE user_id = :userId)
	                   AND lb.book_id = b.book_id
                       AND v.book_id = b.book_id
                       AND v.listbook_id = (SELECT listbook_id FROM `user` WHERE user_id = :userId)
                    ORDER BY book_name', [ 
                ':userId' => $userId 
        ] );
        return $booksInList;
    }
    function updateBookState($bookstatus, $val_id) {
        R::exec( 'UPDATE valuation SET val_estado_libro = :bookstatus WHERE val_id = :id', [
                'bookstatus' => $bookstatus, 
                'id' => $val_id
        ] );
    }
    function updateBookScore($bookscore, $val_id) {
        R::exec( 'UPDATE valuation SET val_puntuacion = :bookscore WHERE val_id = :id', [
                'bookscore' => $bookscore,
                'id' => $val_id
        ] );
    }
    function addBookToList($book_id, $listbook){
        $valuation = R::Dispense('valuation');
        $valuation->val_id = getLastValId();
        $valuation->val_puntuacion = 11;
        $valuation->val_nota_libro = 'Introduce una nota';
        $valuation->val_estado_libro = 2;
        
        $book = R::load('book', $book_id);
        
        $listbook->ownValuationList [] = $valuation;
        $book->ownValuationList [] = $valuation;
        $book->sharedListbookList [] = $listbook;
        
        R::store ($valuation);
        R::store ($listbook);
        R::store ($book);
    }
    
    private function getLastValId(){
    }
}