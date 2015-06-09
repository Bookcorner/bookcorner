<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function getCaptcha() {  
    $CI = & get_instance ();
    $CI->load->helper ( 'string' );
    $randomText = strtolower(random_string( 'alpha', 6 ));
    
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
            'placeholder' => 'Captcha',
            'data-error' => 'Introduzca el texto de la imagen'
    ); 
    $base64String = base64_encode($randomText);
    
    //echo img ( $img );
    echo "<img src =\"data:image/jpeg;base64,$img_base64\" style='margin-right: 20px;'/>";
    echo "<input type='text' value='$base64String' name='captchaValue' hidden>";
    echo form_input ( $input );
}