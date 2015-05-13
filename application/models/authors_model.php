<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Authors_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchAuthors($authorname) {
        $authorNameFormatted = prepareForSearchableWord ( $authorname );
        $authorsBean = R::find ( 'author', ' author_fullname LIKE :authorname ', [ 
                'authorname' => $authorNameFormatted 
        ] );
        return $authorsBean;
    }
    
    function searchAllAuthors() {
        $authorsBeans = R::find ( 'author' );
        return $authorsBeans;
    }
    
}