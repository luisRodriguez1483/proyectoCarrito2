

$(document).on('click','#btnNuevoAgregarProve',function (){

    $.ajax({
        url:'./formularios/form_proveedor.php',
        dataType:'html',
        success: function (data){
        $('#modal').dialog({
            title: "Gestion de Proveedores",
        width: 650,
        height: 500,
        show: "fold",
        hide: "scale",
        resizable: "false",
        my: "center",
        at: "center",
        of: window,
        });
        $('#modal').html(data);
    }

    });

});

$(document).on('click','#btnInsertarProveedor',function(){
    var empresa = $('#txtnombreempresa').val();
    var contacto = $('#txtcontacto').val();
    var telefono = $('#txttelefono').val();
    var celular = $('#txttelefonocelular').val();
    var correo = $('#txtcorreo').val();
    var idEstado = $('#testadoprov').val();
    var idMunicipio = $('#tmunicipioprov').val();
    var idCol = $('#tcoloniaprov').val();
    var cp = $('#tcpprov').val();

    if(empresa.trim() == "" || contacto.trim() == "" || telefono.trim() == ""|| celular.trim() == ""|| correo.trim() == "" || idEstado == 0 || idMunicipio == 0 || idCol == 0 || cp== 0){
        
        swal("No debe dejar campos vacios","","error");

    }else{
        
        if(correo.indexOf('@', 0) == -1 || correo.indexOf('.', 0) == -1){
            swal("Correo invalido","Por favor ingrese nuevamente el correo","error");
        }else{
        $.ajax({
        type:'POST',
        url:'./gestionesphp/insertarProvee.php',
data:{empresa:empresa,
      contacto:contacto,
      telefono:telefono,
      celular:celular,
      correo:correo,
      idEstado:idEstado,
      idMunicipio:idMunicipio,
      idCol:idCol,
      cp:cp
     },
        success: function(postMessage){
            if(postMessage == 1){
               
                swal({title:'¡Exito!',
                      text:'El registro se ha realizado correctamente',
                      type:"success",
                     showConfirmButton:true},
                     function (){
                        window.location.reload();
                     });
               }else {
                   
                   alert(postMessage);
               }
            
            
        }

    });
      
        }


    }
});
$(document).on('click','#removeProveedor',function(){

var idProveedor = $(this).parents("tr").find("td").eq(0).html();
    swal({

        title:"¿Seguro que desea continuar con esta accion?",
        text:"No podras deshacer estos cambios",
        type:"warning",
        showCancelButton:true,
        cancelButtonText:"Cancelar",
        showConfirmButton:true,
        confirmButtonText:"Confirmar",
        closeOnConfirm:false},
         function(){

    $.ajax({
        type:'POST',
        url:'./gestionesphp/eliminarProvee.php',
        data:{idProveedor:idProveedor},
        success:function(postMessage){

            if(postMessage == 1){
               swal({
                   title:'¡Exito!',
                   text:'El registro de ha eliminado correctamente',
                   type:'success',
                   showConfirmButton:true},
                    function(){
                   window.location.reload();
               });

               }else {

                   alert(postMessage);
               }

        }
    });


    });

});

$(document).on('click','#updateProveedor',function(){

  var idProveedor = $(this).parents("tr").find("td").eq(0).html();
    $.ajax({

        type:'POST',
        url:'./formularios/form_actualizar_prove.php',
        data:{idProveedor:idProveedor},
        success:function(postMessage){

            $('#modal').dialog({
            title: "Gestion de Proveedores",
        width: 650,
        height: 500,
        show: "fold",
        hide: "scale",
        resizable: "false",
        my: "center",
        at: "center",
        of: window,
        });
        $('#modal').html(postMessage);
        }
    });

});

$(document).on('click','#btnActualizarProveedor',function(){
    swal({

        title:"¿Seguro que desea continuar con esta accion?",
        text:"No podras deshacer estos cambios",
        type:"warning",
        showCancelButton:true,
        cancelButtonText:"Cancelar",
        showConfirmButton:true,
        confirmButtonText:"Confirmar",
        closeOnConfirm:false},
         function(){

    var id = $('#idProv').val();
    var empresa = $('#txtnombreempresa').val();
    var contacto = $('#txtcontacto').val();
    var telefono = $('#txttelefono').val();
    var celular = $('#txttelefonocelular').val();
    var correo = $('#txtcorreo').val();
    var idEstado = $('#testadoprov').val();
    var idMunicipio = $('#tmunicipioprov').val();
    var idCol = $('#tcoloniaprov').val();
    var cp = $('#tcpprov').val();

        $.ajax({
            type:'POST',
            url:'./gestionesphp/actualizarProvee.php',
            data:{
                id:id,
                empresa:empresa,
                contacto:contacto,
                telefono:telefono,
                celular:celular,
                correo:correo,
                idEstado:idEstado,
                idMunicipio:idMunicipio,
                idCol:idCol,
                cp:cp
            },
            success:function(postMessage){
                if(postMessage == 1){

                    swal({
                        title:'Exito',
                        type:'success',
                        text:'El registro se actualizo con exito',
                        showConfirmButton:true},
                         function(){
                        window.location.reload();

                    });
                   }else {
                       alert(postMessage);
                   }
            }
        });


    });
});

$(document).on('change','#testadoprov',function(){
    var idEstado = $('#testadoprov').val();

    $.ajax({
        type:'POST',
        url:'./formularios/combo_municipio.php',
        data:{idEstado:idEstado},
        success: function (comboMun){
            $('#tmunicipioprov').html(comboMun);
        }

    });
});

$(document).on('change','#tmunicipioprov',function(){
    var idMunicipio = $('#tmunicipioprov').val();


    $.ajax({
        type:'POST',
        url:'./formularios/combo_colonia.php',
        data:{idMunicipio:idMunicipio},
        success: function(colonias){
            $('#tcoloniaprov').html(colonias);

        }
    });
});

$(document).on('change','#tcoloniaprov',function(){
    var idCol = $('#tcoloniaprov').val();


    $.ajax({
        type:'POST',
        url:'./formularios/combo_cp.php',
        data:{idCol:idCol},
        success: function(cp){
            $('#tcpprov').html(cp);
        }
    });
});
