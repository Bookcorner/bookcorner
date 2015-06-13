<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

/**
 * FOrmatea un string para que sea apto para una búsqueda de una base de datos.
 * 
 * @param String $string Cadena a buscar
 * @return String cadena a buscar formateada
 */
function prepareForSearchableWord($string) {
    $string = filter($string);    
    $searchFormatted = '%' . $string . '%';
    $searchFormatted = strtr($searchFormatted, ' ', '%');
    
    return strtr( '%20', '%', $searchFormatted );
}
function filter($string) {
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidoooooouuuuybsaaaaaaaceeeeiiiidoooooouuuyybyRr';
    $string = utf8_decode ( $string );
    $string = strtr ( $string, utf8_decode ( $originales ), $modificadas );
    $string = strtolower ( $string );
    
    return $string;
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