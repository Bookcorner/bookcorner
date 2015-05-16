<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

/**
 * Carga la vista completa de la página, con su cabecera, header, y footer.
 * Recibe dos datos por parámetro, que vana ser dos arrays bidimensionales, 
 * para pasar los datos y cargar las vistas que sean necesarias en una sola función.
 *
 * @param Array[][] $views
 *            donde la clave es el la parte de contenido que estás 
 *            cargando(cabeceras, contenidos) y el valor es un 
 *            array de string con la ruta al nombre del archivo de cada vista desde la carpeta views.
 * @param Array $data
 *            dónde la clave es la variable que su usara para cargar el dato en la vista, 
 *            y el valor es el tipo de dato que se pasará para procesar en la vista.
 */
function loadCustomViews($views, $data = null) {
    $CI = & get_instance ();
    $CI->load->view ( 'templates/cabeceras/inicio_cabecera', $data );
    foreach ( $views ['cabeceras'] as $cabecera ) {
        $CI->load->view ( $cabecera, $data );
    }
    $CI->load->view ( 'templates/cabeceras/fin_cabecera', $data );
    loadMenu();
    foreach ( $views ['contenidos'] as $contenido ) {
        $CI->load->view ( $contenido, $data );
    }
    $CI->load->view ( $views['footer'], $data );
    $CI->load->view ( 'templates/end', $data );
}

/**
 * Carga el menú apropiado entre los menús posibles.
 */
function loadMenu(){
    $CI = & get_instance ();
    if (check_cookie_exist ('bookcorner')) {
        $cookieData = explode ( '#', $CI->input->cookie ( 'bookcorner' ) );
        $data ['id'] = $cookieData [0];
        $data ['nickname'] = $cookieData [1];
        $data ['username'] = $cookieData [2];
        $data ['surname'] = $cookieData [3];
        $data ['avatar'] = $cookieData [4];
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else if (check_session_exist ('title')) {
        $data ['id'] = $CI->session->userdata ( 'id' );
        $data ['nickname'] = $CI->session->userdata ( 'username' );
        $data ['username'] = $CI->session->userdata ( 'name' );
        $data ['surname'] = $CI->session->userdata ( 'surname' );
        $data ['avatar'] = $CI->session->userdata ( 'avatar' );
    
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else {
        $CI->load->view ( 'templates/menus/menu_login', $data );
    }
}

/**
 * Carga las vistas principales de la página, más la vista del contenido, que es pasada por parámetro.
 *
 * @param String $contentURI
 *            uri que contiene la ruta del contenido principal
 * @param Array $data
 *            contiene los datos que vana ser pasados a las vistas
 */
function loadBasicViews($contentURI, $data = array()) {
    $CI = & get_instance ();
    $CI->load->view ( 'templates/cabeceras/cabecera_base', $data );
    
    if (check_cookie_exist ('bookcorner')) {
        $cookieData = explode ( '#', $CI->input->cookie ( 'bookcorner' ) );
        $data ['id'] = $cookieData [0];
        $data ['nickname'] = $cookieData [1];
        $data ['username'] = $cookieData [2];
        $data ['surname'] = $cookieData [3];
        $data ['avatar'] = $cookieData [4];
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else if (check_session_exist ('title')) {
        $data ['id'] = $CI->session->userdata ( 'id' );
        $data ['nickname'] = $CI->session->userdata ( 'username' );
        $data ['username'] = $CI->session->userdata ( 'name' );
        $data ['surname'] = $CI->session->userdata ( 'surname' );
        $data ['avatar'] = $CI->session->userdata ( 'avatar' );
        
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else {
        $CI->load->view ( 'templates/menus/menu_login', $data );
    }
    $CI->load->view ( $contentURI, $data );
    $CI->load->view ( 'templates/footers/base_footer' );
    $CI->load->view ( 'templates/end' );
}