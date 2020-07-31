$(document).ready(function(){
    if($('#tblUsuarios').length) {
        $('#tblUsuarios').dataTable();
    }

    $('#btnGuardar').click(function (e) {
        e.preventDefault();
        $('#frmUsuario').submit();
    });
});
