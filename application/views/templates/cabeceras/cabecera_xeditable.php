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

    $("a[data-name='score']").editable({  
    	placement: 'bottom',
        source: [
              {value: 0, text: '0'},
              {value: 1, text: '1'},
              {value: 2, text: '2'},
              {value: 3, text: '3'},
              {value: 4, text: '4'},
              {value: 5, text: '5'},
              {value: 6, text: '6'},
              {value: 7, text: '7'},
              {value: 8, text: '8'},
              {value: 9, text: '9'},
              {value: 10, text: '10'},
              {value: 11, text: '-'}
           ]
    });

    $("a[data-name='note']").editable({  
    	placement: 'bottom'
    });    
});
</script>
