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
    
    $imgen = file_get_contents(base_url().'captcha/get_captcha.php?randomtext='.$randomText);
    $img_base64 = chunk_split(base64_encode($imgen));    
    
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
    
    //echo img ( $img );
    echo "<img src =\"data:image/jpeg;base64,$img_base64\" />";
    echo form_input ( $input );
}