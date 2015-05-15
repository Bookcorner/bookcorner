<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

/**
 * Comprueba si la cookie buscada existe
 * 
 * @return boolean true si existe la cookie y false si no existe
 */
function check_cookie_exist($cookieName) {
    if (isset ( $_COOKIE [$cookieName] )) {
        return true;
    }
    return false;
}

/**
 * Obtiene los datos de la cookie en forma de array
 * @param String $cookie Nombre de la cookie de la que se quieren obtener los datos
 * @return multitype: Array que contiene los datos de la cookie
 */
function get_cookie_data($cookie){
    $CI = &get_instance();
    return explode ( '#', $CI->input->cookie ( $cookie ) );
}