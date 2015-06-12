<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Search extends CI_Controller {
    public function searchAuthorOrBook() {
        $typeOfSearch = set_value ( 'typeOfSearch' );
        $searchName = set_value ( 'searchName' );
        if (empty($searchName)){
            $searchName = "EmptyField";
        }
        
        switch ($typeOfSearch) {
            case 'author' :
                redirect ( 'busqueda-autores/'.filterQuitSpecChar($searchName) );
                break;
            case 'book' :
                redirect ( 'busqueda-libros/'.filterQuitSpecChar($searchName) );
                break;
        }
    }
}