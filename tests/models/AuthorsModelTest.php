<?php
class AuthorsModelTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testWhenSearchExistingAuthorThenAuthorShouldBeReturned() {
		$authorname = 'Patrick Rothfuss';

		$this->CI->load->model('authors_model');
		$authorSearched = $this->CI->authors_model->searchAuthors($authorname);
	
		$this->assertNotNull($authorSearched);
		$this->assertEquals(strtolower($authorSearched[1]['author_fullname']), strtolower($authorname));
	}
	
	public function testWhenSearchNonExistingAuthorThenAuthorShouldBeEmpty() {
		$authorname = 'No existing Author';
	
		$this->CI->load->model('authors_model');
		$authorSearched = $this->CI->authors_model->searchAuthors($authorname);
	
		$this->assertEmpty($authorSearched);
	}	
	
	public function testWhenSearchUncompletedAuthornameThenAvailableAuthorsShouldBeReturned() {
		$authorname = 'Pat';
	
		$this->CI->load->model('authors_model');
		$authorsSearched = $this->CI->authors_model->searchAuthors($authorname);
	
		$this->assertNotNull($authorsSearched);
		$this->assertEquals(sizeof($authorsSearched), 1);
	
	}
	
}