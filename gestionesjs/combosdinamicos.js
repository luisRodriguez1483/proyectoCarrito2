	$(document).on('change', '#testadocli', function(){

		var idestadocli = $('#testadocli').val();

	$.ajax({
		url:"combo_municipio.php",
		type:"POST",
		data:{idestadocli:idestadocli},
		success: function(idmunicipio){
			$('#tmunicipiocli').html(idmunicipio);
		}
	});
	});




	$(document).on('change', '#tmunicipiocli', function(){

		var idmunicipiocli = $('#tmunicipiocli').val();

	$.ajax({
		url:"combo_colonia.php",
		type:"POST",
		data:{idmunicipiocli:idmunicipiocli},
		success: function (idcolonia) {
		  	$('#tcoloniacli').html(idcolonia);
		}
	});
	});



	$(document).on('change', '#tcoloniacli', function(){

		var idcoloniacli = $('#tcoloniacli').val();

	$.ajax({
		url:"combo_cp.php",
		type:"POST",
		data:{idcoloniacli:idcoloniacli},
		success: function (idcp) {
		  $('#tcpcli').html(idcp);
		}
	});
	});


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
