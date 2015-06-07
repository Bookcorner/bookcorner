<?php
class GenresModelTest extends PHPUnit_Framework_TestCase {
    private $CI;
    public function setUp() {
        $this->CI = &get_instance ();
    }
    public function testWhenSearchExistingAuthorThenAuthorShouldBeReturned() {
        $this->CI->load->model ( 'genres_model' );
        $authorSearched = $this->CI->genres_model->getAllGenres ();
        
        $this->assertNotNull ( $authorSearched );
    }
    public function testWhenCountGenresIsCalledThenNumberShouldBeReturned(){
        $this->CI->load->model ( 'genres_model' );
        $number_of_genres = $this->CI->genres_model->countGenres ();
        $this->assertNotNull($number_of_genres);
    }
}