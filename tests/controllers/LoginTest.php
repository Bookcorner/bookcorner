<?php
class LoginTest extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp() {
	    $this->CI = &get_instance();
	}
	
	/*
	public function testWhenLogoutIsCalledThenCookiesAndSessionShouldBeDestroyed() {
	    
	    $this->CI->load->library('../controllers/login');
	    
	    $this->CI->login->deleteSessionAndCookie();
	    
	    $this->assertNotTrue(check_cookie_exist());
	    $this->assertNotTrue(check_session_exist());
	}
	*/
	
	public function test1() {
	    $this->assertTrue(TRUE);
	}
}