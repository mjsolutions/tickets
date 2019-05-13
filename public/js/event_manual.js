var seccion = '';
var tipo = '';
var get_map_seat = base_path + '/api/getMapAsientos/' + table;
		
function print_section(query, align, stage){

	let asientos = "", html = "", status = "", currentRow = "", fila = "", i=0;

	if(query[i].status != 0){
		status = 'ocupado';
	}

	query[i].fila == special_char_n? fila = 'Ñ': fila = query[i].fila;

	asientos = '<span class="row-name center-align">'+ fila +'</span><a href="javascript:;" class="asiento '+status+'" data-info="'+query[i].id+'|'+query[i].asiento+'|'+fila+'">'+ query[i].asiento +'</a>';
	currentRow = query[i].fila;
	i++;
	status = "";


	while(i<query.length){
		if(query[i].status != 0){
			status = 'ocupado';
		}

		query[i].fila == special_char_n? fila = 'Ñ': fila = query[i].fila;

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

function set_values_for_submit(asientos) {
	$("#form_type").val(tipo);
	$("#ticket-message").html('');
	$("#form_zona").val(seccion);
	$("#form_precio").val(precios[seccion]);
	$("#form_asiento").val(asientos);
	$("#checkout-form").submit();
}

$(".block-hover").click(function(){

	$("#mapa-asientos").css('text-align', 'center');
	$("#mapa-asientos").html('<img src="'+base_path+'/img/loading.gif">');
	$("#mapa-escenario").attr('class', 'hidden');

	let bloque = $(this).attr('id'),
		bloque_name = $(this).data('nombre-bloque'),
		order_fila = $(this).data('order-fila'),
		order_asiento = $(this).data('order-asiento'),
		align = $(this).data('align'),
		stage = $(this).data('stage');
	
	seccion = $(this).data('seccion');
	tipo = $(this).data('tipo');

	if(tipo == 'numerado'){

		$("#info-title-section").html(seccion + ' <small>'+bloque_name+ '</small>');
		$.ajax({
			url: get_map_seat + '/' + bloque + '/' + order_fila + '/' + order_asiento,
			method: 'GET',
			success: function(res){
				print_section(res, align, stage);
				$("#checkout").removeClass('hide');
			},
			error: function(res){
				alert(res);
			}
		});
	}else{
		$("#info-title-section").html(seccion);
		$("#mapa-asientos").html('<div class="input-field col s12 left-align"><input id="num_asientos" type="number" class="validate" step="1" min="1" max="8"><label for="num_asientos" data-error="Elije un valor entre 1 y 8">Selecciona número de asientos</label><br><small class="grey-text"><i>* máximo 8 lugares</i></small></div>');
		$("#checkout").removeClass('hide');
	}
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
		

	if(tipo == 'general'){

		asientos = $("#num_asientos").val();

		if(asientos > 0 && asientos < 9){

			set_values_for_submit(asientos);
			
		}


	}else{

		let asientos = [];

		if($(".seleccionado").length > 0){			

			$(".seleccionado").each(function(i, item){

				asientos.push( $(item).data('info') );

			});

			set_values_for_submit(asientos);

		}else{
			$("#ticket-message").html('* Debes seleccionar al menos un lugar antes de continuar');
		}
	}


});