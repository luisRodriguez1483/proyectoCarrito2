
$(document).on('click','#btnIngresar',function (){

    
    var usuario = $('#txtusuario').val();
    var pass = $('#txtpassword').val();
    $.ajax({
        type: 'POST',
        url: "./gestionesphp/inicioSession.php",
        data: {usuario:usuario,pass:pass},
        success: function (bnd) {
            if(bnd == 1){
                alert("El usuario ingresado no existe");
            }else if(bnd == 2){
                alert("La contraseña es incorrecta");
            }else if(bnd == 3){
                alert("Lo sentimos su cuenta no esta disponible");
            }else if(bnd == 4){
                window.location = "administradorPagina.php";
            }else{
                alert(bnd);
            }
        }
        
    });
});

$(document).on('click','#btnSalir',function(){
$.ajax({
    type:"POST",
    url:"./logout.php",
    data:{},
    success:function(data){
            location.href="./index.php"
    }
});

});


$(document).on('click','#btnRegUsuario',function (){
    var usuario = $('#txtusuario').val();
    var pass = $('#txtcontrasenia').val();
    var nivel = $('#cmbNivel').val();
    var status = $('#cmbStatus').val();
    
    $.ajax({
        type: 'POST',
        url: "./gestionesphp/insertarUsuario.php",
        data:{usuario:usuario,pass:pass,nivel:nivel,status:status},
        success: function (bnd) {
            if(bnd == 1){
                alert("La inserción se realizo correctamente");
                window.location.reload();
            }
            
            
        }
        
    });
});

$(document).on('click','#btnActUsuario',function () {
    var respuesta = confirm("Esta seguro que desea continuar");
    if(respuesta == 1){
    
    var id = $('#idUsuario').val(); 
    var usuario = $('#txtusuario').val();
    var pass = $('#txtcontrasenia').val();
    var nivel = $('#cmbNivel').val();
    var status = $('#cmbStatus').val();
    
    $.ajax({
        type: 'POST',
        url: "./gestionesphp/actualizarUsuario.php",
        data:{id:id,usuario:usuario,pass:pass,nivel:nivel,status:status},
        success: function (bnd) {
            if(bnd == 1){
                alert("El usuario fue actualizado correctamente");
                window.location.reload();
            }else {
                alert(bnd);
            }
        }
        
    });
    
    }

});

$(document).on('click','#remove',function (){
    var id = $(this).parents("tr").find("td").eq(0).html();
    var confirmacion = confirm("Esta seguro que desea eliminar");
    if (confirmacion == 1) {
         $.ajax({
        type: 'POST',
        url: "./gestionesphp/eliminarUsuario.php",
            data: {id:id},
            success: function (bnd) {
                if(bnd == 1){
                    alert("Eliminado correctamente");
                    window.location.reload();
                }else{
                    alert(bnd);
                }
            }
   });
    }
});
