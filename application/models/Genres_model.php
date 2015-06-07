<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Genres_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function getAllGenres() {
        $genres = R::find ( 'genrebook', 'ORDER BY genrebook_name');
        return $genres;
    }
}