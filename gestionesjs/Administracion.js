$(document).on('click','#inicio',function (){
    alert();
});


$(document).on('click','#usuario',function (){
    $.ajax({
        url: "usuarios.php",
        dataType: 'html',
        async: false,
        success: function(data) {
            $('#contenido').html(data);     
            $('#tblUsuarios').DataTable({
         "bPaginate": true,
                "bLengthChange": true,
                "bFilter": true,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": true,
                "language":{
                 "lengthMenu": "_MENU_ Datos por pagina",
                "zeroRecords": "No hay ningun dato que mostrar",
                "info": "Pagina _PAGE_ de _PAGES_",
                "infoFiltered": "(Total de datos: _MAX_)"
                }
    });
        }
    });
});
$(document).on('click','#btnImgAgregarUsu',function (){
    $.ajax({
        url: "./formularios/form_usuario.php",
        dataType: 'html',
        async: false,
        success: function(data) {
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

$(document).on('click','#update',function (){
    var id = $(this).parents("tr").find("td").eq(0).html();
            
            $.ajax({
                type: 'POST',
                url: "./formularios/form_actualizar_usu.php",
                data: {id:id},
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

$(document).on('click','#salir',function(){
   $.ajax({
       url
   });
});

