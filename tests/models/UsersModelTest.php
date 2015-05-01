<?php
class UsersModelTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testCheckValidUserWithExistingUser() {
		$this->CI->load->model('users_model');
		$username = 'admin';
		
		$user = $this->CI->users_model->check_valid_user($username);
		
		$this->assertNotNull($user);
	}
	
	public function testCheckValidUserWithNotExistingUser() {
		$this->CI->load->model('users_model');
		$username = 'nouser';
		
		$user = $this->CI->users_model->check_valid_user($username);
	
		$this->assertNull($user);
	}
	
}