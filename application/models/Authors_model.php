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
    function searchAllAuthorsOrderedByName() {
        $authorsBeans = R::find ( 'author', 'authorstate_id = :authorstate ORDER BY author_fullname', [
                'authorstate' => 1
        ] );
        return $authorsBeans;
    }
    function createNewAuthor($authorname, $authordesc, $authorimg) {
        $pendingState = R::load('authorstate', 2);
        
        $author = R::Dispense('author');
        $author->author_fullname = $authorname;
        $author->author_desc = $authordesc;
        $author->author_img = $authorimg;
        
        $pendingState->ownBookList [] = $author;
        
        R::store($pendingState);
        $id = R::store($author);
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
       $numOfAuthors = R::count( 'author' );
       return $numOfAuthors;
    }
    function updateAuthorname($authorId, $newName){
        $author = R::load('author', $authorId);
        $author->author_fullname = $newName;
        R::store($author);
    }
    function updateAuthordesc($authorId, $newDesc){
        $author = R::load('author', $authorId);
        $author->author_desc = $newDesc;
        R::store($author);
    }
    function setAvailableAuthor($authorId){
        $author = R::load('author', $authorId);
        $available = 1;
        $author->authorstate_id = $available;
        R::store($author);
    }
}