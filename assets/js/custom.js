$(document)
		.on(
				'change',
				'.btn-file :file',
				function() {
					var input = $(this), numFiles = input.get(0).files ? input
							.get(0).files.length : 1, label = input.val()
							.replace(/\\/g, '/').replace(/.*\//, '');
					input.trigger('fileselect', [ numFiles, label ]);
				});

function GetCookie(name) {
	var arg = name + "=";
	var alen = arg.length;
	var clen = document.cookie.length;
	var i = 0;

	while (i < clen) {
		var j = i + alen;

		if (document.cookie.substring(i, j) == arg)
			return "1";
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0)
			break;
	}

	return null;
}

function aceptar_cookies() {
	var expire = new Date();
	expire = new Date(expire.getTime() + 7776000000);
	document.cookie = "cookies_surestao=aceptada; expires=" + expire;

	var visit = GetCookie("cookies_surestao");

	if (visit == 1) {
		popbox3();
	}
}

$(function() {
	var visit = GetCookie("cookies_surestao");
	if (visit == 1) {
		popbox3();
	}
});

function popbox3() {
	$('#overbox3').toggle();
}