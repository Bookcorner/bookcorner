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