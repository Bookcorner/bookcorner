<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Book extends CI_Controller {
    public function index() {
        $data ['title'] = 'Libros';
        $viewUri = 'books/main_book_content';
        
        $this->load->model ( 'books_model' );
        $data['books'] = $this->books_model->searchAllBooksOrderedByName();
        
        loadBasicViews ( $viewUri, $data );
    }
    public function showBooksSearched() {
        $books = $this->session->flashdata ( 'bookData' );
        $data ['title'] = 'Libros';
        
        if (empty ( $books )) {
            $data ['books'] = 'Ningún libro coincide con la búsqueda';
            $viewUri = 'books/no_books_found';
            loadBasicViews ( $viewUri, $data );
        } else {
            $data ['books'] = $books;
            $viewUri = 'books/list_of_books';
            loadBasicViews ( $viewUri, $data );
        }
    }
    
}