$(document).ready(function() {

    // AJAX para saber se o usuário logado é admin ou não:

    var req = new XMLHttpRequest();

    req.onload = function() {
        if (this.responseText != 1) {
            $('#btn-usuarios').hide();
            $('#btn-conta').show();
            console.log(this.responseText);
        }
    };

    req.open("get", "php/admin.php", true);
    req.send();

    // -------------------------------------------------

    $('#btn-conta').hide();
    $('#usuarios').hide();
    $('#usuarios_cadastrar').hide();
    $('#usuarios_deletar').hide();
    $('#conta').hide();
    $('#menu_nada').hide();

    $('#btn-usuarios').click(function() {
        $('#usuarios').show();
        $('#principal').hide();
        $('#menu_nada').hide();
        $('#usuarios_cadastrar').hide();
        $('#usuarios_deletar').hide();
        $('#conta').hide();
    });

    $('#btn-usuarios-cadastrar').click(function() {
        $('#usuarios_cadastrar').show();
        $('#principal').hide();
        $('#menu_nada').hide();
        $('#usuarios').hide();
        $('#usuarios_deletar').hide();
        $('#conta').hide();
    });

    $('#btn-usuarios-deletar').click(function() {
        $('#usuarios_deletar').show();
        $('#principal').hide();
        $('#menu_nada').hide();
        $('#usuarios').hide();
        $('#usuarios_cadastrar').hide();
        $('#conta').hide();
    });

    $('#btn-conta').click(function() {
        $('#conta').show();
        $('#usuarios_deletar').hide();
        $('#principal').hide();
        $('#menu_nada').hide();
        $('#usuarios').hide();
        $('#usuarios_cadastrar').hide();
    });

    $('.nothing').click(function() {
        $('#usuarios_cadastrar').hide()
        $('#principal').hide();
        $('#usuarios').hide();
        $('#usuarios_cadastrar').hide();
        $('#usuarios_deletar').hide();
        $('#menu_nada').show();
        $('#conta').hide();
    })

});