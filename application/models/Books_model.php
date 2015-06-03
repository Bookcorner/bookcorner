<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Books_model extends CI_Model {
    function __construct() {
        parent::__construct ();
    }
    function searchBooks($bookname) {
        $booknameFormatted = prepareForSearchableWord ( $bookname );
        $booksBeans = R::find ( 'book', ' book_name LIKE :bookname ORDER BY book_name', [ 
                'bookname' => $booknameFormatted 
        ] );
        return $booksBeans;
    }
    function getBook($bookId) {
        $bookBean = R::findOne ( 'book', ' id = ? ', [
                $bookId
        ] );
        return $bookBean;
    }
    function searchAllBooksOrderedByName() {
        $booksBeans = R::find ( 'book', 'ORDER BY book_name' );
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
}