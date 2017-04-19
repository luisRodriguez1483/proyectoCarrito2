$(document).on('click','#btnAgregarACarrito',function(){
    var id = $('#idProducto').val();
    var cantidad = $('#cantidad').val();

if(cantidad != 0){
$.ajax({
    type:'POST',
    url:'carritoCompras.php',
    data:{
        id:id,
        cantidad:cantidad
    },success:function(msgBandera){
        if(msgBandera == 1){
            swal({
                title:'Lo sentimos :(',
                text:'De tener un cuenta para poder adquirir este producto',
                type:'error',
                showConfirmButton:true},
                function(){
        window.location.href = './formularios/form_cliente.php';
            });

        }
    }
});
}else{
    swal('ERROR','Debe agregar la cantidad deseada','error');
}
    
});