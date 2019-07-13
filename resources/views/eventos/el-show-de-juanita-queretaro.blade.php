@extends('layouts.main')

@section('title', 'El Show de Juanita Querétaro')

@section('description', 'El Show de Juanita en Querétaro, 22 de agosto 2019, 21:00 hrs., Teatro del IMSS')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/el-show-de-juanita-queretaro" />
<meta property="og:title" content="El Show de Juanita" />
<meta property="og:description" content="El Show de Juanita, Queretaro 22 de agosto, Teatro del IMSS, 21:00 hrs boletos en EL Portón de Santiago y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/juanita-queretaro.jpg" />
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>El Show de Juanita</h4>
		<div class="divider"></div>
		<p><i>Querétaro - Teatro del IMSS</i></p>
		<p><i>22 de agosto - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#descripcion">Descripción</a></li>
				<li class="tab "><a href="#biografia">Biografía</a></li>
				<li class="tab "><a href="#lugares">Boletos</a></li>
			</ul>
		</div>
		<div id="descripcion" class="col s12 tab-content">

			<div class="col s8 offset-s2 m4 offset-m1 mb-30">
				<img src="{{ asset('img/juanita-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$ 200</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$ 150</span> MXN.</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey lighten-1">Plata</div>
							</header>
							<div class="price col s12"><span>$ 100</span> MXN.</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
                    <div class="col s10 offset-s1 m8 offset-m2">
                        <p> * Al realizar tu compra en línea se realiza un cargo extra por concepto de servicio.</p>
                        <p class="mb-0"> * Informes y confirmación de tu compra:</p>
                        <ul style="margin-top: 0;padding-left: 15px;">
                            <li><i style="background-color: #4caf50; color: #fff; border-radius: 50%;" class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=524427400671" target="_blank">442-740-0671</a></li>
                            <li><i style="background-color: #4caf50; color: #fff; border-radius: 50%;" class="fa fa-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=524521741255" target="_blank">452-174-1255</a></li>
                        </ul>
                    </div>
					
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
			<div class="col s12">	
		        <p>Marco Polo, nacido en la ciudad de Monterrey.</p>
				<p>Desde que tenía 5 años su hobbie era ver obras de teatro, pero fue hasta secundaria cuando se dio cuenta de su habilidad vocal ya que imitaba las voces de sus maestros, su amor por el arte del espectáculo lo llevó a estudiar en el Sistema de Educación Artística de Monterrey desde donde es agresado.</p>
				<p>Con su actuación en la obra "Tócala de nuevo" logró  más de 350 representación posicionandose como una de las puestas en escenas favoritas de la ciudad.</p>
				<p>Su personaje de "Juanita 'la niña más caballona y bipolar de México' lo ha colocado como uno de los comediantes y actores favoritos del país, y hasta el momento continúa en el gusto del público.</p>
				<p>Su personaje de "Juanita" lo ha llevado al mundo del Internet, ya que a través de su canal de youtube  cuenta las historias de 'niña' con los que ha conseguido miles de reproducciones y más 24 mil suscriptores. </p>			
			</div>
			<div class="clearfix"></div>			
		</div>

		<div id="lugares" class="col s12 tab-content">
            
            <div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas en:</h5>
			</div>

			<div class="col s12">									
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5 class="raleway"><b>El Portón de Santiago</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <p> Av. Prol. Luis Pasteur 37, Centro, 76000 Santiago de Querétaro, Qro.</p></li>
							<li><i class="fa fa-facebook-official"></i><p><a title="website" href="https://www.facebook.com/ElPortondeSantiago/" target="_blank">https://www.facebook.com/ElPortondeSantiago/</a></p></li>
						</ul>
					</div>
				</div>

			</div>	

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/3Tgvd-HbmQk/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/3Tgvd-HbmQk"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Juanita - Caricaturas retro parte 2</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white z-depth-1">
			@include('maps.teatro-imss-queretaro')
		</div>
		<div class="col s12 m6">
			<div class="col s12 mb-15">
				<div class="col s1 grey darken-4" style="height: 25px;"></div>
				<div class="col s11">
					<div class="col s5">Escenario</div>
					<div class="col s7 right-align" id="info-title-section"></div>
				</div>
			</div>
			<div class="col s11 bloque-container">
				
				<div id="mapa-escenario" class=""></div>
				<div id="mapa-asientos" class="col s12"></div>
			</div>
			<div class="col s12 mt-15">
				<p id="ticket-message"></p>
			</div>
			<div class="col s12 center-align mt-15">
				<a href="javascript:;" id="checkout" class="btn waves-effect waves-light orange accent-3 hide">SIGUIENTE</a>
				{!! Form::open(['route'=>'payment.details', 'method'=>'POST', 'id' => 'checkout-form', 'style' => 'display:none;']) !!}

					{!! Form::hidden('asiento', '', ['id' => 'form_asiento']) !!}
					{!! Form::hidden('zona', '', ['id' => 'form_zona']) !!}
					{!! Form::hidden('precio', '', ['id' => 'form_precio']) !!}
					{!! Form::hidden('img', 'img/juanita-queretaro.jpg') !!}
					{!! Form::hidden('evento', 'El Show de Juanita') !!}
					{!! Form::hidden('fecha', '22 de agosto 2019') !!}
					{!! Form::hidden('lugar', 'Teatro del IMSS') !!}
					{!! Form::hidden('ciudad', 'Querétaro') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', 'numerado') !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'juanita_queretaro_22ago') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/el-show-de-juanita-queretaro')) !!}
				{!! Form::close() !!}
			</div>
		</div>
	

	@else

		<p class="center-align raleway">Debes iniciar sesion para poder realizar la compra</p>
		<div class="col s12 center-align">
			<a href="#modal-login" class="modal-login-open btn waves-light orange accent-3">Login</a>
		</div>
	@endif
	</div>
	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">Venta de boletos también en El Portón de Santiago</h5>
			<div class="row">
				<div class="col s6 offset-s3 mt-30">
					<div class="divider"></div>
				</div>
			</div>
			<p class="center-align">Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
			<div class="row center-align">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.17172671282!2d-100.40751538559995!3d20.581043508288417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3452e1c0f96e7%3A0x80b97b2d179ad962!2sTeatro+del+IMSS+Quer%C3%A9taro!5e0!3m2!1ses!2smx!4v1560207714901!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro del IMSS</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. 5 de Febrero 102, <br>Centro, 76000 <br>Santiago de Querétaro, Qro.</li>
			</ul>

		</div>
	</div>
</section>

<div id="modal-video" class="modal modal-large">
	<a href="#!" class="modal-close btn-flat"><i class="material-icons white-text">close</i></a>
	<div class="modal-content black no-padding">
		<iframe id="iframe" width="100%" height="420" src="" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

@endsection

@section('scripts')
	<script>
		var table = 'juanita_queretaro_22ago';
		var base_path = '{{ url('/') }}';
		var precios = {'Diamante': 200, 'Oro': 150, 'Plata': 100};
		var special_char_n = 'N-';

		$('#modal-video-open').leanModal({
			opacity: .8,
			ready: function() {
				var videoSCR = $('#modal-video-open').attr("data-video");
				var videoSCRPlay = videoSCR + "?modestbranding=1&rel=0&controls=1&showinfo=0&html5=1&autoplay=1";
				$("#iframe").attr('src', videoSCRPlay);
			},
		        complete: function() { 
		           $("#iframe").attr('src', $('#modal-video-open').attr("data-video"));
		        }
		    });

	</script>
	<script src="{{asset('js/event_manual_v2.js')}}"></script>

@endsection