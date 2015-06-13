<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<!-- Bootstrap Confirm -->
<script type="text/javascript" src="https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js"></script>

<script>
$.fn.editable.defaults.mode = 'inline';

$(document).ready(function() {
    $("a[data-name='status']").editable({  
        source: [
              {value: 1, text: 'Leyendo'},
              {value: 2, text: 'Pendiente'},
              {value: 3, text: 'Abandonado'},
              {value: 4, text: 'Terminado'}
           ]
    });

    $("a[data-name='bookisbn']").editable();
    $("a[data-name='bookname']").editable();   
    $("a[data-name='bookdesc']").editable();
    $("a[data-name='authorname']").editable();
    $("a[data-name='authordesc']").editable();
    $("a[data-name='bookauthor']").editable();
});
</script>
 
<script type="text/javascript">
$(document).on("click", ".deleteBook", function(e) {
	var idBook = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere rechazar el libro?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('rechazar-libro') ?>/'+idBook);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
$(document).on("click", ".acceptBook", function(e) {
	var idBook = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere aceptar el libro?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('verificar-libro') ?>/'+idBook);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});

$(document).on("click", ".deleteAuthor", function(e) {
	var idauthor = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere rechazar el autor? Se borrarán sus libros asociados",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('rechazar-autor') ?>/'+idauthor);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
$(document).on("click", ".acceptAuthor", function(e) {
	var idauthor = e.target.id;
	bootbox.dialog({
		  message: "¿Seguro que quiere aceptar el autor?",
		  title: "Confirmación",
		  buttons: {
		    yes: {
		      label: "SÍ",
		      className: "btn-success",
		      callback: function() {			      
		    	    window.location.replace('<?= base_url('verificar-autor') ?>/'+idauthor);
		      }
		    },
		    no: {
		      label: "NO",
		      className: "btn-danger"
		    }
		  }
		});
});
</script>
