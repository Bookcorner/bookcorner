<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Books_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchBooks($bookname) {
        $booknameFormatted = prepareForSearchableWord ( $bookname );
        $booksBeans = R::find ( 'book', ' book_name LIKE :bookname AND bookstate_id = :bookstatus ORDER BY book_name', [ 
                'bookname' => $booknameFormatted,
                'bookstatus' => 1
        ] );
        return $booksBeans;
    }
    function getBook($bookId) {
        $bookBean = R::findOne ( 'book', ' id = ? ', [
                $bookId
        ] );
        return $bookBean;
    }
    function getGenresBook($id) {
        $listOfGenres = R::getAll ('
                SELECT genrebook_name 
                FROM genrebook gb, book_genrebook bgb 
                WHERE bgb.book_id = ? AND bgb.genrebook_id = gb.id', [ $id ] );
        
        return $listOfGenres;
    }
    function getAuthorOfBook($bookId) {
        $authorOfBookId = R::findOne ( 'author_book', 'book_id = ?', [$bookId] ) -> author_id;
        $authorOfBookBean = R::findOne ( 'author', 'id = ?', [$authorOfBookId] );
        return $authorOfBookBean;
    }
    function getAllComments($bookId) {        
        $bookComments = R::getAll( '
                SELECT c.num_comment, c.text, c.date_publish, u.user_nickname, u.user_avatar
                FROM comment c, user u
                WHERE c.book_id = ? AND c.user_id = u.id
                ORDER BY c.num_comment ASC', [ $bookId ] );
        return $bookComments;
    }
    function searchAllBooksOrderedByName() {
        $booksBeans = R::find ( 'book', 'bookstate_id = :bookstatus ORDER BY book_name', [
                'bookstatus' => 1
        ] );
        return $booksBeans;
    }
    public function createBookTable_management() {
        try {
            $crud = new grocery_CRUD ();
            
            $crud->set_table ( 'book' );
            
            $crud->display_as ( 'bookstate_id', 'Estado Libro' );
            // $crud->display_as ( 'book_id', 'ID' );
            $crud->display_as ( 'book_name', 'Título Libro' );
            $crud->display_as ( 'book_desc', 'Descripción Libro' );
            $crud->display_as ( 'book_img', 'Imagen Libro' );
            
            $crud->set_subject ( 'Libros' );
            
            // $crud->set_field_upload ( 'file_url', 'assets/uploads/files' );
            $crud->set_crud_url_path ( site_url ( "admin/showBooksMasterTable" ), site_url ( "admin/showBooksMasterTable" ) );
            
            $crud->set_relation ( 'bookstate_id', 'bookstate', 'bookstate_name' );
            $crud->set_relation_n_n ( 'Autor', 'author_book', 'author', 'book_id', 'author_id', 'author_fullname' );
            $crud->set_relation_n_n ( 'Géneros', 'book_genrebook', 'genrebook', 'book_id', 'genrebook_id', 'genrebook_name' );
            
            $output = $crud->render ();
            
            return $output;
        } catch ( Exception $e ) {
            show_error ( $e->getMessage () );
        }
    }
    public function createNewBookAndAssociateWithAuthor($bookisbn, $bookname, $bookdesc, $bookimg, $genrebook ,$idAuthorOfTheBook){
        $pendingState = R::load('bookstate', 2);
        $author = R::load('author', $idAuthorOfTheBook);
    
        $newBook = R::Dispense('book');
        $newBook->book_isbn = $bookisbn;
        $newBook->book_name = $bookname;
        $newBook->book_desc = $bookdesc;
        $newBook->book_img = $bookimg;
    
        $pendingState->ownBookList [] = $newBook;
        $author->sharedBookList [] = $newBook;
        foreach ($genrebook as $genreId){
            $genre = R::load('genrebook', $genreId);
            $genre->sharedBookList [] = $newBook;
            R::store($genre);            
        }
        
        R::storeAll([$newBook]);
        R::store($pendingState);
        R::store($author);
    }
    public function countBooks() {
        $numOfBooks = R::count( 'book' );
        return $numOfBooks;
    }
    
    public function searchAllBooksPending() {
        $bookBean = R::getAll ( 'SELECT b.id, b.book_isbn, b.book_name, b.book_desc, b.book_img, a.author_fullname, a.id as author_id 
                                FROM book b, author a, author_book ab 
                                WHERE b.id = ab.book_id AND ab.author_id = a.id AND b.bookstate_id = 2');
        return $bookBean;
    }
    public function updateBookisbn($bookId, $newIsbn){
        $book = R::load('book', $bookId);
        $book->book_isbn = $newIsbn;
        R::store($book);
    }
    public function updateBookname($bookId, $newName){
        $book = R::load('book', $bookId);
        $book->book_name = $newName;
        R::store($book);
    }
    public function updateBookdesc($bookId, $newDescription){
        $book = R::load('book', $bookId);
        $book->book_desc = $newDescription;
        R::store($book);
    }
    public function setAvailableBook($bookId){
        $book = R::load('book', $bookId);
        $available = 1;
        $book->bookstate_id = $available;
        R::store($book);
    }
    public function setPendingBook($bookId){
        $book = R::load('book', $bookId);
        $pending = 2;
        $book->bookstate_id = $pending;
        R::store($book);
    }
    public function countBooksReports() {
        $number_of_books_pending = R::count ( 'book', 'bookstate_id = 2');
        return $number_of_books_pending;
    }
    public function getLastBooks() {
        $book = R::find('book', 'bookstate_id = :bookstate ORDER BY id DESC LIMIT 5', [
                'bookstate' => 1
        ]);
        return $book;
    }
}