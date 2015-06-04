<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Listbooks_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function getAllBooklistFromUser($userId) {
        $booksInList = R::getAll ( 'SELECT b.book_isbn, b.book_name, v.val_estado_libro, v.val_puntuacion, v.val_nota_libro, v.id, v.book_id
                    FROM book_listbook lb, book b, valuation v 
                    WHERE lb.listbook_id = (SELECT listbook_id FROM `user` WHERE id = :userId)
	                   AND lb.book_id = b.id
                       AND v.book_id = b.id
                       AND v.listbook_id = (SELECT listbook_id FROM `user` WHERE id = :userId)
                    ORDER BY book_name', [ 
                ':userId' => $userId 
        ] );
        return $booksInList;
    }
    function updateBookState($bookstatus, $val_id) {
        R::exec ( 'UPDATE valuation SET val_estado_libro = :bookstatus WHERE id = :id', [ 
                'bookstatus' => $bookstatus,
                'id' => $val_id 
        ] );
    }
    function updateBookScore($bookscore, $val_id) {
        R::exec ( 'UPDATE valuation SET val_puntuacion = :bookscore WHERE id = :id', [ 
                'bookscore' => $bookscore,
                'id' => $val_id 
        ] );
    }
    function updateBookNote($booknote, $val_id) {
        R::exec ( 'UPDATE valuation SET val_nota_libro = :booknote WHERE id = :id', [ 
                'booknote' => $booknote,
                'id' => $val_id 
        ] );
    }
    function getListbookFrom($userId) {
        $user = R::load ( 'user', $userId );
        $listbook_id = $user->listbook_id;
        return $listbook_id;
    }
    function addBookToList($book_id, $listbook_id) {
        R::begin ();
        $isBookCreated = false;
        
        try {
            $valuation = $this->createDefaultValuationRow ();
            
            $book = R::load ( 'book', $book_id );
            $listbook = R::load ( 'listbook', $listbook_id );
            
            $this->makeBookAndListbookRelations ( $book, $listbook, $valuation );
            
            $this->storeBookListAdded ( $book, $listbook, $valuation );
            R::commit ();
            $isBookCreated = true;
            return $isBookCreated;
        } catch ( Exception $e ) {
            R::rollback ();
            $isBookCreated = false;
            return $isBookCreated;
        }
    }
    function removeBookFromList($book_id, $listbook_id) {
        $bookFromlist = $book = R::findOne ( 'book_listbook', 'WHERE listbook_id = :listbook_id AND book_id = :book_id', [ 
                'listbook_id' => $listbook_id,
                'book_id' => $book_id 
        ] );
        R::trash ( $bookFromlist );
        
        $bookValuation = R::findOne ( 'valuation', 'WHERE listbook_id = :listbook_id AND book_id = :book_id', [ 
                'listbook_id' => $listbook_id,
                'book_id' => $book_id 
        ] );
        
        R::trash ( $bookValuation );
    }
    private function createDefaultValuationRow() {
        $valuation = R::Dispense ( 'valuation' );
        $valuation->val_puntuacion = 11;
        $valuation->val_nota_libro = 'Introduce una nota';
        $valuation->val_estado_libro = 2;
        return $valuation;
    }
    private function makeBookAndListbookRelations($book, $listbook, $valuation) {
        $listbook->ownValuationList [] = $valuation;
        $book->ownValuationList [] = $valuation;
        $book->sharedListbookList [] = $listbook;
    }
    private function storeBookListAdded($book, $listbook, $valuation) {
        R::store ( $listbook );
        R::store ( $valuation );
        
        R::storeAll ( [ 
                $book 
        ] );
    }
    function getBookFromListbook($book_id, $listbook_id) {
        $book = R::findOne ( 'book_listbook', 'WHERE listbook_id = :listbook_id AND book_id = :book_id', [ 
                'listbook_id' => $listbook_id,
                'book_id' => $book_id 
        ] );
        return $book;
    }
    function getListbookName($listbookId) {
        $listbookBean = R::load ( 'listbook', $listbookId );
        return $listbookBean->listbook_name;
    }
    function updateListbooknameFromUser($userId, $listbookName) {
        $user = R::load ( 'user', $userId );
        $userId = $user->listbook_id;
        $listbook = R::load ( 'listbook', $userId );
        $listbook->listbook_name = 'Lista de ' . $listbookName;
        R::store ( $listbook );
    }
    function createListbookForUser($userId, $listbookName) {
        $user = R::load ( 'user', $userId );
        $listbook = R::Dispense ( 'listbook' );
        $listbook->listbook_name = 'Lista de ' . $listbookName;
        $listbook->ownUserList [] = $user;
        R::store ( $listbook );
    }
}