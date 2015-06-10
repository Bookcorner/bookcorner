<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Book extends CI_Controller {
    public function index() {
        $data ['title'] = 'Libros';
        
        $this->load->model ( 'books_model' );
        $data['books'] = $this->books_model->searchAllBooksOrderedByName();
        $data ['section'] = 'libros';
        
        $viewUri = 'books/main_book_content';
        loadBasicViews ( $viewUri, $data );
    }
    public function showBooksSearched() {
        $searchName = prepareForSearchableWord(quitDash($this->uri->segment(2)));
        
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
        $name_of_book = quitDash($this->uri->segment(2));
        $this->load->model( 'Books_model' );
        $this->load->model( 'Listbooks_model' );
        
        $book = $this->Books_model->getBookByName($name_of_book);
        $id_of_book = $book->id;
        $comments = $this->Books_model->getAllComments($book->id);
        
        $user_id = $this->session->userdata ( 'id' );
        
        if (!$book) {
            redirect ( 'busqueda-libros/'.$name_of_book );
        }
        
        $data ['title'] = $book->book_name;
        $data ['section'] = 'libros';
        $data ['book'] = $book;
        $data ['comments'] = $comments;
        $data ['genres'] = $this->Books_model->getGenresBook($id_of_book);
        
        $isBookAlreadyInList = $this->Listbooks_model->getBookFromListbook ( $id_of_book, $user_id );
        
        $data ['author'] = $this->Books_model->getAuthorOfBook($id_of_book);
        
        $data ['bookInList'] = false;
        
        if ($isBookAlreadyInList) {
            $data ['bookInList'] = true;
        }
        
        $viewUri = 'books/info_book';
        loadBasicViews ( $viewUri, $data );
    }
    public function addBookComment() {
        
        if ( empty($_POST) ){
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect(base_url(),'refresh');
        }
        
        $data['comment'] = $_POST['comment'];
        $data['userId'] = $_POST['userId'];
        $data['bookId'] = $_POST['bookId'];
        
        $this->load->model('Books_model');
        $this->Books_model->addComment($data);
        
        redirect($_SERVER['HTTP_REFERER'] ,'refresh');
    }
    public function setBookAvailable(){
        $bookId = $this->uri->segment(2);
        $this->load->model('Books_model');
        $this->Books_model->setAvailableBook($bookId);
        $this->session->set_flashdata ( 'verifySuccess', getVerifySuccessMsg () );
        redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
    }
    private function updateBookisbn($bookId){
        $newIsbn = $_POST['value'];
        $this->load->model('Books_model');
        $this->Books_model->updateBookisbn($bookId, $newIsbn);
    }
    private function updateBookname($bookId){
        $newName = $_POST['value'];
        $this->load->model('Books_model');
        $this->Books_model->updateBookname($bookId, $newName);
    }
    private function updateBookdesc($bookId){
        $newDesc = $_POST['value'];
        $this->load->model('Books_model');
        $this->Books_model->updateBookdesc($bookId, $newDesc);
    }    
}
