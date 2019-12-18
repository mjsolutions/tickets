@extends('layouts.main')

@section('title', 'Los Pioneros del Rock')

@section('description', 'Los Pioneros del Rock, Morelia 29 de noviembre, 21:00 hrs Teatro Morelos, boletos en taquillas del planetario, RS Viajes Centro y bolematico.com')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/pioneros-del-rock-morelia" />
<meta property="og:title" content="Los Pioneros del Rock" />
<meta property="og:description" content="Los Pioneros del Rock, Morelia 29 de noviembre, 21:00 hrs Teatro Morelos, boletos en taquillas del planetario, RS Viajes Centro y bolematico.com" />
<meta property="og:image" content="https://www.bolematico.com/img/pioneros-del-rock-morelia.jpg" />

<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-select-manual.css') }}">
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Los Pioneros del Rock <br><small>Hnos. Carrión, Los Rebeldes del Rock, Los Hooligans</small></h4>
		<div class="divider"></div>
		<p class="mb-0"><i>Teatro Morelos - Morelia</i></p>
		<p class="m-0"><i>29 de noviembre - 21:00 hrs.</i></p>
	</div>
	<a href="#compra" class="btn waves-light waves-effect page-scroll"><b>Comprar</b> <i class="fa fa-ticket" aria-hidden="true"></i></a>
</div>

<section class="container">
	<div class="row">
		<div class="col s12">
			<ul class="tabs">
				<li class="tab "><a class="active" href="#precios">Precios</a></li>
				<li class="tab "><a href="#detalles">Detalles</a></li>
				<li class="tab "><a href="#lugares">Lugares de venta</a></li>
			</ul>
		</div>
		<div id="precios" class="col s12 tab-content">

			<div class="col s8 offset-s2 m3 offset-m1 mb-30 card-flyer">
				<img src="{{ asset('img/pioneros-del-rock-morelia.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m6 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 green">Premium</div>
							</header>
							<div class="price col s12"><span>$850</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 purple lighten-1">VIP</div>
							</header>
							<div class="price col s12"><span>$670</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">Diamante</div>
							</header>
							<div class="price col s12"><span>$530</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 amber darken-1">Oro</div>
							</header>
							<div class="price col s12"><span>$380</span> MXN</div>
						</div>
					</div>

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 grey">Plata</div>
							</header>
							<div class="price col s12"><span>$250</span> MXN</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					<div class="col s10 offset-s1">
						<p>* Al realizar tu compra en línea se realiza un cargo extra de <b>10%</b> por concepto de servicio.</p>
						<p>* Informes: <a href="tel:4521741255" style="background: #4caf50; color: #fff; padding: 5px 10px;">452 174 1255</a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="detalles" class="col s12 tab-content">
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/hnos-carrion-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">Los Hermanos Carrión</h5>
				<p>Banda formada hacia los finales de los `60. Su influencia era del grupo Norteamericano The Everly Brother`s. Fueron en algunos años, el grupo mas representativo de México, también se inclinó por las baladas. </p> <p>Formado originalmente por los hermanos Eduardo Federico y Ricardo Sergio, quienes fueron contagiados por esa movida que llegaba del norte. Así que deciden unirse y tocar rock and roll. </p><p>Los inicios eran en Clubes de tenis, ya que tenían varios contactos para que fueran a tocar, en sus inicios lo hacian por diversión.</p>
				
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/hnos-carrion-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s10 offset-s1 mb-30 mt-30">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s12 m3">
				<img src="{{ asset('img/rebeldes-del-rock-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">Los Rebeldes del Rock</h5>	
				<p>Los Rebeldes del Rock: Grupo pionero del rock and roll mexicano, fundado hacia 1957 por los Hermanos Tena (Americo, Waldo y Polo Tena) como "Los Reyes del Rock".</p>
				<p>Tuvieron como cantantes, en un principio, a Toño de la Villa (quien decía que el mejor rock cantado, era el que se hacía en inglés) y quien al salirse, deja como cantante del grupo a Sammy Fournier. Al poco tiempo, entra otro joven con un tono de voz exquisito, único, nasal, pero que se adecuaba a su estilo de cantar, y deciden sacar a Sammy Fournier (a quien los Hnos. Tena apadrinan cuando Sammy forma su nuevo grupo, 'Sammy y sus Estrellas') para dejar a entrar a Johnny Laboriel. Con él hacen sus primeras presentaciones en Radio y logran un contrato que les abre la posibilidad de salir a la fama. Dicho disco contenía lo que se considera el primer rocanrol en español en transmitirse en la radio mexicana: 'La hiedra venenosa'. Cabe señalar que antes, habían sido grabados Los Black Jeans (La batalla de Jerico/La Cucaracha) y Los Locos del Ritmo (su LP 'Rock!' pero estuvieron enlatados por falta de interés de la disquera. Cuando sale el tema de Los Rebeldes del Rock y ver que había audiencia entre los jóvenes, sacan dichos discos, conviriténdose los tres, en discos con enormes ventas)</p>
			</div>
			<div class="col s10 offset-s1 mb-30 mt-30">
				<div class="divider"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/hooligans-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m9">
				<h5 class="raleway quote">Los Hooligans</h5>
				<p>Aparecieron hacia 1960, como triunfadores de un concurso organizado por Radio Éxitos. Tienen derecho a grabar un disco sencillo (Acapulco Rock/Soñando). Luego graban un primer LP logrando un éxito que se prolongó hasta fines de los años sesenta. Siempre se supieron adaptar a los cambios y gustos musicales de dicha década, lo que les permitió estar siempre en radio y televisión, principalmente en el programa "Orfeon A Go Go", y en varias películas durante sus primeros años</p>
				<p>Graban 4 discos para CBS Columbia entre 1961 y 1963, año en que sale del grupo Ricardo Roca, hermano de César Costa (en realidad se apellidan Roel), quien se hace solista. Funge entonces como vocalista Juan José "Johnny" Ortega, alcanzando altas ventas con su versión al tema "Despeinada". Posteriormente sale este del grupo e ingresarían otros cantantes grabando algunas temas psicodélicos como "Judy con Disfraz" e incluso una bien lograda versión a "Negro es Negro", esto hacia 1966.</p>
				
			</div>
			<div class="col m3 hide-on-small-only">
				<img src="{{ asset('img/hooligans-bio.jpg') }}" class="responsive-img">
			</div>
			
		</div>

		<div id="lugares" class="col s12 tab-content">
			<div class="col s12">
				<h5 class="mb-30 quote">Además de Bolematico, puedes adquirir tus entradas a partir del 11 de noviembre en:</h5>
			</div>

			<div class="col s12 m6">
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.1943227085408!2d-101.18477128552061!3d19.704349286730476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e0d6bca646b%3A0x1b0a3a981724216f!2sRS+Viajes+Centro!5e0!3m2!1ses!2smx!4v1501091355750" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5><b>RS Viajes Centro</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>20 de Noviembre 917, Centro Histórico, 58000 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 01 443 312 4639</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>10:00 a 19:00 hrs. Lunes a Viernes y 10:30 a 14:00 hrs. los Sabados.</p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="https://www.facebook.com/RsViajesCentro/" target="_blank">https://www.facebook.com/RsViajesCentro/</a></p></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="col s12 m6">
				<div class="white z-depth-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.6546912563167!2d-101.18560468584354!3d19.68473203767239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de79c733455%3A0x2bb6c9a37c54bca5!2sPlanetario+de+Morelia!5e0!3m2!1ses!2smx!4v1499195093931" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>

					<div class=" p-30">
						<h5><b>Taquillas del planetario</b></h5>
						<ul class="qcAddress">
							<li><div class="divider"></div></li>
							<li><i class="fa fa-map-marker"></i> <strong>DIRECCIÓN</strong>: <p>Av. Ventura Puente s/n, Félix Ireta, 58070 Morelia, Mich.</p></li>
							<li><i class="fa fa-phone"></i> <strong>TELÉFONO</strong>: <p> 443 232 4400 ext. 160</p></li>
							<li><i class="fa fa-calendar"></i> <strong>HORARIO</strong>: <p>11:00 a 19:00 hrs. Lunes a Sabado. </p></li>
							<li><i class="fa fa-globe"></i> <strong>Website</strong>: <p><a title="website" href="http://ceconexpo.com" target="_blank"></a>http://ceconexpo.com</p></li>
						</ul>
					</div>
				</div>

			</div>			

		</div>

	</div>
</section>
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/jY0s2FhrU50/hqdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/jY0s2FhrU50"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Los Hooligans - Agujetas De Color De Rosa</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">
	<div class="row mt-30">
	@if(Auth()->check())
		<div class="col s12 mb-15">
			<h5 class="mt-30 raleway quote">Da clic en el bloque que deseas para mostrar los asientos disponibles</h5>
		</div>
		<div class="col s12 m6 white div-border" id="svg-container" style="padding-top:10px;">
				@include('maps.teatro-morelos-5s')
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
					{!! Form::hidden('img', 'img/pioneros-del-rock-morelia.jpg') !!}
					{!! Form::hidden('evento', 'Los Pioneros del Rock') !!}
					{!! Form::hidden('fecha', '29 de noviembre 2019') !!}
					{!! Form::hidden('lugar', 'Teatro Morelos') !!}
					{!! Form::hidden('ciudad', 'Morelia, Mich.') !!}
					{!! Form::hidden('hora', '21:00 hrs') !!}
					{!! Form::hidden('event_type', '', ['id' => 'form_type']) !!}
					{!! Form::hidden('impresion_boleto', true) !!}
					{!! Form::hidden('db_table', 'pioneros_del_rock_morelia_29nov') !!}
					{!! Form::hidden('info', '--') !!}
					{!! Form::hidden('select_type', 'manual') !!}
					{!! Form::hidden('url', url('eventos/pioneros-del-rock-morelia')) !!}
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
		<div class="col m8 offset-m2 center-align">
			<p>Si tienes alguna duda sobre este evento no dudes en contactarnos</p>
			<div class="row">
				<a href="{{ route('contacto') }}" class="btn waves-light waves-effect green center-align ls-1">CONTACTO</a>
			</div>
		</div>
	</div>
</section>

<section class="section-lugar">
	<div class="row">
		<div class="col m9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.7086236790406!2d-101.1852498856141!3d19.682432637745716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0de872e8d51b%3A0x12e74c7f08b607c2!2sTeatro+Jos%C3%A9+Mar%C3%ADa+Morelos!5e0!3m2!1ses!2smx!4v1559065457348!5m2!1ses!2smx" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">Teatro Morelos</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Ventura Puente s/n, <br>Félix Ireta, 58070 <br>Morelia, Mich.</li>
				<li><i class="fa-li fa fa-globe"></i> <a title="website" style="color:#434546" href="http://ceconexpo.com/" target="_blank">http://ceconexpo.com/</a></li>
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
		var table = 'pioneros_del_rock_morelia_29nov';
		var base_path = '{{ url('/') }}';
		var precios = {'Premium': 850, 'VIP': 670, 'Diamante': 530, 'Oro': 380, 'Plata': 250};
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
	<script src="{{asset('js/event_manual_v3.js')}}"></script>

@endsection