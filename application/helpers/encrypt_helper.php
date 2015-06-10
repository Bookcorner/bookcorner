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
function filterQuitSpecChar($string) {
    $string = str_replace ( " ", "-", $string );
    
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $string = utf8_decode ( $string );
    $string = strtr ( $string, utf8_decode ( $originales ), $modificadas );
    $string = strtolower ( $string );
    
    return $string;
}
function quitDash($string) {
    $string = str_replace("-", " ", $string);
    return $string;
}