$(document).ready(function(){

    /* on es un metodo jquery para agrupar multiples eventos a la vez, 
    keypress: function () {$(this).removeClass('is-invalid');
    Y le digo $(this)=a el mismo Le digo a este mismo elemnto remueve la clase is-invalid*/

    $('input[type="text"]').on({
        keypress: function () {
        $(this).removeClass('is-invalid');
        }
        });

     /* Validacion de boton guardar Agregamos la libreria animate.css en 
     var nombreAnimate = 'animate__animated animate__shakeY';  shakeY hace que se mueva
     var finanimated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend'; Esta variable nunca cambia
     $('#estado').addClass('is-invalid').closest('div').addClass(nombreAnimate).one(finanimated, 
     le decimos que al elemento con el id  estado, le agregue la clase is-valid, closest= es el primer padre div,
     closest('div') A ese padre añadel la clase nombreAnimate

one(finanimated,
               function () {
                   $(this).removeClass(nombreAnimate);
               });
Y lo encierra dentro de una funcion para que cuando termine el evento le elimine la clase*/
    $('#btnGuardar').click(function (e) {
        e.preventDefault();
        var nombreAnimate = 'animate__animated animate__shakeY';
        var finanimated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        if($('#estado').val() == ''){
            alert('Dene indicar el estado');
            $('#estado').focus();
            $('#estado').addClass('is-invalid').closest('div').addClass(nombreAnimate).one(finanimated,
            function () {
            $(this).removeClass(nombreAnimate);
            });
        } else {
        $('#frmEstado').submit();
        }
    });
 });
