<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<script>
$(document).ready(function() {
    $("a[data-name='status']").editable({  
    	placement: 'bottom',
        source: [
              {value: 1, text: 'Leyendo'},
              {value: 2, text: 'Pendiente'},
              {value: 3, text: 'Abandonado'},
              {value: 4, text: 'Terminado'}
           ]
    });
});
</script>
