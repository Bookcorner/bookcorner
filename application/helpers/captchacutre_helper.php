<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function generateCaptcha() {
    $CI = & get_instance ();
    $CI->load->helper('string');
    $randomtext = random_string('alnum', 6);
    
    $img = array(
            'src' => base_url().'captcha/get_captcha.php?randomtext='.$randomtext,
            'alt' => 'Captcha'
    );
    
    $infoCaptcha = array(
            'img' => img($img), 
            'randomtext' => $randomtext
            
    );
    
    return $infoCaptcha;
}