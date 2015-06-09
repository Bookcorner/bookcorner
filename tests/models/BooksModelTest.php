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
		$bookname = 'El nom d vien';
		
		$this->CI->load->model('books_model');
		$booksSearched = $this->CI->books_model->searchBooks($bookname);
	
		$this->assertNotNull($booksSearched);
		
	}
	
	public function testWhenSearchSearchAllBooksIsCalledThenBooksShouldBeReturned() {
	    $this->CI->load->model('books_model');
	    $booksSearched = $this->CI->books_model->searchAllBooksOrderedByName();
	
	    $this->assertNotNull($booksSearched);
	}
	
	public function testWhenGetBookIsCalledThenBookShouldBeReturned() {
	    $this->CI->load->model('books_model');
	    $id = 1;
	    $booksSearched = $this->CI->books_model->getBook($id);
	
	    $this->assertNotNull($booksSearched);
	}
	
	public function testWhenGetAuthorOfBookIsCalledThenAuthorShouldBeReturned() {
	    $this->CI->load->model('books_model');
	    $id = 1;
	    $authorSearched = $this->CI->books_model->getAuthorOfBook($id);
	
	    $this->assertNotNull($authorSearched);
	}
	public function testWhenGetBookIsCalledThenBookShoulBeReturned(){
	    $bookId = 1;
	    $this->CI->load->model('books_model');
	    $book = $this->CI->books_model->getBook($bookId);
	    $this->assertNotNull($book);
	}
    
	public function testWhenCountBooksIsCalledThenNumberShouldBeReturned(){
	    $this->CI->load->model ( 'books_model' );
	    $number_of_books = $this->CI->books_model->countBooks ();
	    $this->assertNotNull($number_of_books);
	}
	public function testWhenSearchAllBooksPendingIsCalledThenBooksPendingShouldBeReturned(){
	    $this->CI->load->model ( 'books_model' );
	    $number_of_books_pending = $this->CI->books_model->searchAllBooksPending ();
	    $this->assertTrue(empty($number_of_books_pending));
	}
	public function whenUpdateBookisbnIsCalledThenIsbnShouldBeUpdated(){
	    $newIsbn = '1234567890';
	    $oldIsbn = '8401337208';
	    $bookId = 1;
	    
	    $this->CI->load->model ( 'books_model' );
	    $this->CI->books_model->updateBookisbn ($bookId, $newIsbn);
	    $book = $this->CI->books_model->getBook ($bookId);
	    $this->assertEquals($newIsbn, $book->book_isbn);
	    
	    $this->CI->books_model->updateBookisbn ($bookId, $oldIsbn);
	}
	public function whenUpdateBooknameIsCalledThenNameShouldBeUpdated(){
	    $newName = 'El nombre del impostor';
	    $oldName = 'El Nombre del Viento';
	    $bookId = 1;
	     
	    $this->CI->load->model ( 'books_model' );
	    $this->CI->books_model->updateBookname ($bookId, $newName);
	    $book = $this->CI->books_model->getBook ($bookId);
	    $this->assertEquals($newName, $book->book_name);
	     
	    $this->CI->books_model->updateBookname ($bookId, $oldName);
	}
	public function whenUpdateBookdescIsCalledThenDescShouldBeUpdated(){
	    $newDesc = 'Descripción impostor';
	    $oldDesc = 'Viajé, amé, perdí, confié y me traicionaron. En una posada en tierra de nadie, un hombre se dispone a relatar, por primera vez, la auténtica historia de su vida. Una historia que únicamente él conoce y que ha quedado diluida tras los rumores, las conjeturas y los cuentos de taberna que le han convertido en un personaje legendario a quien todos daban ya por muerto: Kvothe... músico, mendigo, ladrón, estudiante, mago, héroe y asesino. Ahora va a revelar la verdad sobre sí mismo. Y para ello debe empezar por el principio: su infancia en una troupe de artistas itinerantes, los años malviviendo como un ladronzuelo en las calles de una gran ciudad y su llegada a una universidad donde esperaba encontrar todas las respuestas que había estado buscando.';
	    $bookId = 1;
	
	    $this->CI->load->model ( 'books_model' );
	    $this->CI->books_model->updateBookdesc ($bookId, $newDesc);
	    $book = $this->CI->books_model->getBook ($bookId);
	    $this->assertEquals($newDesc, $book->book_desc);
	
	    $this->CI->books_model->updateBookd ($bookId, $oldDesc);
	}
	public function whenSetPendingBookIsCalledThenBookstateShouldBeUpdated(){
	    $bookId = 1;
	    $pendingstate = 2;
	    
	    $this->CI->load->model ( 'books_model' );
	    $this->CI->books_model->setPendingBook ($bookId);
	    
	    $book = $this->CI->books_model->getBook ($bookId);
	    $this->assertEquals($pendingstate, $book->bookstate_id);
	
	    $this->CI->books_model->setAvailableBook ($bookId);
	}
	public function whenSetAvailableBookIsCalledThenBookstateShouldBeUpdated(){
	    $bookId = 1;
	    $availablestate = 1;
	     
	    $this->CI->load->model ( 'books_model' );
	    
	    $this->CI->books_model->setPendingBook ($bookId);
	    $this->CI->books_model->setAvailableBook ($bookId);
	    
	    $book = $this->CI->books_model->getBook ($bookId);
	    $this->assertEquals($availablestate, $book->bookstate_id);
	}
	public function whenCountBooksReportsIsCalledThenBooksreportsShouldBeReturned(){
        $this->CI->load->model ( 'books_model' );
	     
	    $book = $this->CI->books_model->countBooksReports ();
	    $this->assertTrue(empty($book));
	}
}