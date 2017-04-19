/*$('#myModal').on('shown.bs.modal',function(){
    $('#btnNuevo').focus();
});*/

$(document).ready(function () {


    $(document).on('click', '#usuario', function () {
        $('body').pleaseWait();
        setInterval(function () {
            parar()
        }, 1000);
        $.ajax({
            url: "usuarios.php",
            dataType: 'html',
            async: false,
            success: function (data) {
                $('#contenido').empty();
                $('#contenido').html(data);
                $('#tblUsuarios').DataTable({
                    "destroy": true,
                    "searching": true,
                    "bPaginate": true,
                    "PageLength":5,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true,
                    "language": {
                        "sSearch": "Buscar",
                        "lengthMenu": "Filtrar por _MENU_",
                        "zeroRecords": "No hay ningun dato que mostrar",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoFiltered": "(Total de datos: _MAX_)",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Ultimo",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior",
                        }
                    }
                });
            }
        });

    });


    $(document).on('click', '#proveedores', function () {
        $('body').pleaseWait();
        setInterval(function () {
            parar()
        }, 1000);
        $.ajax({
            dataType: "html",
            url: "proveedores.php",
            async: "false",
            success: function (data) {
                $('#contenido').empty();
                $('#contenido').html(data);
                $('#tblProveedor').DataTable({
                    "pageLength":5,
                    "destroy": true,
                    "searching": true,
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true,
                    "language": {
                        "sSearch": "Buscar",
                        "lengthMenu": "Filtrar por _MENU_",
                        "zeroRecords": "No hay ningun dato que mostrar",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoFiltered": "(Total de datos: _MAX_)",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Ultimo",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior",
                        }
                    }
                });

            }
        });
    });

    $(document).on('click', '#categoria', function () {
        $('body').pleaseWait();
        setInterval(function () {
            parar()
        }, 1000);

        $.ajax({
            dataType: 'html',
            url: 'categorias.php',
            async: "false",
            success: function (postMessage) {

                $('#contenido').empty();
                $('#contenido').html(postMessage);
                $('#tblCategorias').DataTable({
                    "pageLength":5,
                    "destroy": true,
                    "searching": true,
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true,
                    "language": {
                        "sSearch": "Buscar",
                        "lengthMenu": "Filtrar por _MENU_",
                        "zeroRecords": "No hay ningun dato que mostrar",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoFiltered": "(Total de datos: _MAX_)",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Ultimo",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior",
                        }
                    }
                });

            }
        });
    });


    $(document).on('click', '#producto', function () {
          $('body').pleaseWait();
        setInterval(function () {
            parar()
        }, 1000);

        $.ajax({
            dataType: 'html',
            url: 'producto.php',
            async: "false",
            success: function (postMessage) {

                $('#contenido').empty();
                $('#contenido').html(postMessage);
                $('#tblProducto').DataTable({
                    "pageLength":5,
                    "destroy": true,
                    "searching": true,
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true,
                    "language": {
                        "sSearch": "Buscar",
                        "lengthMenu": "Filtrar por _MENU_",
                        "zeroRecords": "No hay ningun dato que mostrar",
                        "info": "Pagina _PAGE_ de _PAGES_",
                        "infoFiltered": "(Total de datos: _MAX_)",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Ultimo",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior",
                        }
                    }
                });

            }
        });
        
        
        
    });

    function parar() {
        $('body').pleaseWait('stop');
    }

$(document).on('click','#slider',function(){
    $.ajax({
        dataType:'html',
        url:'./vistas/slider.php',
        async:"false",
        success:function(data){
            $('#contenido').empty();
            $('#contenido').html(data);
        }

    });
});

});
