<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
/**
 * Formatea un string para que sea apto para una búsqueda de una base de datos.
 * 
 * @param String $string Cadena a buscar
 * @return String cadena a buscar formateada
 */
function prepareForSearchableWord($string) {
    
    $searchFormatted = '%' . $string . '%';
    $searchFormatted = strtr($searchFormatted, ' ', '%');
        
    return $searchFormatted;
}
function filterQuitSpecChar($string) {
    $string = strtr($string, ' ', '_');
    $string = rawurlencode($string);
    return $string;
}
function quitDash($string) {
    $string = strtr($string, '_', ' ');
    $string = rawurldecode($string);
    return $string;
}