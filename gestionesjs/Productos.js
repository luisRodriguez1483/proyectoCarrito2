
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
    var producto = $('#txtnommbreproducto').val();
    var descripcion = $('#txtcaracteristicas').val();
    var categoria = $('#tcat').val();
    var proveedor = $('#tprov').val();
    var existencia = $('#txtexistencia').val();
    var pCompra = $('#txtcompra').val();
    
    
    if(producto.trim()=="" || descripcion.trim()=="" || categoria == 0 || proveedor == 0 || existencia.trim() == "" || pCompra.trim() == ""){
            swal('ERROR','Debe llenar todos los campos','error');
       }else{

            /*NOTA IMPORTANTE:
    La funcion "FormData" permite obtener todos los valores de un formulario no importando el tipo
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
            if(msgBnd == 1){
               swal('ERROR','Debe llenar todos lo campos','error');

               }else if(msgBnd == 2){
                         swal('ERROR','Este tipo de archivo no es valido','error');
                        
               }else if(msgBnd == 3){
                        alert(msgBnd);
             }else if(msgBnd == 4){
                    swal({
                        title:"Exito",
                        text:"El registro se ha realizado con exito",
                        type:"success",
                        showConfirmButton:true
                    },
                        function(){
                            window.location.reload();
                    });
             }else{
                 alert(msgBnd);
             }
            
        }
    });
      
       }
});

$(document).on('click','#updateProducto',function(){
var id = $(this).parents("tr").find("td").eq(0).html();
$.ajax({
    type:'POST',
    url:'./formularios/form_actualizar_producto.php',
    data:{id:id},
    success:function(formulario){
 $('#modal').dialog({
                title: "Gestion de Productos",
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
            $('#modal').html(formulario);
    }
});
});

$(document).on('click','#btnActProducto',function(){
   swal({

            title: "¿Seguro que desea continuar con esta accion?",
            text: "No podras deshacer estos cambios",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            showConfirmButton: true,
            confirmButtonText: "Confirmar",
            closeOnConfirm: false
        },function(){

    var producto = $('#txtnommbreproducto').val();
    var descripcion = $('#txtcaracteristicas').val();
    var categoria = $('#tcat').val();
    var proveedor = $('#tprov').val();
    var existencia = $('#txtexistencia').val();
    var pCompra = $('#txtcompra').val();
    
    
    if(producto.trim()=="" || descripcion.trim()=="" || categoria == 0 || proveedor == 0 || existencia.trim() == "" || pCompra.trim() == ""){
            swal('ERROR','Debe llenar todos los campos','error');
       }else{
  var datosFormulario = new FormData($('#formularioProducto')[0]);
   $.ajax({
        type:'POST',
        url:'./gestionesphp/actualizarProducto.php',
        data:datosFormulario,
        contentType:false,
        processData:false,
        success:function(msgBnd){

            alert(msgBnd);
           /* if(msgBnd == 1){
               swal('ERROR','Debe llenar todos lo campos','error');

               }else if(msgBnd == 2){
                         swal('ERROR','Este tipo de archivo no es valido','error');
                        
               }else if(msgBnd == 3){
                        alert(msgBnd);
             }else if(msgBnd == 4){
                    swal({
                        title:"Exito",
                        text:"El registro se ha realizado con exito",
                        type:"success",
                        showConfirmButton:true
                    },
                        function(){
                            window.location.reload();
                    });
             }else{
                 alert(msgBnd);
             }*/
            
        
        }
    });


       }


        });
});