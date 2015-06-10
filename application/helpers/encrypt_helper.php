<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
/**
 * Dado un string lo encripta.
 *
 * @param string $string
 *            Cadena a encriptar
 * @return string Cadena encriptada
 */
function encrypt($string) {
    return md5 ( $string );
}
