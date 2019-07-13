@extends('layouts.main')

@section('title', 'Fer Moreno Querétaro')

@section('description', 'Fer Moreno en Querétaro, 20 de junio 2019, 21:00 hrs., El Portón de Santiago')

@section('styles')
<meta property="og:url"  content="https://www.bolematico.com/eventos/fer-moreno-queretaro" />
<meta property="og:title" content="Fer Moreno" />
<meta property="og:description" content="Fer Moreno, Queretaro 20 de junio, El Portón de Santiago, 21:00 hrs NO COVER" />
<meta property="og:image" content="https://www.bolematico.com/img/fer-moreno-queretaro.jpg" />
<script src="https://use.fontawesome.com/9b9c9dc667.js"></script>
@endsection

@section('content')

<div class="image-header bg-4 overlay overlay-5">

	<div class="row white-text">
		<h4>Fer Moreno</h4>
		<div class="divider"></div>
		<p><i>Querétaro - El Portón de Santiago</i></p>
		<p><i>20 de junio - 21:00 hrs.</i></p>
	</div>
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
				<img src="{{ asset('img/fer-moreno-queretaro.jpg') }}" alt="" class="responsive-img">
			</div>
			
			<div class="col s12 m5 offset-m1">				

				<div class="row">

					<div class="qcPricing col s12 center-align mb-10">
						<div class="box col s12">
							<header>
								<div class="col s12 teal accent-4">General</div>
							</header>
							<div class="price col s12"><span>NO COVER</span></div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="divider"></div>
					
                    <div class="col s10 offset-s1 m8 offset-m2">
                        <p class="mb-0"> * Informes al:</p>
                        <ul style="margin-top: 0;padding-left: 15px;">
                            <li><i class="fa fa-phone"></i> <a href="tel:4427400671" target="_blank">442-740-0671</a></li>
                            <li><i class="fa fa-phone"></i> <a href="tel:4423232230" target="_blank">442-323-2230</a></li>
                        </ul>
                    </div>
					
				</div>
			</div>
		</div>

		<div id="biografia" class="col s12 tab-content">
            <div class="col s8 offset-s2 hide-on-med-and-up">
				<img src="{{ asset('img/fer-moreno-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="col s12 m8 text-justify">
		        <p>El joven moreliano inició en el 2016 con el Stand Up, por ello se considera como uno de los pioneros en Michoacán, pero al ver la falta de público decide ir a vivir a la Ciudad de México para capacitarse.</p>
				<p>Años después regresa a la capital michoacana para establecer una escuela de comediantes, pero ya con gran experiencia tras participar en Comedy Central, canal internacional.</p>				
			</div>
			<div class="col m4 hide-on-small-only">
				<img src="{{ asset('img/fer-moreno-bio.jpg') }}" class="responsive-img">
			</div>
			<div class="clearfix"></div>			
		</div>

		<div id="lugares" class="col s12 tab-content">
            
            <div class="col s12">
				<h5 class="mb-30 quote">Puedes adquirir tus entradas en:</h5>
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
<section class="section-video overlay overlay-5" style="background-image: url('https://img.youtube.com/vi/ZoCfBhveH_Y/maxresdefault.jpg');">
	<div class="row center-align">
		<a class="white-text" id="modal-video-open" href="#modal-video" data-video="https://www.youtube.com/embed/ZoCfBhveH_Y"><i class="material-icons">play_circle_filled</i></a>
		<p class="white-text"><i>Fer Moreno | Stand Up | Comedy Central México</i></p>
	</div>
</section>

<section id="compra" class="section-comprar">

	<div class="row mt-30">
		<div class="col m8 offset-m2">
			<h5 class="center-align raleway">- NO COVER -</h5>
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
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.799498426775!2d-100.39395018559972!3d20.596244107779615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b2975a8d68f%3A0xdf13453c0e244eca!2sEl+Porton+de+Santiago!5e0!3m2!1ses!2smx!4v1550796654851" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col m3">
			<h5 class="quote raleway">Lugar del evento</h5>
			
			<h5 class="mt-30">El Portón de Santiago</h5>
			<div class="col s10">
				<div class="divider"></div>
			</div>
			<ul class="fa-ul" style="margin-top: 30px;">
				<li class="mb-10"><i class="fa-li fa fa-map-marker"></i> Av. Prol. Luis Pasteur 37, <br> Centro, 76000 <br> Santiago de Querétaro, Qro.</li>
				{{-- <li><i class="fa-li fa fa-phone"></i> 01 461 174 3456</li> --}}
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

@endsection