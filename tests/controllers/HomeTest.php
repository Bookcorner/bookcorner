<?php
class HomeTest extends PHPUnit_Framework_TestCase {
	private $CI;
	
	public function setUp() {
		$this->CI = &get_instance();
	}
	
	/* Cargar controladores
	public function testHomeLoadsOk() {
		$this->CI->load->model('users_model');
		$this->CI->load->library('../controllers/home');
	}
	*/
}