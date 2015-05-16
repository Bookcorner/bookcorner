<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
/**
 * Indica si el usuario indicado es administrador.
 * Se le debe pasar un bean del tipo redbenaphp
 * @param bean $user bean de redbeanphp que devuelve un usuario
 * @return boolean
 */
function isAdministrator($user) {
    if ($user->userrole_id == 3) {
        return true;
    } else {
        return false;
    }
}