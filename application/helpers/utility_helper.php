<?php
if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );
function asset_url() {
    return base_url () . 'assets/';
}
function check_cookie_exist() {
    if (isset ( $_COOKIE ['bookcorner'] )) {
        return true;
    }
    
    return false;
}
function check_session_exist() {
    $CI = & get_instance ();
    
    if ($CI->session->userdata ( 'title' )) {
        return true;
    }
    
    return false;
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
    
    if (check_cookie_exist ()) {
        $cookieData = explode ( '#', $CI->input->cookie ( 'bookcorner' ) );
        $data ['id'] = $cookieData [0];
        $data ['nickname'] = $cookieData [1];
        $data ['username'] = $cookieData [2];
        $data ['surname'] = $cookieData [3];
        $data ['avatar'] = $cookieData [4];
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else if (check_session_exist ()) {
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
function loadBasicViewsAndCustomHeader($view, $header, $data) {
    $CI = & get_instance ();
    $CI->load->view ( $header, $data );
    
    if (check_cookie_exist ()) {
        $cookieData = explode ( '#', $CI->input->cookie ( 'bookcorner' ) );
        $data ['id'] = $cookieData [0];
        $data ['nickname'] = $cookieData [1];
        $data ['username'] = $cookieData [2];
        $data ['surname'] = $cookieData [3];
        $data ['avatar'] = $cookieData [4];
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else if (check_session_exist ()) {
        $data ['id'] = $CI->session->userdata ( 'id' );
        $data ['nickname'] = $CI->session->userdata ( 'username' );
        $data ['username'] = $CI->session->userdata ( 'name' );
        $data ['surname'] = $CI->session->userdata ( 'surname' );
        $data ['avatar'] = $CI->session->userdata ( 'avatar' );
        
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else {
        $CI->load->view ( 'templates/menus/menu_login', $data );
    }
    $CI->load->view ( $view, $data );
    $CI->load->view ( 'templates/footers/base_footer' );
    $CI->load->view ( 'templates/end' );
}
function prepareForSearchableWord($search) {
    $searchFormatted = '%' . $search . '%';
    return str_replace ( ' ', '%', $searchFormatted );
}