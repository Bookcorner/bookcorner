<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function getCaptcha() {
    $CI = & get_instance ();
    $CI->load->helper ( 'string' );
    $randomText = random_string ( 'alnum', 6 );
    $CI->session->set_flashdata ( 'captcha', $randomText );
    
    $img = array (
        'src' => base_url().'captcha/get_captcha.php?randomtext='.$randomText,
        'alt' => 'captcha'
    );
    
    $input = array (
            'name' => 'captchaControl',
            'class' => 'form-control',
            'id' => 'idCaptchaControl',
            'maxlength' => '6',
            'style' => 'width:25%',
            'type' => 'text',
            'required' => 'required',
            'placeholder' => 'Captcha' 
    ); 
    
    echo img ( $img );
    echo form_input ( $input );
}