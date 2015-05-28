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
        R::exec ( 'UPDATE valuation SET val_estado_libro = :bookstatus WHERE val_id = :id', [ 
                'bookstatus' => $bookstatus,
                'id' => $val_id 
        ] );
    }
    function updateBookScore($bookscore, $val_id) {
        R::exec ( 'UPDATE valuation SET val_puntuacion = :bookscore WHERE val_id = :id', [ 
                'bookscore' => $bookscore,
                'id' => $val_id 
        ] );
    }
    function getListbookFrom($userId) {
        R::load ( 'user', $userId );
        $listbook_id = R::exec ( 'SELECT listbook_id FROM user WHERE user_id = :user_id', [ 
                'user_id' => $userId 
        ] );
        return $listbook_id;
    }
    function addBookToList($book_id, $listbook_id) {
        R::begin ();
        $isBookCreated = false;
        
        try {
            $valuation = $this->createDefaultValuationRow();

            $book = R::load ( 'book', $book_id );
            $listbook = R::load ( 'listbook', $listbook_id );

            $this->makeBookAndListbookRelations($book, $listbook, $valuation);
            
            $this->storeBookListAdded($book, $listbook, $valuation);
            R::commit();
            $isBookCreated = true;
            return $isBookCreated;
        } catch ( Exception $e ) {
            R::rollback ();
            $isBookCreated = false;
            return $isBookCreated;
        }
    }
    private function getLastValId() {
        $lastValId = R::count ( 'valuation' ) + 1;
        return $lastValId;
    }
    private function createDefaultValuationRow(){
        $valuation = R::Dispense ( 'valuation' );
        $valuation->val_id = $this->getLastValId ();
        $valuation->val_puntuacion = 11;
        $valuation->val_nota_libro = 'Introduce una nota';
        $valuation->val_estado_libro = 2;
        return $valuation;
    }
    private function makeBookAndListbookRelations($book, $listbook, $valuation){
        $listbook->ownValuationList [] = $valuation;
        $book->ownValuationList [] = $valuation;
        $book->sharedListbookList [] = $listbook;
    }
    private function storeBookListAdded($book, $listbook, $valuation){
        R::store ( $listbook );
        R::store ( $valuation );
        
        R::storeAll ( [
                $book
        ] );
    }
    function getBookFromListbook($book_id, $listbook_id){
        $book = R::findOne('book_listbook', 'WHERE listbook_id = :listbook_id AND book_id = :book_id', [
                'listbook_id' => $listbook_id,
                'book_id' => $book_id
        ]);
        return $book;
    }
}