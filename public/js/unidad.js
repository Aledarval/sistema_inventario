$(document).ready(function(){

    $('input[type="text"]').on({
        keypress: function () {
        $(this).removeClass('is-invalid');
        }
        });

    $('#btnGuardar').click(function (e) {
        e.preventDefault();
        var nombreAnimate = 'animate__animated animate__shakeY';
        var finanimated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        if($('#nombre_unidad').val() == ''){
            alert('Debe indicar el Nombre de la Unidad');
            $('#nombre_unidad').focus();
            $('#nombre_unidad').addClass('is-invalid').closest('div').addClass(nombreAnimate).one(finanimated,
            function () {
            $(this).removeClass(nombreAnimate);
            });
        } else {
        $('#frmUnidad').submit();
        }
    });
 });
