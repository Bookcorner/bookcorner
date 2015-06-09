<?php
class AuthorsModelTest extends PHPUnit_Framework_TestCase {
    private $CI;
    public function setUp() {
        $this->CI = &get_instance ();
    }
    public function testWhenSearchExistingAuthorThenAuthorShouldBeReturned() {
        $authorname = 'Patrick Rothfuss';
        
        $this->CI->load->model ( 'authors_model' );
        $authorSearched = $this->CI->authors_model->searchAuthors ( $authorname );
        
        $this->assertNotNull ( $authorSearched );
        $this->assertEquals ( strtolower ( $authorSearched [1] ['author_fullname'] ), strtolower ( $authorname ) );
    }
    public function testWhenSearchNonExistingAuthorThenAuthorShouldBeEmpty() {
        $authorname = 'No existing Author';
        
        $this->CI->load->model ( 'authors_model' );
        $authorSearched = $this->CI->authors_model->searchAuthors ( $authorname );
        
        $this->assertEmpty ( $authorSearched );
    }
    public function testWhenSearchUncompletedAuthornameThenAvailableAuthorsShouldBeReturned() {
        $authorname = 'Pat';
        
        $this->CI->load->model ( 'authors_model' );
        $authorsSearched = $this->CI->authors_model->searchAuthors ( $authorname );
        
        $this->assertNotNull ( $authorsSearched );
        $this->assertEquals ( sizeof ( $authorsSearched ), 1 );
    }
    public function testWhenSearchAllAuthorsIsCalledThenAuthorsShouldBeReturned() {
        $this->CI->load->model ( 'authors_model' );
        $authorsSearched = $this->CI->authors_model->searchAllAuthorsOrderedByName ();
        
        $this->assertNotNull ( $authorsSearched );
    }
    public function testWhenSearchAuthorsPendingIsCalledThenAuthorsShouldBeReturned() {
        $this->CI->load->model ( 'authors_model' );
        $authorsSearched = $this->CI->authors_model->searchAuthorsPending ();
    
        $this->assertNotNull ( $authorsSearched );
    }
    public function testWhenCountAuthorsIsCalledThenNumberShouldBeReturned(){
        $this->CI->load->model ( 'authors_model' );
        $number_of_authors = $this->CI->authors_model->countAuthors ();
        $this->assertNotNull($number_of_authors);
    }
    public function testWhenUpdateAuthornameIsCalledThenAuthornameShouldBeChanged(){
        $newName = 'Pepe Perez Reverte';
        $oldName = 'Patrick Rothfuss';
        $authorId = 1;
    
        $this->CI->load->model ( 'authors_model' );
        $this->CI->authors_model->updateAuthorname ($authorId, $newName);
        $author = $this->CI->authors_model->getAuthor($authorId);
        
        $this->assertEquals($newName, $author->author_fullname);
    
        $this->CI->authors_model->updateAuthorname ($authorId, $oldName);
    }
    public function testWhenUpdateAuthordescIsCalledThenAuthordescShouldBeChanged(){
        $newDesc = 'Descrip';
        $oldDesc = 'Patrick James Rothfuss (nacido  el 6 de junio de 1973) es un escritor estadounidense de fantasía y profesor adjunto de literatura y filología inglesa en la Universidad de Wisconsin. Es el autor de la serie Crónica del asesino de reyes, que fue rechazada por varias editoriales antes de que el primer libro de la serie E nombre del viento fuese publicado en el año 2007. Obtuvo muy buenas críticas y se convirtió en un éxito de ventas. En españa fue publicado en el año 2009.';
        $authorId = 1;
    
        $this->CI->load->model ( 'authors_model' );
        $this->CI->authors_model->updateAuthordesc ($authorId, $newDesc);
        $author = $this->CI->authors_model->getAuthor($authorId);
    
        $this->assertEquals($newDesc, $author->author_desc);
    
        $this->CI->authors_model->updateAuthordesc ($authorId, $oldDesc);
    }
    public function testWhenSetAuthorPendingIsCalledThenAuthorstateShouldBeChanged(){
        $authorId = 1;
        $pendingExpected = 2;
    
        $this->CI->load->model ( 'authors_model' );
        $this->CI->authors_model->setAuthorPending ($authorId);
        $author = $this->CI->authors_model->getAuthor ($authorId);
        $this->assertEquals($pendingExpected, $author->authorstate_id);
        
        $this->CI->authors_model->setAvailableAuthor ($authorId );
    }
    public function testWhenSetAuthorAvailableIsCalledThenAuthorstateShouldBeChanged(){
        $authorId = 1;
        $availableExpected = 1;
    
        $this->CI->load->model ( 'authors_model' );
        $this->CI->authors_model->setAuthorPending ($authorId);
        $this->CI->authors_model->setAvailableAuthor ($authorId );
        $author = $this->CI->authors_model->getAuthor ($authorId);
        $this->assertEquals($availableExpected, $author->authorstate_id);
    }
    public function testWhenCountAuthorsReportsIsCalledThenAuthorsPendingShouldBeChanged(){
        $numberOfAuthorsExpected = 0;
        $this->CI->load->model ( 'authors_model' );
        $numberOfAuthorsReturned = $this->CI->authors_model->countAuthorsReports ($authorId);
        $this->assertEquals($numberOfAuthorsExpected, $numberOfAuthorsReturned);
    }
}