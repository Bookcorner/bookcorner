<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

/**
 * Comprueba si la sesión existe
 * 
 * @return boolean donde true es que si existe, y false es que no existe
 */
function check_session_exist($session) {
    $CI = & get_instance ();
    
    if ($CI->session->userdata ( $session )) {
        return true;
    }
    return false;
}

function get_userrole() {
    $CI = & get_instance ();
    // si tiene sesion, devuelve el role, sino, devuelve 0
    if (check_session_exist('title')) {
        return $CI->session->userdata( 'role' );
    } else {
        return 0;
    }
    
}