<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function resize_img($urlImage, $width, $height) {
    $CI = & get_instance ();
    
    $config['image_library'] = 'GD2';
    $config['source_image']	= $urlImage;
    $config['create_thumb'] = FALSE;
    $config['maintain_ratio'] = TRUE;
    $config['quality'] = '100%';
    $config['width'] = $width;
    $config['height'] = $height;
    
    $CI->load->library('image_lib', $config);
    $CI->image_lib->resize();
    $CI->image_lib->clear();
}