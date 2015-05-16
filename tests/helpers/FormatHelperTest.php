<?php
class FormatHelperTest extends PHPUnit_Framework_TestCase {
	private $CI;

	public function setUp() {
		$this->CI = &get_instance();
		$this->CI->load->helper('format');
	}
	
	public function testWhenPrepareForSearchableWordIsCalledThenStringIsCorrectlyFormatted(){
	    $string = 'hola';
	    $expectedStringPrepared = '%hola%';
	    
	    $actualStringPrepared = prepareForSearchableWord($string);
	    
	    $this->assertEquals($expectedStringPrepared, $actualStringPrepared);
	}
}
