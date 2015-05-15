<?php
class CookiesHelperTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testWhenCheckCookieExistIsCalledThenTrueShouldBeReturned() {
        $cookieName = 'cookie';
	    $CI->input->set_cookie ( $cookieName );
	    
	    $CI->load->helper('cookies');
	    $this->assertTrue( $CI->cookies->check_cookie_exist($cookieName) );
	    
	    delete_cookie ( $cookieName );
	}
	
	public function testWhenGetCookieDataIsCalledThenArrayShouldBeReturned() {
	     $cookieData = array (
                'name' => 'cookie',
                'value' => 1 
        );
	     
	    $CI->input->set_cookie ( $cookieData );
	     
	    $CI->load->helper('cookies');
	    $cookieDataReturned( $CI->cookies->getCookieData('cookie') );
	    
	    $this->assertEquals('array', gettype($cookieDataReturned));
	    
	}

}