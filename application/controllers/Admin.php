<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
    public function index() {
        if (get_userrole () != 3) {
            $this->session->set_flashdata ( 'signUpError', 'No tiene permiso para acceder' );
            redirect ( base_url (), 'refresh' );
        }
        
        $data ['title'] = 'Administración';
        loadBasicViews ( 'admin/adminhome', $data );
    }
    public function showUsersMasterTable() {
        $crud = new grocery_CRUD ();
        
        $crud->set_table ( 'user' );
        
        $this->createUserAlias ( $crud );
        
        $crud->columns ( 'user_name', 'user_surname', 'user_nickname', 'user_email', 'user_avatar', 'user_genre', 'listbook_id', 'userrole_id', 'userstatus_id' );
        $crud->fields ( 'user_name', 'user_surname', 'user_nickname', 'user_pwd', 'user_email', 'user_avatar', 'user_genre', 'listbook_id', 'userrole_id', 'userstatus_id' );
        $this->createUserRules ( $crud );
        
        $crud->required_fields ( 'user_name', 'user_surname', 'user_pwd', 'user_validation', 'user_nickname', 'user_email', 'user_avatar', 'user_genre', 'listbook_id', 'userrole_id', 'userstatus_id' );
        
        $crud->set_field_upload ( 'user_avatar', 'assets/images/users' );
        $crud->set_subject ( 'Usuario' );
        
        $this->createUserRelations ( $crud );
        
        $crud->set_crud_url_path ( site_url ( strtolower ( __CLASS__ . "/" . __FUNCTION__ ) ), site_url ( strtolower ( __CLASS__ . "/showUsersMasterTable" ) ) );
        
        $data['title'] = 'Admin Usuarios';
        $data['output'] = $crud->render ();
        loadAdminView( 'admin/adminview', $data );
    }
    private function createUserRelations($crud) {
        $crud->set_relation ( 'listbook_id', 'listbook', 'listbook_name' );
        $crud->set_relation ( 'userrole_id', 'userrole', 'userrole_name' );
        $crud->set_relation ( 'userstatus_id', 'userstatus', 'userstate_name' );
    }
    private function createUserRules($crud) {
        $crud->set_rules ( 'user_name', 'Nombre', 'required' );
        $crud->set_rules ( 'user_surname', 'Apellido', 'required' );
        $crud->set_rules ( 'user_nickname', 'Alias', 'required|min_length[3]' );
        $crud->set_rules ( 'user_pwd', 'Contraseña', 'required|min_length[4]' );
        $crud->set_rules ( 'user_email', 'Correo Electrónico', 'required|valid_email' );
        $crud->set_rules ( 'user_avatar', 'Avatar', 'required' );
        $crud->set_rules ( 'user_genre', 'Género (H/M)', 'required|exact_length[1]' );
        $crud->set_rules ( 'listbook_id', 'Listbook', 'required' );
        $crud->set_rules ( 'userrole_id', 'Rol', 'required' );
        $crud->set_rules ( 'userstatus_id', 'Estado', 'required' );
    }
    private function createUserAlias($crud) {
        $crud->display_as ( 'user_name', 'Nombre' );
        $crud->display_as ( 'user_surname', 'Apellido' );
        $crud->display_as ( 'user_nickname', 'Alias' );
        $crud->display_as ( 'user_email', 'Correo' );
        $crud->display_as ( 'user_avatar', 'Avatar' );
        $crud->display_as ( 'user_genre', 'Género' );
        $crud->display_as ( 'listbook_id', 'Lista Libros' );
        $crud->display_as ( 'userrole_id', 'Rol' );
        $crud->display_as ( 'userstatus_id', 'Estado Usuario' );
    }
    public function showBooksMasterTable() {
        $crud = new grocery_CRUD ();
        
        $crud->set_table ( 'book' );
        
        $this->createBookAlias ( $crud );
        
        $crud->columns ( 'book_isbn', 'book_name', 'book_desc', 'book_img', 'bookstate_id', 'bookgenre_id' );
        
        $this->createBookRules ( $crud );
        
        $crud->required_fields ( 'book_isbn', 'book_name', 'book_desc', 'book_img', 'bookstate_id' );
        
        $crud->set_field_upload ( 'book_img', 'assets/images/books' );
        $crud->set_subject ( 'Libro' );
        
        $this->createBookRelations ( $crud );
        
        $crud->set_crud_url_path ( site_url ( strtolower ( __CLASS__ . "/" . __FUNCTION__ ) ), site_url ( strtolower ( __CLASS__ . "/showBooksMasterTable" ) ) );
        
        $data['title'] = 'Admin Libros';
        $data['output'] = $crud->render ();
        loadAdminView( 'admin/adminview', $data );
    }
    private function createBookRelations($crud) {
        $crud->set_relation ( 'bookstate_id', 'bookstate', 'bookstate_name' );
        $crud->set_relation_n_n ( 'bookgenre_id', 'book_genrebook', 'genrebook', 'book_id', 'genrebook_id', 'genrebook_name' );
    }
    private function createBookRules($crud) {
        $crud->set_rules ( 'book_isbn', 'ISBN', 'required' );
        $crud->set_rules ( 'book_name', 'Título', 'required' );
        $crud->set_rules ( 'book_desc', 'Descripción', 'required|min_length[30]' );
        $crud->set_rules ( 'bookstate_id', 'Estado', 'required' );
    }
    private function createBookAlias($crud) {
        $crud->display_as ( 'book_isbn', 'ISBN' );
        $crud->display_as ( 'book_name', 'Titulo' );
        $crud->display_as ( 'book_desc', 'Descripción' );
        $crud->display_as ( 'bookstate_id', 'Estado' );
        $crud->display_as ( 'bookgenre_id', 'Genero/s' );
    }
    public function showAuthorsMasterTable() {
        $crud = new grocery_CRUD ();
        
        $crud->set_table ( 'author' );
        
        $this->createAuthorAlias ( $crud );
        
        $crud->columns ( 'author_fullname', 'author_desc', 'author_img', 'authorstate_id', 'authorbooks' );
        
        $this->createAuthorRules ( $crud );
        
        $crud->required_fields ( 'author_fullname', 'author_desc', 'author_img', 'authorstate_id' );
        
        $crud->set_field_upload ( 'author_img', 'assets/images/authors' );
        $crud->set_subject ( 'Autor' );
        
        $this->createAuthorRelations ( $crud );
        
        $crud->set_crud_url_path ( site_url ( strtolower ( __CLASS__ . "/" . __FUNCTION__ ) ), site_url ( strtolower ( __CLASS__ . "/showAuthorsMasterTable" ) ) );
        
        $data['title'] = 'Admin Autores';
        $data['output'] = $crud->render ();
        loadAdminView( 'admin/adminview', $data );
    }
    private function createAuthorRelations($crud) {
        $crud->set_relation ( 'authorstate_id', 'authorstate', 'authorstate_name' );
        $crud->set_relation_n_n ( 'authorbooks', 'author_book', 'book', 'author_id', 'book_id', 'book_name' );
    }
    private function createAuthorAlias($crud) {
        $crud->display_as ( 'author_fullname', 'Nombre Completo' );
        $crud->display_as ( 'author_desc', 'Sinopsis' );
        $crud->display_as ( 'author_img', 'Imagen' );
        $crud->display_as ( 'authorstate_id', 'Estado' );
        $crud->display_as ( 'authorbooks', 'Libros Escritos' );
    }
    private function createAuthorRules($crud) {
        $crud->set_rules ( 'author_fullname', 'Nombre', 'required' );
        $crud->set_rules ( 'author_desc', 'Sinopsis', 'required' );
        $crud->set_rules ( 'author_img', 'Imagen', 'required' );
        $crud->set_rules ( 'authorstate_id', 'Estado', 'required' );
    }
    public function showGenrebookMasterTable() {
        $crud = new grocery_CRUD ();
        
        $crud->set_table ( 'genrebook' );
        
        $crud->display_as ( 'genrebook_name', 'Género' );
        
        $crud->columns ( 'genrebook_name' );
        
        $crud->set_rules ( 'genrebook_name', 'Género', 'required' );
        
        $crud->required_fields ( 'genrebook_name' );
        
        $crud->set_subject ( 'Género' );
        
        $crud->set_crud_url_path ( site_url ( strtolower ( __CLASS__ . "/" . __FUNCTION__ ) ), site_url ( strtolower ( __CLASS__ . "/showGenrebookMasterTable" ) ) );
        
        $data['title'] = 'Admin Géneros';
        $data['output'] = $crud->render ();
        loadAdminView( 'admin/adminview', $data );
    }
    public function showListbookMasterTable() {
        $crud = new grocery_CRUD ();
    
        $crud->set_table ( 'listbook' );
    
        $crud->display_as ( 'listbook_name', 'Lista de libros' );
    
        $crud->columns ( 'listbook_name' );
    
        $crud->set_rules ( 'listbook_name', 'Lista de libros', 'required' );
    
        $crud->required_fields ( 'listbook_name' );
    
        $crud->set_subject ( 'Lista libros' );
    
        $crud->set_crud_url_path ( site_url ( strtolower ( __CLASS__ . "/" . __FUNCTION__ ) ), site_url ( strtolower ( __CLASS__ . "/showListbookMasterTable" ) ) );
        
        $data['title'] = 'Admin Listas';
        $data['output'] = $crud->render ();
        loadAdminView( 'admin/adminview', $data );
    }
}