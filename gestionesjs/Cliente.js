$(document).on('click','#btnCliSalir',function(){
$.ajax({
    type:'POST',
    url:'./logout.php',
    data:{},
    success:function(data){
        window.location.href = './index.php';

    }
});
});

$(document).on('click','#btnRegCliente',function(){
var nomCliente = $('#txtcliente').val();
var usuario = $('#txtusuario').val();
var pass = $('#txtpass').val();
var confPass = $('#txtconfpass').val();
var telefonoFijo = $('#txttelefono').val();
var celular = $('#txttelefonocelular').val();
var correo = $('#txtcorreo').val();
var estado = $('#testadocli').val();
var mun = $('#tmunicipiocli').val();
var col = $('#tcoloniacli').val();
var cp = $('#tcpcli').val();
var tipo = "Cliente";
var status = "Activo";

if(nomCliente.trim() == "" || usuario.trim() == "" || pass.trim() == "" || confPass.trim() == "" 
|| telefonoFijo.trim() == "" || celular.trim() == "" || correo.trim() == "" || estado  == 0
|| mun == 0 || col == 0 || cp == 0){
    swal("ERROR","Debe llenar todos los campos",'error');

}else if(pass!=confPass || confPass!=pass){
swal("Su contraseña no coincide","Por favor verifique que sean correctas",'error');

}else if(correo.indexOf('@', 0) == -1 || correo.indexOf('.', 0) == -1){
swal("ERROR","Por favor veifique que si correo sea correcto",'error');
}else{
    $.ajax({
        type:'POST',
        url:'../gestionesphp/insertarCliente.php',
        data:{
            nomCliente:nomCliente,
            usuario:usuario,
            pass:pass,
            telefonoFijo:telefonoFijo,
            celular:celular,
            correo:correo,
            estado:estado,
            mun:mun,
            col:col,
            tipo:tipo,
            status:status
        },
        success:function(msgRespuesta){
alert(msgRespuesta);
        }
    });
}
   



});