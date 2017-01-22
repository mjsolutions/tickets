<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Contacto')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="https://file.myfontastic.com/p33ryNdn2ug99gf3MgkiUK/icons.css" rel="stylesheet">
</head>
<body>
	<header>
		@include('bolematico.nav')
	</header>

	<main>
		<section class="padding-top-110 padding-bottom-50">

			<div class="container">

				<div class="text-center mb-80 wow fadeInUp">
					<h2 class="section-title text-uppercase">Manda tus comentarios</h2>
					<p class="section-sub">Ya sea que busques agendar una cita, comprar alguno de nuestros productos, formar parte de nuestro equipo o algúna otra opción en <b>Megasalud</b> estamos para servirte, dejanos tu mensaje y nosotros nos pondremos en contacto contigo a la brevedad.</p>
				</div>

				<div class="row">
					<div class="col-md-8 wow fadeInUp" data-wow-delay=".2s">
						<form name="contact-form" id="contactForm" action="" method="POST">

							<div class="row">
								<div class="col-md-6">
									<div class="input-field">
										<input type="text" name="name" class="validate" id="name">
										<label for="name">Nombre</label>
									</div>

								</div><!-- /.col-md-6 -->

								<div class="col-md-6">
									<div class="input-field">
										<label class="sr-only" for="email">Correo</label>
										<input id="email" type="email" name="email" class="validate" >
										<label for="email" data-error="wrong" data-success="right">Email</label>
									</div>
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->

							<div class="row">
								<div class="col-md-12">
									<div class="input-field">
										<input id="website" type="text" name="subject" class="validate" >
										<label for="website">Asunto</label>
									</div>
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->

							<div class="input-field">
								<textarea name="message" id="message" class="materialize-textarea" ></textarea>
								<label for="message">Mensaje</label>
							</div>

							<button type="submit" id="enviar" name="submit" class="waves-effect waves-light btn green submit-button green mt-30">Enviar <i class="material-icons right">send</i></button>
						</form>
						<div id="resp"></div>
					</div><!-- /.col-md-8 -->

					<div class="col-md-4 contact-info wow fadeInUp" data-wow-delay=".5s">

						<address>
							<i class="material-icons brand-color">&#xE55F;</i>
							<div class="address">
								Oficina Central<br>
								Morelia
								<hr>

								<p>Revolución 554, Col. Centro<br>
									Morelia Mich, c.p. 58000</p>
								</div>

								<i class="material-icons brand-color">&#xE61C;</i>
								<div class="phone">
									<p>(443) 312 1101<br>
										(443) 167 4830</p>
									</div>

									<i class="material-icons brand-color">&#xE0E1;</i>
									<div class="mail">
										<p><a href="mailto:dr_rodriguez@megasalud.com.mx">dr_rodriguez@megasalud.com.mx</a></p>
									</div>
								</address>
							</div><!-- /.col-md-4 -->
						</div><!-- /.row -->
					</div>
				</section>
			</main>

			<footer class="page-footer grey darken-3">
				<div class="container">
					<div class="row">
						<div class="col l6 s12">
							<h5 class="white-text">Bolematico.com.mx</h5>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col l6">
								Todos los derechos reservados.	    			
							</div>
							<div class="col l6 right-align">
								© {!! date('Y') !!}
							</div>
						</div>
					</div>
				</div>
			</footer>

			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
			<script>
				$(document).ready(function(){
					$(".button-collapse").sideNav({
				 edge: 'right', // Choose the horizontal origin
				 closeOnClick: true
				});
					if($('#flash-overlay-modal')[0]){
						$('#flash-overlay-modal').openModal();   
					}
					$('.modal-trigger').leanModal();
					$('select').material_select();
			$(".dropdown-button").dropdown(); //puede funcionar sin esta declaracion

			@if($errors)
			@foreach($errors->all() as $error)
			Materialize.toast('{{ $error }}', 4000);
			@endforeach
			@endif

			$('a.page-scroll').on('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500, 'easeInOutExpo');
				event.preventDefault();
			});
		});
	</script>
	<script type="text/javascript">
		var date = new Date();
		initDatepicker({
			selectYears: 100,
			min: [date.getFullYear() - 100, date.getMonth(), date.getDate()],
			max: [date.getFullYear(), date.getMonth(), date.getDate()],
			hiddenName: 'fecha',
			hiddenSuffix: '_nacimiento'
		});

	</script>
</body>
</html>



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Megasalud">

	<title>Contacto</title>

	<?php include ('head.php') ?>

	<!--page title start-->
	<section class="page-title parallax-bg page-title-bg overlay dark-5 padding-top-140 padding-bottom-150" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="white-text">CONTACTO</h2>
					<span class="white-text">Dudas, pedidos... estamos para servirte</span>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<!-- <li><a href="#">Shortcodes</a></li> -->
						<li class="active">Contacto</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<!--page title end-->

	<!-- Content init -->
	<!-- contact-form-section -->

	<!-- contact-form-section End -->


	<!-- map-section -->
	<div id="myMap" class="height-350"></div>
	<!-- /.map-section -->
	<!-- Content end -->

	<?php include ('footer.php'); ?>

	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/materialize/js/materialize.min.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/jquery.sticky.min.js"></script>
	<script src="assets/js/smoothscroll.min.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jquery.inview.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="assets/js/menuzord.js"></script>
	<script src="assets/js/bootstrap-tabcollapse.min.js"></script>
	<script src="assets/owl.carousel/owl.carousel.min.js"></script>
	<script src="assets/flexSlider/jquery.flexslider-min.js"></script>
	<script src="assets/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJgz2lA0NM7-7a6V3t4XXl6TXrNqRklvw&callback=initMap"
	async defer></script>
	<script src="assets/js/scriptsc81e.js?2"></script>
	<script>
		new WOW({
			mobile:  false
		}).init();
	</script>
	<!-- Google Map Customization  -->
	<script type="text/javascript">

		function initMap(){
                //set your google maps parameters
                var $latitude = 19.707141, //Visit http://www.latlong.net/convert-address-to-lat-long.html for generate your Lat. Long.
                $longitude = -101.183950,
                $map_zoom = 16 /* ZOOM SETTING */

                //google map custom marker icon 
                var $marker_url = 'assets/img/pin.png';

                //set google map options
                var map_options = {
                	center: new google.maps.LatLng($latitude, $longitude),
                	zoom: $map_zoom,
                	panControl: true,
                	zoomControl: true,
                	mapTypeControl: true,
                	streetViewControl: true,
                	mapTypeId: google.maps.MapTypeId.ROADMAP,
                	scrollwheel: false
                }
                //inizialize the map
                
                var map = new google.maps.Map(document.getElementById('myMap'), map_options);


                //add a custom marker to the map                
                var marker = new google.maps.Marker({
                	position: new google.maps.LatLng($latitude, $longitude),
                	map: map,
                	visible: true,
                	icon: $marker_url
                });

                var contentString = '<div id="mapcontent" class="text-center">' + '<h2>Megasalud Internacional</h2><p>Revolución 554, Centro</p> <p>Morelia, Mich.</p></div>';
                var infowindow = new google.maps.InfoWindow({
                	maxWidth: 320,
                	content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                	infowindow.open(map, marker);
                });
            }

            $('form').submit(function(){
                  //alert('enviado');
                  $('#enviar').attr("disabled", "disabled");
                  $.ajax({
                  	url:"sendmail.php",
                  	type: "POST",
                  	data: $(this).serialize(),
                  	success: function(data){
                  		$('#resp').html(data);
                  		$('#enviar').attr("disabled", false);
                  		$('form').each(function(){
                  			this.reset();
                  		});
                  	},
                  	error: function(data){
                  		$('#resp').html(data);
                  		$('#enviar').attr("disabled", false);
                  	}
                  });
                  return false;
              });

          </script>
      </body>

      </html>