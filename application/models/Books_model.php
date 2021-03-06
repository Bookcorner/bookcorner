<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Books_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchBooks($bookname) {
        $booksBeans = R::find ( 'book', ' (book_name LIKE :bookname OR book_isbn LIKE :bookname) AND bookstate_id = :bookstatus ORDER BY book_name', [ 
                'bookname' => $bookname,
                'bookstatus' => 1
        ] );
        return $booksBeans;
    }
    function preventBookReported($bookisbn, $bookname) {
        $bookBean = R::findOne ( 'book', ' book_isbn = ? AND book_name = ?', [
                $bookisbn, $bookname
        ] );
        
        if (($bookBean != null) && (!empty($bookBean))) {
            $this->deleteBook($bookBean['id']);
        }
    }
    function getBook($bookId) {
        $bookBean = R::findOne ( 'book', ' id = ? ', [
                $bookId
        ] );
        return $bookBean;
    }
    function getBookByName($bookName) {
        $bookBean = R::findOne ( 'book', ' book_name = ? ', [
                $bookName
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
    function getBooklistFromUser($userId) {
        $booksInList = R::getAll ( '
                SELECT b.id
                FROM book_listbook lb, book b
                WHERE b.id = lb.book_id AND lb.listbook_id = ?', [ $userId ] );
        
        $booksList = array();        
        foreach($booksInList as $row) {
            array_push($booksList, $row['id']);
        }
        
        return $booksList;
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
    public function addComment($data) {        
        $comment = $data['comment'];
        $userId = $data['userId'];
        $bookId = $data['bookId'];
        
        $numCommentsOfBook = R::count( 'comment', ' book_id = ? ', [ $bookId ] );
        
        $newComment = R::dispense( 'comment' );
        $newComment->num_comment = ($numCommentsOfBook+1);
        $newComment->text = $comment;
        $newComment->date_publish = R::isoDateTime();
        $newComment->book_id = $bookId;
        $newComment->user_id = $userId;
        
        R::store($newComment);
        
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
    public function getMostPopularBooks() {
        $book = R::getAll('SELECT SUM(v.val_puntuacion) as total, b.book_name, b.book_img, b.id
                FROM valuation v, book b
                WHERE v.val_puntuacion <= 10 AND v.book_id = b.id 
                GROUP BY v.book_id
                ORDER BY total DESC
                LIMIT 5');
        return $book;
    }
    public function getAllPopularBooks() {
        $book = R::getAll('SELECT SUM(v.val_puntuacion) as total, b.book_name, b.book_img, b.id
                FROM valuation v, book b
                WHERE v.val_puntuacion <= 10 AND v.book_id = b.id
                GROUP BY v.book_id
                ORDER BY total DESC');
        return $book;
    } 
    public function getMostPopularAVGBooks(){
        $book = R::getAll('SELECT AVG(v.val_puntuacion) as total, b.book_name, b.book_img, b.id
                FROM valuation v, book b
                WHERE v.val_puntuacion <= 10 AND v.book_id = b.id
                GROUP BY v.book_id
                ORDER BY total DESC
                LIMIT 5');
        return $book;
    }
    public function getAllPopularAVGBooks(){
        $book = R::getAll('SELECT AVG(v.val_puntuacion) as total, COUNT(v.listbook_id) as n_usuarios, b.book_name, b.book_img, b.id
                FROM valuation v, book b
                WHERE v.val_puntuacion <= 10 AND v.book_id = b.id
                GROUP BY v.book_id
                ORDER BY total DESC');
        return $book;
    }
    public function deleteBook($bookId){
        $book = R::load('book', $bookId);
        
        $avatar = $book->book_img;
        $file = 'assets/images/books/' . $avatar;
        unlink ( $file );
        
        R::trash( $book );
    }
    public function showAllReadedBooks(){
        $readedState = 4;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :readedState
            GROUP BY book_id
            ORDER BY n_usuarios DESC', ['readedState' => $readedState]);
        return $book;
    }
    public function showAllReadingBooks(){
        $readingState = 1;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :readingState
            GROUP BY book_id
            ORDER BY n_usuarios DESC', ['readingState' => $readingState]);
        return $book;
    }
    public function showAllAbandonedBooks(){
        $abandonedState = 3;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :abandonedState
            GROUP BY book_id
            ORDER BY n_usuarios DESC', ['abandonedState' => $abandonedState]);
        return $book;
    }
    public function showMostReadedBook(){
        $readedState = 4;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :readedState
            GROUP BY book_id
            ORDER BY n_usuarios DESC
            LIMIT 1', ['readedState' => $readedState]);
        return $book;
    }
    public function showMostReadingBook(){
        $readingState = 1;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :readingState
            GROUP BY book_id
            ORDER BY n_usuarios DESC
            LIMIT 1', ['readingState' => $readingState]);
        return $book;
    }
    public function showMostAbandonedBook(){
        $abandonedState = 3;
        $book  = R::getAll('SELECT b.book_img, b.id, b.book_name, count(listbook_id) as n_usuarios
            FROM valuation v, book b
            WHERE v.book_id = b.id AND val_estado_libro = :abandonedState
            GROUP BY book_id
            ORDER BY n_usuarios DESC
            LIMIT 1', ['abandonedState' => $abandonedState]);
        return $book;
    }
}