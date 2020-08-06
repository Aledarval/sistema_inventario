$(document).ready(function(){

    /* on es un metodo jquery para agrupar multiples eventos a la vez, 
    keypress: function () {$(this).removeClass('is-invalid');
    Y le digo $(this)=a el mismo Le digo a este mismo elemnto remueve la clase is-invalid*/

    $('input[type="text"]').on({
        keypress: function () {
        $(this).removeClass('is-invalid');
        }
        });

    $('#btnGuardar').click(function (e) {
        e.preventDefault();
        var nombreAnimate = 'animate__animated animate__shakeY';
        var finanimated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        if($('#codigo').val() == ''){
            alert('Debe indicar el Código del Almacén');
            $('#codigo').focus();
            $('#codigo').addClass('is-invalid').closest('div').addClass(nombreAnimate).one(finanimated,
            function () {
            $(this).removeClass(nombreAnimate);
            });
        } else {
        $('#frmAlmacen').submit();
        }
    });
 });
