<?php
function asset_url() {
    return base_url () . 'assets/';
}
function check_cookie_exist() {
    $ci = & get_instance ();
    
    if (isset ( $_COOKIE ['bookcorner'] )) {
        return true;
    }
    
    return false;
}

function check_session_exist() {
    $ci = & get_instance ();

    if ($ci->session->userdata ( 'title' )) {
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
function loadBasicViews($contentURI, $data) {
    $CI = & get_instance ();
    $CI->load->view ( 'templates/cabeceras/cabecera_base', $data );
    
    if (check_cookie_exist()){
        $cookieData = explode('#', $CI->input->cookie('bookcorner'));
        $data['nickname'] = $cookieData[0];
        $data['username'] = $cookieData[1];
        $data['surname'] = $cookieData[2];
        $CI->load->view ( 'templates/menus/menu_logout', $data);
    } else if (check_session_exist()){
        $data['nickname'] = $CI->session->userdata('username');
        $data['username'] = $CI->session->userdata('name');
        $data['surname'] = $CI->session->userdata('surname');
        $CI->load->view ( 'templates/menus/menu_logout', $data );
    } else {
        $CI->load->view ( 'templates/menus/menu_login', $data );
    }
    $CI->load->view ( $contentURI, $data );
    $CI->load->view ( 'templates/footers/base_footer' );
    $CI->load->view ( 'templates/end' );
}
function prepareForSearchableWord($search) {
    $searchFormatted = '%' . $search . '%';
    return str_replace ( ' ', '%', $searchFormatted );
}