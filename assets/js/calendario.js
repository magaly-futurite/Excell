$(document).ready(function () {});

function callCalendar() {
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '&#x3C;Ant',
        nextText: 'Sig&#x3E;',
        currentText: 'Hoy',
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
        dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''};
    

    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $(".datepicker").datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxMonth:1,
        firstDay: 1,
      onClose: function( selectedDate ) {
        $( "#datepicker2" ).datepicker( "option", "minDate", selectedDate );
      }
    });

    $(".datepicker2").datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxMonth:1,
        firstDay: 1,
      onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
}


