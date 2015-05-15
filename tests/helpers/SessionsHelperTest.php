<?php
class SessionsHelperTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testWhenCheckSessionExistIsCalledThenSessionShouldBeTrue() {
        $sessionName = 'session';
	    $CI->session->set_userdata ( $sessionName );
	    
	    $CI->load->helper('sessions');
	    $this->assertTrue( $CI->sessions->check_session_exist($sessionName) );
	    
	    $CI->session->sess_destroy ();
	}
}