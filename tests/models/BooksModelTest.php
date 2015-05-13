<?php
class BooksModelTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testWhenSearchExistingBookThenBookShouldBeReturned() {
		$bookname = 'El Nombre del Viento';
		
		$this->CI->load->model('books_model');
		$bookSearched = $this->CI->books_model->searchBooks($bookname);
		
		$this->assertNotNull($bookSearched);
		$this->assertEquals(strtolower($bookSearched[1]['book_name']), strtolower($bookname));
	}
	
	public function testWhenSearchNonExistingBookThenBookShouldBeEmpty() {
		$bookname = 'No existing Book';
		
		$this->CI->load->model('books_model');
		$bookSearched = $this->CI->books_model->searchBooks($bookname);
		
		$this->assertEmpty($bookSearched);
	}	
	
	public function testWhenSearchUncompletedBooknameThenAvailableBooksShouldBeReturned() {
		$bookname = 'El ';
		
		$this->CI->load->model('books_model');
		$booksSearched = $this->CI->books_model->searchBooks($bookname);
	
		$this->assertNotNull($booksSearched);
		$this->assertEquals(sizeof($booksSearched), 2);
		
	}
	
	public function testWhenSearchSearchAllAuthorsIsCalledThenAuthorsShouldBeReturned() {
	    $this->CI->load->model('books_model');
	    $booksSearched = $this->CI->books_model->searchAllBooks();
	
	    $this->assertNotNull($booksSearched);
	}
	
}