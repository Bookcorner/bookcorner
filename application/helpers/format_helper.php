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