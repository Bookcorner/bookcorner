<?php
class UsersModelTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
	}

	public function testCheckValidUserWithExistingUser() {
		$user_nickname = 'admin';
		
		$this->CI->load->model('users_model');		
		$userChecked = $this->CI->users_model->check_valid_user($user_nickname);
		
		$this->assertNotNull($userChecked);
		$this->assertEquals($userChecked->user_nickname, $user_nickname);
	}
	
	public function testCheckValidUserWithNotExistingUser() {
		$username = 'nouser';
		
		$this->CI->load->model('users_model');		
		$userChecked = $this->CI->users_model->check_valid_user($username);
	
		$this->assertNull($userChecked);
	}
	
	public function testWhenGetUserInfoWithExistingIdIsCalledThenThisUserShouldBeReturned() {
	    $id = '1';
	
	    $this->CI->load->model('users_model');
	    $user = $this->CI->users_model->getUserInfo($id);
	
	    $this->assertNotNull($user);
	}
	
	public function testWhenGetUserInfoWithNoExistingIdIsCalledThenUserShouldBeEmpty() {
	    $id = '-1';
	
	    $this->CI->load->model('users_model');
	    $user = $this->CI->users_model->getUserInfo($id);
	
	    $this->assertEmpty($user);
	}
}