$(document).ready(function(){
    $(".button-collapse").sideNav({
         edge: 'left', // Choose the horizontal origin
         // closeOnClick: true
     });

    if($('#flash-overlay-modal')[0]){
        $('#flash-overlay-modal').openModal();   
    }

    $('.modal-trigger').leanModal();

    $('.modal-login-open').leanModal({
        complete: function() { 
            $('#login-form')[0].reset();
             $("#message-error").html("");
        }
    });

    $('select').material_select();

    //$(".dropdown-button").dropdown();

    $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 80
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        formatSubmit: 'yyyy-mm-dd',

        // The title label to use for the month nav buttons
        labelMonthNext: 'Mes siguiente',
        labelMonthPrev: 'Mes anterior',

        // The title label to use for the dropdown selectors
        labelMonthSelect: 'Selecciona un mes',
        labelYearSelect: 'Selecciona un año',

        // Months and weekdays
        monthsFull: [ 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre' ],
        monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic' ],
        weekdaysFull: [ 'Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado' ],
        weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab' ],

        // Materialize modified
        weekdaysLetter: [ 'D', 'L', 'M', 'I', 'J', 'V', 'S' ],

        // Today and clear
        today: 'Hoy',
        clear: 'Limpiar',
        close: 'Cerrar',

        onSet: function (ele) {
            if(ele.select){
                this.close();
            }
        },
    });

    $('#login-form').submit(function(e){
        
        e.preventDefault();
        
        var form = $(this).serialize();

        $.ajax({
            url:$('#login-form').attr('action'),
            type: 'POST',
            data: form,
            success: function(res){
                if(res == "success"){
                    window.location.reload();
                }else{
                    $("#message-error").html(res);
                }
            },
            error: function(res) {
                alert(res);

            }
        });

        // alert(form);
    });

});