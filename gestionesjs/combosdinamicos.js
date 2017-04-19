/*INICIAR COMBOS PARA CLIENTES*/
	$(document).on('change', '#testadocli', function(){

		var idEstado = $('#testadocli').val();

	$.ajax({
		url:"../formularios/combo_municipio.php",
		type:"POST",
		data:{idEstado:idEstado},
		success: function(idmunicipio){
			$('#tmunicipiocli').html(idmunicipio);
		}
	});
	});




	$(document).on('change', '#tmunicipiocli', function(){

		var idMunicipio = $('#tmunicipiocli').val();

	$.ajax({
		url:"../formularios/combo_colonia.php",
		type:"POST",
		data:{idMunicipio:idMunicipio},
		success: function (idcolonia) {
		  	$('#tcoloniacli').html(idcolonia);
		}
	});
	});



	$(document).on('change', '#tcoloniacli', function(){

		var idCol = $('#tcoloniacli').val();

	$.ajax({
		url:"../formularios/combo_cp.php",
		type:"POST",
		data:{idCol:idCol},
		success: function (idcp) {
		  $('#tcpcli').html(idcp);
		}
	});
	});

/*TERMINA COMBOS DINAMICOS DE CLIENTE*/
	$(document).on('change', '#testadoprov', function(){

		var idestadoprov = $('#testadoprov').val();

	$.ajax({
		url:"combo_municipio_proveedor.php",
		type:"POST",
		data:{idestadoprov:idestadoprov},
		success: function(idmunicipio){
			$('#tmunicipioprov').html(idmunicipio);
		}
	});
	});


	$(document).on('change', '#tmunicipioprov', function(){

		var idmunicipioprov = $('#tmunicipioprov').val();

	$.ajax({
		url:"combo_colonia_proveedor.php",
		type:"POST",
		data:{idmunicipioprov:idmunicipioprov},
		success: function (idcolonia) {
		  	$('#tcoloniaprov').html(idcolonia);
		}
	});
	});



	$(document).on('change', '#tcoloniaprov', function(){

		var idcoloniaprov = $('#tcoloniaprov').val();

	$.ajax({
		url:"combo_cp_proveedor.php",
		type:"POST",
		data:{idcoloniaprov:idcoloniaprov},
		success: function (idcp) {
		  $('#tcpprov').html(idcp);
		}
	});
	});
