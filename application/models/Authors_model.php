<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Authors_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchAuthors($authorname) {
        $authorNameFormatted = prepareForSearchableWord ( $authorname );
        $authorsBean = R::find ( 'author', ' author_fullname LIKE :authorname ORDER BY author_fullname', [ 
                'authorname' => $authorNameFormatted 
        ] );
        return $authorsBean;
    }
    function searchAllAuthorsOrderedByName() {
        $authorsBeans = R::find ( 'author', 'ORDER BY author_fullname' );
        return $authorsBeans;
    }
    
}