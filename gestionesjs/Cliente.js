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
alert("funciona boton");
});