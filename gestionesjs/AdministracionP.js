/*$('#myModal').on('shown.bs.modal',function(){
    $('#btnNuevo').focus();
});*/

$(document).ready(function() {

$(document).on('click','#inicio',function (){
    var lb = new $.LoadingBox();


setTimeout(function(){
  lb.close();
}, 1000);

});


$(document).on('click','#usuario',function (){


    $.ajax({
        url: "usuarios.php",
        dataType: 'html',
        async: false,
        success: function(data) {
            $('#contenido').empty();
            $('#contenido').html(data);
            $('#tblUsuarios').DataTable({
                "destroy":true,
                "searching":true,
                "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                "language":{
                    "sSearch":"Buscar",
                 "lengthMenu": "Filtrar por _MENU_",
                "zeroRecords": "No hay ningun dato que mostrar",
                "info": "Pagina _PAGE_ de _PAGES_",
                "infoFiltered": "(Total de datos: _MAX_)",
                "oPaginate":{
                   "sFirst":"Primero",
                    "sLast":"Ultimo",
                    "sNext":"Siguiente",
                    "sPrevious":"Anterior",
                }
                }
    });
        }
    });
});



$(document).on('click','#proveedores',function(){

    $.ajax({
        dataType:"html",
        url:"proveedores.php",
        async:"false",
        success:function(data){
            $('#contenido').empty();
            $('#contenido').html(data);
            $('#tblProveedor').DataTable({
        "destroy":true,
        "searching":true,
         "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                "language":{
                    "sSearch":"Buscar",
                 "lengthMenu": "Filtrar por _MENU_",
                "zeroRecords": "No hay ningun dato que mostrar",
                "info": "Pagina _PAGE_ de _PAGES_",
                "infoFiltered": "(Total de datos: _MAX_)",
                "oPaginate":{
                   "sFirst":"Primero",
                    "sLast":"Ultimo",
                    "sNext":"Siguiente",
                    "sPrevious":"Anterior",
                }
                }
    });

        }
    });



});


    $(document).on('click','#categorias',function(){
        alert();
    });


});
