<?php
class ListbooksModelTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}
    
	
	public function testWhenGetAllBooklistFromUserWithBooksThenBooksShouldBeReturned() {
		$userId = 1;

		$this->CI->load->model('listbooks_model');
		$booksSearched = $this->CI->listbooks_model->getAllBooklistFromUser($userId);
		$this->assertNotNull($booksSearched);
		$this->assertEquals(strtolower($booksSearched[0]['book_id']), strtolower($userId));
	}
	
	
	public function testWhenGetAllBooklistFromNoUserThenBooksShouldBeEmpty() {
	    $userId = -1;
	
	    $this->CI->load->model('listbooks_model');
	    $booksSearched = $this->CI->listbooks_model->getAllBooklistFromUser($userId);
	
	    $this->assertEmpty($booksSearched);
	}
}