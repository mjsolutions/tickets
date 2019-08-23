@extends('layouts.main')

@section('title', 'Mis eventos')

@section('description', '')

@section('styles')
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<style type="text/css">
	.event-title {
		display: inline-block;
	    background: #FFF;
	    color: #08566f;
	    margin: 0;
	    padding: 0.7rem;
	    float: right;
	    border: 1px solid #d4d4d4;
	    border-bottom: none;
	    border-top-left-radius: 3px;
	    border-top-right-radius: 3px;
	}
	.table-detalles th, .table-detalles td, .table-secciones th, .table-secciones td { padding: 3px 10px; }
	/*.table-detalles tr, .table-secciones tr { padding: 0 10px; }*/
	.table-detalles th { 
		text-align: center;
		color: #FFF;
		border-radius: 0;
	}
	.table-detalles thead { background-color: #006c8e }
	table.table-secciones th { text-align: left;  }
	.row .col.card {
		padding: 0;
		margin-top: 0;
	}
	.btn-status {
		text-transform: none;
	    padding: 0 15px;
	    margin-bottom: 0;
	    font-size: 1rem;
	    line-height: 1.8rem;
	    height: 1.8rem;
	}
	.btn-status .fa {
		font-size: 14px;
	}

	@media screen and (min-width: 992px) {
		.card.horizontal .card-image {
			max-width: 12%;
		}
		.card.horizontal .card-stacked {
			max-width: 88%;
		}
	}
	@media screen and (max-width: 991px){
		.card.horizontal .card-image {
			max-width: 30%;
		}
		.card.horizontal .card-stacked {
			max-width: 70%;
		}
	}
	@media screen and (max-width: 600px){
		.card.horizontal {
			display: block;
		}
		.card.horizontal .card-image,
		.card.horizontal .card-stacked {
			max-width: 100%;
			width: 100%;
		}
	}
</style>
@endsection

@section('content')

<div class="image-header bg-gradiente overlay">
	<div class="row white-text">
		<h4>Mis Eventos</h4>
		<div class="divider"></div>
	</div>
</div>

<div class="container pt-40">
	
	<div class="row">
		<div class="col l2 m3 s12">
			@include('layouts.nav-userpanel')
		</div>

		<div class="col m9 l10">

			@foreach($eventos as $evento)
			@php
				extract($evento);
			@endphp
			
			<div class="col s12">

				<h5 class="event-title"><b>{{ mb_strtoupper($info->artista, 'UTF-8') }}</b></h5>
				<div class="col s12 card horizontal">
					<div class="card-image">
						<img src="{{ asset('img').'/'.$info->url_imagen }}" class="materialboxed responsive-img">
					</div>
					<div class="card-stacked">
						<table class="table-detalles centered">
							<thead>
								<tr>
									<th>Ciudad:</th>
									<th>Lugar:</th>
									<th>Fecha:</th>
									<th>Hora:</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ $info->municipio }}</td>
									<td>{{ ucwords($info->lugar) }}</td>
									<td>
									@php
									$fecha = new DateTime($info->fecha);
									echo $fecha->format('d/m/Y');  
									@endphp
									</td>
									<td>{{ $fecha->format('H:i') }} hrs.</td>
								</tr>
							</tbody>
						</table>
						<table class="table-detalles centered">
							<thead>
								<tr>
									<th>Sección:</th>
									<th>Fila/Asiento:</th>
									<th style="width: 280px;">Status:</th>
								</tr>
							</thead>
							<tbody>
							@foreach($boletos->unique('seccion') as $data)
							@php $seccion = $data->seccion @endphp
							<tr>
								<td>{{ $seccion }}</td>
								<td>
									@php
									$fila_asiento = "";
									if(strtolower($boletos->where('seccion', $seccion)->where('status', 2)->first()->fila) == 'Sin fila'){
										$fila_asiento = $boletos->where('seccion', $seccion)->where('status', 2)->count().' asientos';
									}else{
										foreach ($boletos->where('seccion', $seccion)->where('status', 2) as $boleto) {
											$fila_asiento .= " *".$boleto->fila.' '.$boleto->asiento;
										}										
									}
									echo $fila_asiento;
									@endphp
								</td>
								<td style="width: 280px;">
									<a href="{{ route('cliente.ticket', ['evento' => $info, 'seccion' => $seccion]) }}" class="btn btn-status waves-light waves-effect btn-ticket"><b>Descargar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
								</td>
							</tr>
							@endforeach

							@foreach($boletos->unique('seccion') as $data)
							@php $seccion = $data->seccion @endphp
							<tr>
								<td>{{ $seccion }}</td>
								<td>
									@php
									$fila_asiento = "";
									if(strtolower($boletos->where('seccion', $seccion)->where('status', 3)->first()->fila) == 'Sin fila'){
										$fila_asiento = $boletos->where('seccion', $seccion)->where('status', 3)->count().' asientos';
									}else{
										foreach ($boletos->where('seccion', $seccion)->where('status', 3) as $boleto) {
											$fila_asiento .= " *".$boleto->fila.' '.$boleto->asiento;
										}										
									}
									echo $fila_asiento;
									@endphp
								</td>
								<td style="width: 280px;">
									<a href="javascript:void(0)" class="btn btn-status waves-light waves-effect disabled"><b>Pendiente de pago</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
								</td>
							</tr>
							@endforeach
										
							</tbody>
						</table>
						
					</div>
				</div>
				
			</div>

			@endforeach

		</div>
	</div>

</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$('.btn-ticket').click(function(){
		$(this).addClass('disabled');
		$(this).html('Generando boletos...');
	});
</script>
@endsection