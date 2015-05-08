<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Book extends CI_Controller {
    public function __construct() {
        parent::__construct ();
        
        $this->load->database ();
        $this->load->helper ( 'url' );
        
        $this->load->library ( 'grocery_CRUD' );
    }
    public function index() {
        $data ['title'] = 'Libros';
        $viewUri = 'books/main_book_content';
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
    public function bookscrud() {
        try {
            $crud = new grocery_CRUD ();
            
            $crud->set_table ( 'book' );
            $crud->set_subject ( 'Libros' );
            $crud->required_fields ( 'book_id' );
            $crud->columns ( 'book_id', 'book_isbn', 'book_name', 'book_desc', 'book_img' );
            
            $output = $crud->render ();
            $this->load->view ( 'books/booksCRUD', $output );
        } catch ( Exception $e ) {
            show_error ( $e->getMessage () . ' --- ' . $e->getTraceAsString () );
        }
    }
}