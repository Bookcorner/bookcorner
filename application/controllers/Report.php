<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Report extends CI_Controller {
    public function index() {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
        }
        
        $data ['title'] = 'Reporte';
        
        $this->load->model ( 'Authors_model' );
        $data ['authors'] = $this->Authors_model->searchAllAuthorsOrderedByName ();
        
        $this->load->model ( 'Genres_model' );
        $data ['genres'] = $this->Genres_model->getAllGenres ();
        
        loadBasicViews ( 'report/showReportForm', $data );
    }
    public function addBookAndPossibleAuthor() {
        $sessionName = 'id';
        
        if (! check_session_exist ( $sessionName )) {
            $this->session->set_flashdata ( 'signInError', getSignInErrorMsg () );
            redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
        }
        
        $config = $this->setUploadBookConfig ();
        
        $this->load->library ( 'upload', $config );
        $this->upload->initialize ( $config );
        
        $bookisbn = set_value ( 'isbn' );
        $bookname = set_value ( 'bookname' );
        $bookdesc = set_value ( 'bookdesc' );
        $genrebook = set_value ( 'genrebooks[]' );
        $isbookImgUploaded = $this->upload->do_upload ( 'bookimg' );
        $imgbookData = $this->upload->data ();
        
        if ($isbookImgUploaded) {
            $idAuthorOfTheBook = set_value ( 'bookauthor' );
            $authorOfBookAlreadyExist = ($idAuthorOfTheBook != 'none');
            
            if ($authorOfBookAlreadyExist) {
                $this->load->model ( 'books_model' );
                $this->books_model->createNewBookAndAssociateWithAuthor ( $bookisbn, $bookname, $bookdesc, $imgbookData ['file_name'], $genrebook, $idAuthorOfTheBook );
                $this->session->set_flashdata ( 'bookCreatedSuccess', getbookCreatedSuccessMsg () );
                redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
            } else {
                $authorname = set_value ( 'authorname' );
                $authordesc = set_value ( 'authordesc' );
                
                // change upload configuration file on the fly
                $config = $this->setUploadAuthorConfig ();
                $this->upload->initialize ( $config );
                
                $isAuthorImgUploaded = $this->upload->do_upload ( 'authorimg' );
                
                if ($isAuthorImgUploaded) {
                    $imgAuthorData = $this->upload->data ();
                    
                    $this->load->model ( 'authors_model' );
                    $this->authors_model->createNewAuthor ( $authorname, $authordesc, $imgAuthorData ['file_name'] );
                    $authorCreated = $this->authors_model->searchAuthorsPending ( $authorname );
                    $idAuthorCreated = key ( $authorCreated );
                    $this->load->model ( 'books_model' );
                    $this->books_model->createNewBookAndAssociateWithAuthor ( $bookisbn, $bookname, $bookdesc, $imgbookData ['file_name'], $genrebook, $idAuthorCreated );
                    $this->session->set_flashdata ( 'bookCreatedSuccess', getbookCreatedSuccessMsg () );
                    redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
                } else {
                    $this->session->set_flashdata ( 'authorImageError', getAuthorImageErrorMsg () );
                    redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
                }
            }
        } else {
            $this->session->set_flashdata ( 'bookImageError', getBookImageErrorMsg () );
            redirect ( $_SERVER ['HTTP_REFERER'], 'refresh' );
        }
    }
    private function setUploadBookConfig() {
        $config ['upload_path'] = './assets/images/books/';
        $config ['allowed_types'] = 'gif|jpg|png|jpeg';
        $config ['max_size'] = '5000';
        $config ['max_width'] = '768';
        $config ['max_height'] = '1024';
        $config ['remove_spaces'] = TRUE;
        return $config;
    }
    private function setUploadAuthorConfig() {
        $config ['upload_path'] = './assets/images/authors/';
        $config ['allowed_types'] = 'gif|jpg|png|jpeg';
        $config ['max_size'] = '5000';
        $config ['max_width'] = '1024';
        $config ['max_height'] = '768';
        $config ['remove_spaces'] = TRUE;
        return $config;
    }
    public function showMainReports() {
        $sessionName = 'id';
        
        if (get_userrole() < 2) {
            redirect ( base_url ( 'prohibido' ), 'refresh' );
        } else {
            
            $this->load->model ( 'Authors_model' );
            $this->load->model ( 'Books_model' );
            
            $data ['booksReports'] = $this->Books_model->countBooksReports ();
            $data ['authorsReports'] = $this->Authors_model->countAuthorsReports ();
            
            $data ['authors'] = $this->Authors_model->searchAllAuthorsPending ();
            $data ['books'] = $this->Books_model->searchAllBooksPending ();
            $data ['title'] = 'Validar Libros y Autores';
            $contentURI = 'report/showAuthorsAndBooksReported';
            $views = [ 
                    'cabeceras' => [ 
                            'templates/cabeceras/cabecera_base',
                            'templates/cabeceras/cabecera_popup',
                            'templates/cabeceras/cabecera_reportxeditable' 
                    ],
                    'contenidos' => [ 
                            'report/showAuthorsAndBooksReported' 
                    ],
                    'footer' => 'templates/footers/base_footer' 
            ];
            
            loadCustomViews ( $views, $data );
        }
    }
}