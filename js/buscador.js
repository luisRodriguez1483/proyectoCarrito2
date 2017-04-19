$(document).ready(function() {

    var consulta;

    //hacemos focus al campo de búsqueda
    $("#buscador").focus();

    //comprobamos si se pulsa una tecla
    $("#buscador").keyup(function(e) {

        //obtenemos el texto introducido en el campo de búsqueda
        consulta = $("#buscador").val();

        //hace la búsqueda

        $.ajax({
            type: "POST",
            url: "buscar.php",
            data: "b=" + consulta,
            dataType: "html",
            beforeSend: function() {
                //imagen de carga
                $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
            },
            error: function() {
                alert("error petición ajax");
            },
            success: function(data) {
                $("#resultado").empty();
                $("#resultado").append(data);

            }
        });


    });

});