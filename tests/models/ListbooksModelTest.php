<?php
class ListbooksModelTest extends PHPUnit_Framework_TestCase {
    private $CI;
    public function setUp() {
        $this->CI = &get_instance ();
    }
    public function testWhenGetAllBooklistFromUserWithBooksThenBooksShouldBeReturned() {
        $userId = 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $booksSearched = $this->CI->listbooks_model->getAllBooklistFromUser ( $userId );
        $this->assertNotNull ( $booksSearched );
    }
    public function testWhenGetAllBooklistFromNoUserThenBooksShouldBeEmpty() {
        $userId = - 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $booksSearched = $this->CI->listbooks_model->getAllBooklistFromUser ( $userId );
        
        $this->assertEmpty ( $booksSearched );
    }
    public function testWhenUpdateBookStateThenBooksShouldBeChange() {
        $newBookStatus = 3;
        $val_id = 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $this->CI->listbooks_model->updateBookState ( $newBookStatus, $val_id );
        
        $bookValuation = R::load ( 'valuation', $val_id );
        
        $this->assertEquals ( $bookValuation->val_estado_libro, $newBookStatus );
    }
    public function testWhenUpdateBookScoreThenBooksShouldBeChange() {
        $newBookScore = 3;
        $val_id = 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $this->CI->listbooks_model->updateBookScore ( $newBookScore, $val_id );
        
        $bookValuation = R::load ( 'valuation', $val_id );
        
        $this->assertEquals ( $bookValuation->val_puntuacion, $newBookScore );
    }
    public function testWhenUpdateBookNoteThenBooksShouldBeChange() {
        $newBookNote = 'Nueva Nota';
        $val_id = 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $this->CI->listbooks_model->updateBookNote ( $newBookNote, $val_id );
        
        $bookValuation = R::load ( 'valuation', $val_id );
        
        $this->assertEquals ( $bookValuation->val_nota_libro, $newBookNote );
    }
    public function testWhenGetListbookFromIsCalledThenListbookIDShouldBeReturned() {
        $userId = 1;
        $listbookIDEspected = 1;
        
        $this->CI->load->model ( 'listbooks_model' );
        $listbookId = $this->CI->listbooks_model->getListbookFrom ( $userId );
        $this->assertEquals ( $listbookIDEspected, $listbookId );
    }
    public function testWhenGetListbookNameCalledThenListbookNameShouldBeReturned() {
        $userId = 1;
        $listbookId = 1;
        $listbookNameExpected = 'Listbook of admin';
        $this->CI->load->model ( 'listbooks_model' );
        $listbookName = $this->CI->listbooks_model->getListbookName ( $listbookId );
        $this->assertEquals ( $listbookNameExpected, $listbookName );
    }
}