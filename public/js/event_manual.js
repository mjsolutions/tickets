var seccion = '';
		
function printSection(query, align, stage){

	let asientos = "", html = "", status = "", currentRow = "", fila = "", i=0;

	if(query[i].status != 0){
		status = 'ocupado';
	}

	query[i].fila == 'NN'? fila = 'Ñ': fila = query[i].fila;

	asientos = '<span class="row-name center-align">'+ fila +'</span><a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';
	currentRow = query[i].fila;
	i++;
	status = "";


	while(i<query.length){
		if(query[i].status != 0){
			status = 'ocupado';
		}

		query[i].fila == 'NN'? fila = 'Ñ': fila = query[i].fila;

		if(currentRow == query[i].fila) {
			asientos += '<a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';					
		}else{
			currentRow = query[i].fila;

			html += asientos +'<br>';

			html += '<span class="row-name center-align">'+ fila +'</span><a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';
			asientos = "";
			
		}
		if(i == query.length - 1){
			html += asientos +'<br>';
		}

		i++;
		status = "";
	}

	$("#mapa-escenario").attr('class', stage+'-map');
	$("#mapa-asientos").css('text-align', align);
	$("#mapa-asientos").html(html);
}

function setPrecio() {

	return precios[seccion];
}

$(".block-hover").click(function(){

	$("#mapa-asientos").css('text-align', 'center');
	$("#mapa-asientos").html('<img src="'+base_path+'/img/loading.gif">');
	$("#mapa-escenario").attr('class', 'hidden');

	let bloque = $(this).attr('id'),
		order_fila = $(this).data('order-fila'),
		order_asiento = $(this).data('order-asiento'),
		align = $(this).data('align'),
		stage = $(this).data('stage');
	
	seccion = $(this).data('seccion');

	$("#info-title-section").html(seccion + ' <small>bloque'+bloque.substring(bloque.indexOf('-')) + '</small>');

	$.ajax({
		url: get_map_seat + '/' + bloque + '/' + order_fila + '/' + order_asiento,
		method: 'GET',
		success: function(res){
			printSection(res, align, stage);
			$("#checkout").removeClass('hide');
		},
		error: function(res){
			alert(res);
		}
	});
});

$("#mapa-asientos").on('click', '.asiento',function(){

	if(!$(this).hasClass('ocupado')){


		if($(".seleccionado").length < 8){
			$(this).toggleClass('seleccionado');
		}else if($(".seleccionado").length == 8 && $(this).hasClass('seleccionado')){
			$(this).removeClass('seleccionado');
		}

	}

});

$("#checkout").click(function(){
	
	let ids = '',
		asientos = [],
		precio = setPrecio(); 

	if($(".seleccionado").length > 0){

		$("#ticket-message").html('');

		$("#form_zona").val(seccion);
		$("#form_precio").val(precio);

		$(".seleccionado").each(function(i, item){

			asientos.push( $(item).data('info') );

		});

		$("#form_asiento").val(asientos);
		$("#checkout-form").submit();

	}else{
		$("#ticket-message").html('* Debes seleccionar al menos un lugar antes de continuar');
	}

});