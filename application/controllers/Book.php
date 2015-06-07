<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Book extends CI_Controller {
    public function index() {
        $data ['title'] = 'Libros';
        
        $this->load->model ( 'books_model' );
        $data['books'] = $this->books_model->searchAllBooksOrderedByName();
        
        $viewUri = 'books/main_book_content';
        loadBasicViews ( $viewUri, $data );
    }
    public function showBooksSearched() {
        $searchName = prepareForSearchableWord($this->uri->segment(2));
        
        $this->load->model('books_model');
        $books = $this->books_model->searchBooks ( $searchName );
        
        $data ['title'] = 'Libros';
        
        if (empty ( $books )) {
            $viewUri = 'books/no_books_found';
            loadBasicViews ( $viewUri, $data );
        } else {
            $data ['books'] = $books;
            $viewUri = 'books/list_of_books';
            loadBasicViews ( $viewUri, $data );
        }
    }
    
    public function showBook() {
        $id_of_book = $this->uri->segment(2);
        $this->load->model( 'Books_model' );
        $this->load->model( 'Listbooks_model' );
        
        $book = $this->Books_model->getBook($id_of_book);
        $user_id = $this->session->userdata ( 'id' );
        
        $data ['title'] = $book->book_name;
        $data ['book'] = $book;
        
        $isBookAlreadyInList = $this->Listbooks_model->getBookFromListbook ( $id_of_book, $user_id );
        
        $data ['author'] = $this->Books_model->getAuthorOfBook($id_of_book);
        
        $data ['bookInList'] = false;
        
        if ($isBookAlreadyInList) {
            $data ['bookInList'] = true;
        }
        
        $viewUri = 'books/info_book';
        loadBasicViews ( $viewUri, $data );
    }  
}