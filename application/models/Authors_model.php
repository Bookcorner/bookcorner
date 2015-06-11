<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Authors_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchAuthors($authorname) {
        $authorNameFormatted = prepareForSearchableWord ( $authorname );
        $authorsBean = R::find ( 'author', ' author_fullname LIKE :authorname AND authorstate_id = :authorstate ORDER BY author_fullname', [ 
                'authorname' => $authorNameFormatted,
                'authorstate' => 1 
        ] );
        return $authorsBean;
    }
    function getAllBooksFromAuthor($authorId) {
        $listOfBooks = R::getAll ('SELECT * FROM author_book ab, book b WHERE ab.author_id = ? AND b.id = ab.book_id', [ $authorId ] );
        return $listOfBooks;
    }
    function getAuthor($authorId) {
        $authorBean = R::findOne ( 'author', ' id = ? ', [ 
                $authorId 
        ] );
        return $authorBean;
    }
    function getAuthorByName ( $authorName ) {
        $authorBean = R::findOne ( 'author', ' author_fullname = ? ', [
                $authorName
        ] );
        return $authorBean;
    }
    function searchAllAuthorsOrderedByName() {
        $authorsBeans = R::find ( 'author', 'authorstate_id = :authorstate ORDER BY author_fullname', [ 
                'authorstate' => 1 
        ] );
        return $authorsBeans;
    }
    function createNewAuthor($authorname, $authordesc, $authorimg) {
        $pendingState = R::load ( 'authorstate', 2 );
        
        $author = R::Dispense ( 'author' );
        $author->author_fullname = $authorname;
        $author->author_desc = $authordesc;
        $author->author_img = $authorimg;
        
        $pendingState->ownBookList [] = $author;
        
        R::store ( $pendingState );
        $id = R::store ( $author );
        return $id;
    }
    function searchAuthorsPending($authorname) {
        $authorNameFormatted = prepareForSearchableWord ( $authorname );
        $authorsBean = R::find ( 'author', ' author_fullname LIKE :authorname AND authorstate_id = :authorstate ORDER BY author_fullname', [ 
                'authorname' => $authorNameFormatted,
                'authorstate' => 2 
        ] );
        return $authorsBean;
    }
    function searchAllAuthorsPending() {
        $authorsBean = R::find ( 'author', 'authorstate_id = :authorstate ORDER BY author_fullname', [ 
                'authorstate' => 2 
        ] );
        return $authorsBean;
    }
    function countAuthors() {
        $numOfAuthors = R::count ( 'author' );
        return $numOfAuthors;
    }
    function updateAuthorname($authorId, $newName) {
        $author = R::load ( 'author', $authorId );
        $author->author_fullname = $newName;
        R::store ( $author );
    }
    function updateAuthordesc($authorId, $newDesc) {
        $author = R::load ( 'author', $authorId );
        $author->author_desc = $newDesc;
        R::store ( $author );
    }
    function setAvailableAuthor($authorId) {
        $author = R::load ( 'author', $authorId );
        $available = 1;
        $author->authorstate_id = $available;
        R::store ( $author );
    }
    function setAuthorPending($authorId) {
        $author = R::load ( 'author', $authorId );
        $pending = 2;
        $author->authorstate_id = $pending;
        R::store ( $author );
    }
    function countAuthorsReports() {
        $number_of_authors_pending = R::count ( 'author', 'authorstate_id = 2');
        return $number_of_authors_pending;
    }
    public function getLastAuthors() {
        $authors = R::find('author', 'authorstate_id = :authorstate ORDER BY id DESC LIMIT 5', [
                'authorstate' => 1
        ]);
        return $authors;
    }
    public function deleteAuthor($authorId){
        $author = R::load('author', $authorId);
        R::trash( $author );
    }
}