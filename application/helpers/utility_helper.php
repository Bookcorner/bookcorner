<?php
function asset_url() {
	return base_url () . 'assets/';
}

function check_cookie_session_exist() {
	if (isset ( $_COOKIE ['sessionuser'] )) {
		return true;
	}
	if ($_COOKIE == null) {
		return false;
	} else {
		return true;
	}
}