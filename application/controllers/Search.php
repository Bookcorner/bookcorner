<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Search extends CI_Controller {
    public function searchAuthorOrBook() {
        $typeOfSearch = set_value ( 'typeOfSearch' );
        $searchName = set_value ( 'searchName' );
        
        switch ($typeOfSearch) {
            case 'author' :
                $this->load->model ( 'authors_model' );
                $authors = $this->authors_model->searchAuthors ( $searchName );
                $this->passAuthorsToAuthorController ( $authors );
                break;
            case 'book' :
                $this->load->model ( 'books_model' );
                $books = $this->books_model->searchBooks ( $searchName );
                $this->passBooksToBookController ( $books );
                break;
        }
    }
    
    private function passAuthorsToAuthorController($authors) {
        $this->session->set_flashdata ( 'authorData', $authors );
        redirect ( 'busqueda-autores' );
    }
    private function passBooksToBookController($books) {
        $this->session->set_flashdata ( 'bookData', $books );
        redirect ( 'busqueda-libros' );
    }
}