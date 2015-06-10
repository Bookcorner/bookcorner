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
    $searchFormatted = '%' . $string . '%';
    
    return str_replace ( '%20', '%', $searchFormatted );
}

function filter($string) {
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $string = utf8_decode ( $string );
    $string = strtr ( $string, utf8_decode ( $originales ), $modificadas );
    $string = strtolower ( $string );
    
    return $string;
}

function filterQuitSpecChar($string) {
    $string = str_replace ( " ", "-", $string );

    $string = filter($string);

    return $string;
}
function quitDash($string) {
    $string = str_replace("-", " ", $string);
    return $string;
}