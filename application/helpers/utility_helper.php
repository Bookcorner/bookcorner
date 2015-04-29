<?php

function asset_url() {
	return base_url () . 'assets/';
}

function check_cookie_session_exist() {
	$ci =& get_instance();
	
	if (isset( $_COOKIE['bookcorner'] ) || $ci->session->userdata('title')) {
		return true;
	}
	
	return false;
}