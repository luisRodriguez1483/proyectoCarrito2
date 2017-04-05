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
