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
    
}