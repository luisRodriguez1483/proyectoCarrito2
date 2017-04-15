$(document).on('click', '#btnNuevoRegCategoria', function () {
    $.ajax({
        dataType: 'html',
        url: './formularios/form_categoria.php',
        async: 'false',
        success: function (form_categoria) {
            $('#modal').dialog({
                title: "Gestion de Categorias",
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
            $('#modal').html(form_categoria);
        }

    });
});

$(document).on('click','#btnRegCategoria',function(){
    var categoria = $('#txtcategoria').val();
    alert(categoria);

    $.ajax({
        type:"POST",
        url:"./gestionesphp/insertarCategoria.php",
        data:{
            categoria:categoria
        },
        success:function(msgBandera){
            if(msgBandera == 1){

                swal({
                    title:'Exito',
                    text:'El registro se realizo con exito',
                    type:'success',
                    showConfirmButton:true},
                     function(){
                    window.location.reload();

                });


               }else{
                   alert(msgBandera);
               }
        }

    });
});

$(document).on('click','#updateCategoria',function(){
   var idCategoria = $(this).parents("tr").find("td").eq(0).html();

    alert(idCategoria);
    $.ajax({
        type:'POST',
        url:"./formularios/form_actualizar_cate.php",
        data:{idCategoria:idCategoria},
        success:function(msgBandera){

             $('#modal').dialog({
                title: "Gestion de Categorias",
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

            $('#modal').html(msgBandera);

        }
    });

});


$(document).on('click','#btnActCategoria',function(){

    swal({
     title:"¿Esta seguro que desea continuar con esta accion?",
        text:"No podras deshacer estos cambios",
        type:"warning",
        showCancelButton:true,
        cancelButtonText:"Cancelar",
        showConfirmButton:true,
        confirmButtonText:"Confirmar",
        closeOnConfirm:false
    },function(){
       var id = $('#idCate').val();
    var categoria = $('#txtcategoria').val();

    $.ajax({
        type:'POST',
        url:'./gestionesphp/actualizarCategoria.php',
        data:{
            id:id,
            categoria:categoria
        },success:function(postMessage){
            if(postMessage == 1){
               swal({
                   title:"Hecho",
                   text:"El registro se actualizado con exito",
                   type:"success",
                   showConfirmButton:true
               },function(){
                   window.location.reload();

               });
               }else{
                   alert(postMessage);
               }
        }
    });

    });

});



$(document).on('click','#removeCategoria',function(){
     var idCategoria = $(this).parents("tr").find("td").eq(0).html();
    swal({
     title:"¿Esta seguro que desea continuar con esta accion?",
        text:"No podras deshacer estos cambios",
        type:"warning",
        showCancelButton:true,
        cancelButtonText:"Cancelar",
        showConfirmButton:true,
        confirmButtonText:"Confirmar",
        closeOnConfirm:false
    },function(){
        $.ajax({
            type:'POST',
            url:'./gestionesphp/eliminarCategoria.php',
            data:{
                idCategoria:idCategoria
            },success:function(postMessage){

                if(postMessage == 1){
               swal({
                   title:"Hecho",
                   text:"El registro se ha eliminado con exito",
                   type:"success",
                   showConfirmButton:true
               },function(){
                   window.location.reload();
               });
               }else{
                   alert(postMessage);
               }



            }
        });


    });



});
