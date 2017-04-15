function iniciarSesion(){

    var usuario = $('#txtusuario').val();
    var pass = $('#txtpassword').val();
    $.ajax({
        type: 'POST',
        url: "./gestionesphp/inicioSession.php",
        data: {
            usuario: usuario,
            pass: pass
        },
        success: function (bnd) {
            if (bnd == 1) {
                alert("El usuario ingresado no existe");
            } else if (bnd == 2) {
                alert("La contraseña es incorrecta");
            } else if (bnd == 3) {
                alert("Lo sentimos su cuenta no esta disponible");
            } else if (bnd == 4) {
                window.location = "administradorPagina.php";
            } else {
                alert(bnd);
            }
        }

    });
}


$(document).on('click', '#btnIngresar', function () {

iniciarSesion();
});

   /*$("#txtusuario").keypress(function() {
   if(e.which == 13) {
          // Acciones a realizar, por ej: enviar formulario.
         alert();
       }
          // Acciones a realizar, por ej: enviar formulario.


    });*/



$(document).on('click', '#btnSalir', function () {
    $.ajax({
        type: "POST",
        url: "./logout.php",
        data: {},
        success: function (data) {
            window.location.href = "./index.php"
        }
    });

});
$(document).on('click', '#btnNuevoAgregarUsu', function () {

    $.ajax({
        url: "./formularios/form_usuario.php",
        dataType: 'html',
        async: false,
        success: function (data) {
            $('#modal').dialog({
                title: "Gestion de Usuarios",
                width: 550,
                height: 400,
                show: "fold",
                hide: "scale",
                resizable: "false",
                my: "center",
                at: "center",
                of: window,
                modal: "true"
            });

            $('#modal').html(data);
        }
    });
});



$(document).on('click', '#btnRegUsuario', function () {
    var usuario = $('#txtusuario').val();
    var pass = $('#txtcontrasenia').val();
    var nivel = $('#cmbNivel').val();
    var status = $('#cmbStatus').val();

    $.ajax({
        type: 'POST',
        url: "./gestionesphp/insertarUsuario.php",
        data: {
            usuario: usuario,
            pass: pass,
            nivel: nivel,
            status: status
        },
        success: function (bnd) {
            if (bnd == 1) {

                swal({
                        title: "¡Exito",
                        text: "La inserción se realizo correctamente",
                        type: "success",
                        showConfirmButton: true
                    },
                    function () {
                        window.location.reload();
                    });


            } else {
                alert(bnd);
            }


        }

    });
});

$(document).on('click', '#btnActUsuario', function () {
    swal({

            title: "¿Seguro que desea continuar con esta accion?",
            text: "No podras deshacer estos cambios",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            showConfirmButton: true,
            confirmButtonText: "Confirmar",
            closeOnConfirm: false
        },
        function () {

            var id = $('#idUsuario').val();
            var usuario = $('#txtusuario').val();
            var pass = $('#txtcontrasenia').val();
            var nivel = $('#cmbNivel').val();
            var status = $('#cmbStatus').val();

            $.ajax({
                type: 'POST',
                url: "./gestionesphp/actualizarUsuario.php",
                data: {
                    id: id,
                    usuario: usuario,
                    pass: pass,
                    nivel: nivel,
                    status: status
                },
                success: function (bnd) {
                    if (bnd == 1) {
                        swal({
                                title: "Hecho",
                                text: "El registro se actualizo correctamente",
                                type: "success",
                                showConfirmButton: true
                            },
                            function () {
                                window.location.reload();

                            });
                    } else {
                        alert(bnd);
                    }
                }

            });
        });
});

$(document).on('click', '#remove', function () {
    var id = $(this).parents("tr").find("td").eq(0).html();
    swal({

            title: "¿Seguro que desea continuar con esta accion?",
            text: "No podras deshacer estos cambios",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            showConfirmButton: true,
            confirmButtonText: "Confirmar",
            closeOnConfirm: false
        },
        function () {

            $.ajax({
                type: 'POST',
                url: "./gestionesphp/eliminarUsuario.php",
                data: {
                    id: id
                },
                success: function (bnd) {
                    if (bnd == 1) {
                        swal({
                                title: "Hecho",
                                text: "El registro se ha eliminado con exito",
                                type: "success",
                                showConfirmButton: true
                            },
                            function () {
                                window.location.reload();
                            });

                    } else {
                        alert(bnd);
                    }
                }
            });

        });
});

$(document).on('click', '#update', function () {
    var id = $(this).parents("tr").find("td").eq(0).html();

    $.ajax({
        type: 'POST',
        url: "./formularios/form_actualizar_usu.php",
        data: {
            id: id
        },
        success: function (data) {
            $('#modal').dialog({
                title: "Gestion de Usuarios",
                width: 550,
                height: 400,
                show: "fold",
                hide: "scale",
                resizable: "false",
                my: "center",
                at: "center",
                of: window,
                modal: "true"
            });

            $('#modal').html(data);
        }
    });
});
