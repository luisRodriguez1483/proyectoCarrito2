$(document).on('click','#btnImgAgregarPro',function (){

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
        modal: "true"


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


    if(!empresa.length == 0 || contacto.length != 0 || telefono.length != 0 || celular.length != 0 || correo.length != 0 || idEstado != 0 || idMunicipio != 0 || idCol !=0 || cp!=0){

        alert("manda ajax");
        $.ajax({
        type:'POST',
        url:'./gestionesphp/insertarProvee.php',
data:{empresa:empresa,contacto:contacto,telefono:telefono,celular:celular,correo:correo,idEstado:idEstado,idMunicipio:idMunicipio,idCol:idCol,cp:cp},
        success: function(postMessage){




        }

    });

    }else{

        alert("Debe llenar todos los campos");

    }
});




$(document).on('click','#removeProveedor',function(){

    var conf = confirm("Esta seguro de eliminar a este proveedor");

    // 1 == si
    // 0 == no
    if(conf == 1){
       alert("si");
       }else{
           alert("no");
       }
});




$(document).on('change','#testadoprov',function(){
    var idEstado = $('#testadoprov').val();
    alert(idEstado);
    $.ajax({
        type:'POST',
        url:'./formularios/combo_mun_prove.php',
        data:{idEstado:idEstado},
        success: function (comboMun){
            $('#tmunicipioprov').html(comboMun);
        }

    });
});

$(document).on('change','#tmunicipioprov',function(){
    var idMunicipio = $('#tmunicipioprov').val();

    alert(idMunicipio);
    $.ajax({
        type:'POST',
        url:'./formularios/combo_col_prove.php',
        data:{idMunicipio:idMunicipio},
        success: function(colonias){
            $('#tcoloniaprov').html(colonias);

        }
    });
});

$(document).on('change','#tcoloniaprov',function(){
    var idCol = $('#tcoloniaprov').val();
    alert(idCol);

    $.ajax({
        type:'POST',
        url:'./formularios/combo_cp_prove.php',
        data:{idCol:idCol},
        success: function(cp){
            $('#tcpprov').html(cp);
        }
    });
});
