
$(document).ready(function(){
    $('#txtexistencia').spinner();
});

$(document).on('click','#btnNuevoAgregarProducto',function(){
    $.ajax({
        dataType:'html',
        url:'./formularios/form_producto.php',
        success:function(formulariosProducto){
             $('#modal').dialog({
        title: "Gestion de Productos",
        width: 650,
        height: 500,
        show: "fold",
        hide: "scale",
        resizable: "false",
        my: "center",
        at: "center",
        of: window,
        });
            $('#modal').html(formulariosProducto);
        }
    });
});


$(document).on('click','#btnRegProducto',function(e){
 e.preventDefault();



   
    /*NOTA IMPORTANTE:
    Esta function permite obtener todos los valores de un formulario no importando el tipo
    podria funcionar metodo serialize pero solo limita a
     obteber los valores de cajas de texto combos etc mas no tipo file*/
    var datosFormulario = new FormData($('#formularioProducto')[0]);

    $.ajax({
        type:'POST',
        url:'./gestionesphp/insertarProducto.php',
        data:datosFormulario,
        contentType:false,
        processData:false,
        success:function(msgBnd){
            alert(msgBnd);
        }
    });
});