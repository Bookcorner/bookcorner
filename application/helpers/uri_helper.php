<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

/**
 * Establece la burl base en el lugar donde se encuentran las imágenes en el proyecto
 * 
 * @return string Cadena con la base de la posición de las imágenes
 */
function asset_url() {
    return base_url () . 'assets/';
}

function go_back() {
    if (isset($_SERVER['HTTP_REFERER'])) {
        redirect($_SERVER['HTTP_REFERER'], 'refresh');
    } else {
        redirect(base_url('home'), 'refresh');
    } 
}