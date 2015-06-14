$( document ).ready(function() {
	$('#myForm').validator(); 
	$('#formPass').validator(); 
	$('#message-container .alert').append('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>');
	
	$.cookieCuttr({
	  cookieNotificationLocationBottom: true,
	  cookieAnalytics: false, 
	  cookiePolicyPageMessage: 'Por favor lea la siguiente información y elija una de las siguientes opciones',
	  cookiePolicyLink: '',
	  cookieMessage: 'Utilizamos cookies en nuestro website. Si continua navegando, consideramos que acepta su uso.',
	  cookieAnalyticsMessage: 'No utilizamos google analytics',
	  cookieErrorMessage: "Lo sentimos. Esta funcionalidad está desactivada en su navegador. <br>Para seguir utilizando esta funcionalidad, por favor ",
	  cookieWhatAreTheyLink: "",
	  cookieAcceptButtonText: "ACEPTAR COOKIES",
	  cookieDeclineButtonText: "NO USAR COOKIES",
	  cookieResetButtonText: "BORRAR COOKIES",
	  cookieWhatAreLinkText: "¿Qué son las cookies?",
	});
});

$(document).on(
	'change',
	'.btn-file :file',
	function() {
		var input = $(this), numFiles = input.get(0).files ? input
				.get(0).files.length : 1, label = input.val()
				.replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [ numFiles, label ]);
	});