<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bolematico | @yield('title','Eventos')</title>
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

		<section id="qcContent">
			<div class="qcContainer">

				<!-- ## MOB NAV ## -->
				<div id="qcMbTrigger"> About</div>

				<!-- ## TABS ## -->
				<div id="qcTabs" class="tabs">

					<!-- ## TAB NAV ## -->
					<ul id="qcTabNav" class="clearfix">
						<li class="active"><a href="#tab-1"><i class="icon-book-open icon"></i> <span>About</span></a></li>
						<li><a href="#tab-2"><i class="icon-clock-1 icon"></i> <span>Schedule</span></a></li>
						<li><a href="#tab-3"><i class="icon-user-add icon"></i> <span>Speakers</span></a></li>
						<li><a href="#tab-4"><i class="icon-map icon"></i> <span>Venue</span></a></li>
						<li><a href="#tab-5"><i class="icon-picture icon"></i> <span>Gallery</span></a></li>
					</ul>


				<!-- ===============================================

					PAGE 1 - ABOUT

					=============================================== -->
					<div id="tab-1" class="qcTabPage clearfix" style="display: block;">

						<!-- ## ROW ## -->
						<div class="stretch row clearfix">

							<!-- ## TAB TITLE & DESC ## -->
							<div class="col-4 col">
								<div class="qcTabTitle">
									<h4>About<span> Know more about the event</span></h4>
								</div>
								<p class="qcPageDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
							</div>

							<!-- ## SLIDER ## -->
							<div class="col-8 col">
								<div class="video box no-border">
									<div class="qcSliderWrapper">
										<ul class="single-carousel owl-carousel owl-theme" style="opacity: 1; display: block;">
											<div class="owl-wrapper-outer autoHeight" style="height: 407px;"><div class="owl-wrapper" style="width: 2612px; left: 0px; display: block;"><div class="owl-item" style="width: 653px;"><li>
												<!-- ## EMBEDED VIDEO [ YOUTUBE, VIMEO ] ## -->
												<div class="qcFitVids">
													<div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="http://player.vimeo.com/video/82401459?title=0&amp;byline=0&amp;portrait=0&amp;color=ff9933" id="fitvid682171"></iframe></div>
												</div>
											</li></div><div class="owl-item" style="width: 653px;"><li>
											<!-- ## IMAGE SLIDE ## -->
											<img src="http://themeforest.quadcodes.com/site/studioo1/standard/assets/img/placeholder/12.jpg" alt="">
										</li></div></div></div>
										
										<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></ul>

										<!-- ## SLIDER NEXT PREV ## -->
										<div class="qcPrevNext">
											<div class="qcPrev"><i class="icon-left-open-big"></i></div>
											<div class="qcNext"><i class="icon-right-open-big"></i></div>
										</div>
									</div>
									<!-- ## SLIDER END ## -->

								</div>
							</div>

						</div>
						<!-- ## ROW END ## -->

						<!-- ## ROW ## -->
						<div class="dblBorder">
							<div class="row clearfix">
								<div class="col-12 col">
									<!-- ## TESTIMONIALS ## -->
									<div class="testimonial qcEventlayout clearfix">
										<div class="col-6 col">
											<!-- ## TESTIMONIAL LIST ## -->
											<ul id="qcTestimonialList" class="clearfix">
												<li>
													<a href="#" class="active" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="https://pbs.twimg.com/profile_images/500480798886084611/P5XUPlTJ.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="https://pbs.twimg.com/profile_images/499941427820769281/8tYwgR5r.png" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doen via Twitter">
														<img src="https://pbs.twimg.com/profile_images/2823681988/f4f6f2bed8ab4d5a48dea4b9ea85d5f1.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="https://pbs.twimg.com/profile_images/462307615536472065/WKDR6Tja.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="https://pbs.twimg.com/profile_images/512033905503772672/kYJ10GzB.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="https://pbs.twimg.com/profile_images/470664455647272960/u0PDyeFr.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="https://pbs.twimg.com/profile_images/470898770268282880/VJ0DghGr.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="https://pbs.twimg.com/profile_images/513432886226075648/ZViDgotW.jpeg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="https://pbs.twimg.com/profile_images/477437377321791488/0WEJuCyc.png" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="https://pbs.twimg.com/profile_images/378800000764200227/06fdbd84de5e6bba08a2ff81e7fa56b0.jpeg" alt="">
													</a>
												</li>
											</ul>
											<!-- ## TESTIMONIAL LIST END ## -->
										</div>
										<div class="col-6 col">
											<div id="qcTestimonial">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
												<cite>- John Doe via Twitter</cite>
											</div>
										</div>
									</div>
									<!-- ## TESTIMONIALS END ## -->
								</div>
							</div>
						</div>
						<!-- ## ROW END ## -->

						<!-- ## ROW ## -->
						<div class="dblBorder">
							<div class="row clearfix">
								<div class="col-12 col">
									<!-- ## FEATURE COUNTER ## -->
									<div id="qcAbtCount" class="qcEventlayout clearfix">
										<div class="col-3 col">
											<div class="box">
												<i class="icon-trophy icon"></i>
												<div class="abtCountNum">25</div>
												<div class="abtCountTitle">Awards</div>
											</div>
										</div>
										<div class="col-3 col">
											<div class="box">
												<i class="icon-direction icon"></i>
												<div class="abtCountNum">43</div>
												<div class="abtCountTitle">Projects</div>
											</div>
										</div>
										<div class="col-3 col">
											<div class="box">
												<i class="icon-mic icon"></i>
												<div class="abtCountNum">09</div>
												<div class="abtCountTitle">Podacsts</div>
											</div>
										</div>
										<div class="col-3 col">
											<div class="box">
												<i class="icon-globe-1 icon"></i>
												<div class="abtCountNum">05</div>
												<div class="abtCountTitle">Offices</div>
											</div>
										</div>
									</div>
									<!-- ## FEATURE COUNTER END ## -->
								</div>
							</div>
						</div>
						<!-- ## ROW END ## -->

					</div>
					<!-- ## PAGE 1 END ## -->



				<!-- ===============================================

					PAGE 2 - SCHEDULE

					=============================================== -->
					<div id="tab-2" class="qcTabPage clearfix" style="display: none;">

						<!-- ## ROW ## -->
						<div class="row clearfix">

							<!-- ## TAB TITLE ## -->
							<div class="col-4 col">
								<div class="qcTabTitle no-border">
									<h4>Schedule<span> Official Schedule for the event</span></h4>
								</div>
							</div>

							<!-- ## TAB DESC ## -->
							<div class="col-8 col">
								<div class="box no-border nopad">
									<p class="qcPageDesc full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
								</div>
							</div>

						</div>
						<!-- ## ROW END ## -->

						<!-- ## ROW ## -->
						<div class="dblBorder">
							<div class="row clearfix">
								<div class="col-12 col">

									<!-- ## SCHEDULE LIST ## -->
									<div id="qcScheduleWrapper">

										<!-- ## DAY 1 ## -->
										<div class="qcScheduleDay">
											<header class="qcSchDay">
												<p>Saturday <span>31 Oct</span></p>
											</header>
											<ul class="qcScheduleList clearfix owl-carousel owl-theme" style="opacity: 0; display: block;">
												<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 250px; left: 0px; display: block;"><div class="owl-item" style="width: 25px;"><li>
													<a href="#" class="tips" original-title="INTRODUCTION">
														<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_129.jpg" alt="">
														<div class="qcSchDesc">
															<p class="qcSchTime">10:00 <sup>AM Onwards</sup></p>
															<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
														</div>
													</a>
												</li></div><div class="owl-item" style="width: 25px;"><li>
												<a href="#" class="tips" original-title="PHILOSOPHY">
													<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_138.jpg" alt="">
													<div class="qcSchDesc">
														<p class="qcSchTime">11:30 <sup>AM Onwards</sup></p>
														<p class="qcSchSpeaker">Philosophy <span>- John Doe</span></p>
													</div>
												</a>
											</li></div><div class="owl-item" style="width: 25px;"><li>
											<a href="#" class="tips" original-title="HISTORY">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_072.jpg" alt="">
												<div class="qcSchDesc">
													<p class="qcSchTime">01:00 <sup>PM Onwards</sup></p>
													<p class="qcSchSpeaker">History <span>- John Doe</span></p>
												</div>
											</a>
										</li></div><div class="owl-item" style="width: 25px;"><li>
										<a href="#" class="tips" original-title="GEOGRAPHY">
											<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" alt="">
											<div class="qcSchDesc">
												<p class="qcSchTime">10:00 <sup>AM Onwards</sup></p>
												<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
											</div>
										</a>
									</li></div><div class="owl-item" style="width: 25px;"><li>
									<a href="#" class="tips" original-title="INTRODUCTION">
										<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_129.jpg" alt="">
										<div class="qcSchDesc">
											<p class="qcSchTime">11:30 <sup>AM Onwards</sup></p>
											<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
										</div>
									</a>
								</li></div></div></div>




								<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev disabled"></div><div class="owl-next"></div></div></div></ul>
							</div>
							<!-- ## DAY 1 END ## -->

							<!-- ## DAY 2 ## -->
							<div class="qcScheduleDay">
								<header class="qcSchDay">
									<p>Saturday <span>31 Oct</span></p>
								</header>
								<ul class="qcScheduleList clearfix owl-carousel owl-theme" style="opacity: 0; display: block;">
									<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 250px; left: 0px; display: block;"><div class="owl-item" style="width: 25px;"><li>
										<a href="#" class="tips" original-title="INTRODUCTION">
											<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_008.jpg" alt="">
											<div class="qcSchDesc">
												<p class="qcSchTime">10:00 <sup>AM Onwards</sup></p>
												<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
											</div>
										</a>
									</li></div><div class="owl-item" style="width: 25px;"><li>
									<a href="#" class="tips" original-title="PHILOSOPHY">
										<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_129.jpg" alt="">
										<div class="qcSchDesc">
											<p class="qcSchTime">11:30 <sup>AM Onwards</sup></p>
											<p class="qcSchSpeaker">Philosophy <span>- John Doe</span></p>
										</div>
									</a>
								</li></div><div class="owl-item" style="width: 25px;"><li>
								<a href="#" class="tips" original-title="HISTORY">
									<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_150.jpg" alt="">
									<div class="qcSchDesc">
										<p class="qcSchTime">01:00 <sup>PM Onwards</sup></p>
										<p class="qcSchSpeaker">History <span>- John Doe</span></p>
									</div>
								</a>
							</li></div><div class="owl-item" style="width: 25px;"><li>
							<a href="#" class="tips" original-title="GEOGRAPHY">
								<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_138.jpg" alt="">
								<div class="qcSchDesc">
									<p class="qcSchTime">10:00 <sup>AM Onwards</sup></p>
									<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
								</div>
							</a>
						</li></div><div class="owl-item" style="width: 25px;"><li>
						<a href="#" class="tips" original-title="INTRODUCTION">
							<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_072.jpg" alt="">
							<div class="qcSchDesc">
								<p class="qcSchTime">11:30 <sup>AM Onwards</sup></p>
								<p class="qcSchSpeaker">Introduction <span>- John Doe</span></p>
							</div>
						</a>
					</li></div></div></div>




					<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev disabled"></div><div class="owl-next"></div></div></div></ul>
				</div>
				<!-- ## DAY 2 END ## -->

			</div>
			<!-- ## SCHEDULE LIST END ## -->

		</div>
	</div>
</div>
<!-- ## ROW END ## -->

<!-- ## ROW ## -->
<div class="dblBorder">
	<div class="row clearfix">
		<div class="col-12 col">
			<!-- ## MODULE TITLE ## -->
			<div class="qcModTitle">
				<h1>Subscribe</h1>
				<p>Subscribe to our event notifications</p>
			</div>

			<!-- ## SUBSCRIBE ## -->
			<div class="qcSubscribeForm">
				<form action="#" class="clearfix">
					<div class="col-8 col">
						<input class="inputText" type="text" value="" placeholder="Enter your email id">
					</div>
					<div class="col-4 col">
						<input class="inputButton" type="submit" value="Subscribe">
					</div>
				</form>
			</div>
			<!-- ## SUBSCRIBE END ## -->
		</div>
	</div>
</div>
<!-- ## ROW END ## -->

</div>
<!-- ## PAGE 2 END ## -->



				<!-- ===============================================

					PAGE 3 - SPEAKERS

					=============================================== -->
					<div id="tab-3" class="qcTabPage clearfix" style="display: none;">

						<!-- ## ROW ## -->
						<div class="speakers row clearfix">

							<!-- ## TAB TITLE & DESC ## -->
							<div class="col-4 col">
								<div class="qcTabTitle">
									<h4>Speakers<span> Who Will Speak at the event</span></h4>
								</div>
								<p class="qcPageDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
							</div>

							<!-- ## SPEAKERS ## -->
							<div class="col-8 col">
								<div class="box no-border nopad">

									<!-- ## SPEAKERS LIST ## -->
									<ul class="3-col-carousel owl-carousel qcTeamCol row owl-theme" style="opacity: 0; display: block;">
										<!-- ## SPEAKER 1 ## -->
										<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 400px; left: 0px; display: block;"><div class="owl-item" style="width: 50px;"><li>
											<div class="small-box">
												<img src="http://themeforest.quadcodes.com/site/studioo1/standard/assets/img/placeholder/t2.png" alt="Team-1" title="http://photodune.net/item/smart-teacher/856363?WT.ac=search_thumb&amp;WT.oss_phrase=smart%20&amp;WT.oss_rank=65&amp;WT.z_author=Pressmaster">
												<h4>John Doe</h4>
												<p>Director, Founder</p>
												<ul class="qcGlyphSocial clearfix">
													<li><a href="#" class="tips" original-title="FACEBOOK"><i class="icon-facebook"></i></a></li>
													<li><a href="#" class="tips" original-title="TWITTER"><i class="icon-twitter"></i></a></li>
													<li><a href="#" class="tips" original-title="DRIBBBLE"><i class="icon-dribbble"></i></a></li>
													<li><a href="#" class="tips" original-title="PINTEREST"><i class="icon-pinterest"></i></a></li>
													<li><a href="#" class="tips" original-title="LINKEDIN"><i class="icon-linkedin"></i></a></li>
												</ul>
											</div>
										</li></div><div class="owl-item" style="width: 50px;"><li>
										<div class="small-box">
											<img src="http://themeforest.quadcodes.com/site/studioo1/standard/assets/img/placeholder/t3.png" alt="Team-2" title="http://photodune.net/item/photographer/7897851?WT.ac=search_thumb&amp;WT.oss_phrase=photographer&amp;WT.oss_rank=77&amp;WT.z_author=Minervastudio">
											<h4>Samantha James</h4>
											<p>Co-Founder</p>
											<ul class="qcGlyphSocial clearfix">
												<li><a href="#" class="tips" original-title="FORRST"><i class="icon-forrst"></i></a></li>
												<li><a href="#" class="tips" original-title="GOOGLE"><i class="icon-google"></i></a></li>
												<li><a href="#" class="tips" original-title="SKYPE"><i class="icon-skype"></i></a></li>
												<li><a href="#" class="tips" original-title="VIMEO"><i class="icon-vimeo"></i></a></li>
												<li><a href="#" class="tips" original-title="YOUTUBE"><i class="icon-youtube"></i></a></li>
											</ul>
										</div>
									</li></div><div class="owl-item" style="width: 50px;"><li>
									<div class="small-box">
										<img src="http://themeforest.quadcodes.com/site/studioo1/standard/assets/img/placeholder/t1.png" alt="Team-3" title="http://photodune.net/item/smart-girl/2612875?WT.ac=search_thumb&amp;WT.oss_phrase=smart%20&amp;WT.oss_rank=51&amp;WT.z_author=Pressmaster">
										<h4>David Jones</h4>
										<p>Human Resource</p>
										<ul class="qcGlyphSocial clearfix">
											<li><a href="#" class="tips" original-title="ANDROID"><i class="icon-android"></i></a></li>
											<li><a href="#" class="tips" original-title="GITHUB"><i class="icon-github"></i></a></li>
											<li><a href="#" class="tips" original-title="SOUNDCLOUD"><i class="icon-soundcloud"></i></a></li>
											<li><a href="#" class="tips" original-title="STACK"><i class="icon-stackoverflow"></i></a></li>
											<li><a href="#" class="tips" original-title="DROPBOX"><i class="icon-dropbox"></i></a></li>
										</ul>
									</div>
								</li></div><div class="owl-item" style="width: 50px;"><li>
								<div class="small-box">
									<img src="http://themeforest.quadcodes.com/site/studioo1/standard/assets/img/placeholder/t4.png" alt="Team-4" title="http://photodune.net/item/office/6805736?WT.ac=search_thumb&amp;WT.oss_phrase=office&amp;WT.oss_rank=220&amp;WT.z_author=val_thoermer">
									<h4>Peter Smith</h4>
									<p>Designer</p>
									<ul class="qcGlyphSocial clearfix">
										<li><a href="#" class="tips" original-title="DRIBBBLE"><i class="icon-dribbble"></i></a></li>
										<li><a href="#" class="tips" original-title="FORRST"><i class="icon-forrst"></i></a></li>
										<li><a href="#" class="tips" original-title="GPLUS"><i class="icon-gplus"></i></a></li>
										<li><a href="#" class="tips" original-title="STACK"><i class="icon-stackoverflow"></i></a></li>
										<li><a href="#" class="tips" original-title="DROPBOX"><i class="icon-dropbox"></i></a></li>
									</ul>
								</div>
							</li></div></div></div>
							<!-- ## SPEAKER 2 ## -->

							<!-- ## SPEAKER 3 ## -->

							<!-- ## SPEAKER 4 ## -->

							<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev disabled"></div><div class="owl-next"></div></div></div></ul>
							<!-- ## SPEAKERS LIST END ## -->

						</div>
					</div>
					<!-- ## SPEAKERS END ## -->

				</div>
				<!-- ## ROW END ## -->

				<!-- ## ROW ## -->
				<div class="dblBorder">
					<div class="row clearfix">
						<div class="col-12 col">
							<!-- ## MODULE TITLE ## -->
							<div class="qcModTitle">
								<h1>Partners</h1>
								<p>Those helping hands</p>
							</div>

							<!-- ## SPONSORS LIST ## -->
							<ul class="qcSposnsorList clearfix owl-carousel owl-theme" style="opacity: 0; display: block;">
								<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 280px; left: 0px; display: block;"><div class="owl-item" style="width: 20px;"><li>
									<a href="#" class="tips" original-title="INTRODUCTION">
										<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-1.png" alt="">
									</a>
								</li></div><div class="owl-item" style="width: 20px;"><li>
								<a href="#" class="tips" original-title="INTRODUCTION">
									<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-2.png" alt="">
								</a>
							</li></div><div class="owl-item" style="width: 20px;"><li>
							<a href="#" class="tips" original-title="INTRODUCTION">
								<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-3.png" alt="">
							</a>
						</li></div><div class="owl-item" style="width: 20px;"><li>
						<a href="#" class="tips" original-title="INTRODUCTION">
							<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-4.png" alt="">
						</a>
					</li></div><div class="owl-item" style="width: 20px;"><li>
					<a href="#" class="tips" original-title="INTRODUCTION">
						<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-5.png" alt="">
					</a>
				</li></div><div class="owl-item" style="width: 20px;"><li>
				<a href="#" class="tips" original-title="INTRODUCTION">
					<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-6.png" alt="">
				</a>
			</li></div><div class="owl-item" style="width: 20px;"><li>
			<a href="#" class="tips" original-title="INTRODUCTION">
				<img src="http://eazzy.me/html/imevent/assets/img/partner/light/partner-1.png" alt="">
			</a>
		</li></div></div></div>






		<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev disabled"></div><div class="owl-next"></div></div></div></ul>
		<!-- ## SPONSERS LIST END ## -->
	</div>
</div>
</div>
<!-- ## ROW END ## -->

</div>
<!-- ## PAGE 3 END ## -->



				<!-- ===============================================

					PAGE 4 - VENUE

					=============================================== -->
					<div id="tab-4" class="qcTabPage clearfix" style="display: none;">

						<!-- ## ROW ## -->
						<div class="row clearfix">

							<!-- ## TAB TITLE ## -->
							<div class="col-5 col">
								<div class="qcTabTitle no-border">
									<h4>Venue &amp; Layout<span> Venue &amp; Layout of to the event</span></h4>
								</div>
							</div>

							<!-- ## ADDRESS LIST ## -->
							<div class="col-7 col">
								<ul class="qcAddress">
									<li><i class="icon-map"></i><p><strong>ADDRESS</strong>: 1600, Amphitheatre Parkway, CA 94043</p></li>
									<li><i class="icon-user-1"></i><p><strong>PHONE</strong>:  +91-8097000000</p></li>
									<li><i class="icon-print"></i><p><strong>FAX</strong>: +91-8097000001</p></li>
									<li><i class="icon-mail-1"></i><p><strong>EMAIL</strong>: quadcodes@gmail.com</p></li>
									<li><i class="icon-globe-1"></i><p><strong>WEBSITE</strong>: <a title="website" href="http://www.quadcodes.com" target="_blank">www.quadcodes.com</a></p></li>
								</ul>
							</div>

						</div>
						<!-- ## ROW END ## -->

						<!-- ## ROW ## -->
						<div class="dblBorder">
							<div class="row clearfix">
								<div class="col-12 col">

									<!-- ## VENUE LAYOUT PLAN ## -->
									<div class="qcEventlayout">
										<h1>Layout Plan</h1>
										<a href="./includes/img/placeholder/layout.jpg" data-rel="prettyPhoto[pp_gal]">
											<img src="./includes/img/placeholder/layout.jpg" alt="">
										</a>
									</div>

									<div class="dblBorder only"></div>

									<!-- ## VENUE MAP ## -->
									<div class="qcEventlayout">
										<h1>Map</h1>
										<div id="qcContactMap" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: -125px; top: -208px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -125px; top: -208px;"><canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=37.4416,-122.1516&amp;z=15&amp;t=m&amp;hl=es-ES&amp;gl=US&amp;mapclient=apiv3" title="Haz clic aquí para visualizar esta zona en Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Datos de mapas</div><div style="font-size: 13px;"></div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Datos de mapas</a><span style="display: none;"></span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/es-ES_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Términos de uso</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Informar a Google acerca de errores en las imágenes o en el mapa de carreteras" href="https://www.google.com/maps/@37.4416,-122.1516,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar de un error de Maps</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="0" controlheight="0" style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 0px; right: 0px;"><div class="gmnoprint" style="display: none; position: absolute;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255);"><div title="Acerca la imagen" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230);"></div><div title="Aleja la imagen" style="position: relative;"><div style="overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; display: none; position: absolute;"><div style="position: absolute; left: 1px; top: 1px;"></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Girar el mapa 90 grados" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; display: none; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra el callejero" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; font-weight: 500;">Mapa</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Muestra el callejero con relieve" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Relieve</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Muestra las imágenes de satélite" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px;">Satélite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 0px; text-align: left; display: none;"><div draggable="false" title="Muestra las imágenes con los nombres de las calles" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Etiquetas</label></div></div></div></div></div></div></div>
										<div id="qcMapAddress" data-lat="37.4416" data-lng="-122.1516" data-add="1600, Amphitheatre Parkway, Mountain View, CA 94043"></div>
									</div>

								</div>
							</div>
						</div>
						<!-- ## ROW END ## -->

					</div>
					<!-- ## PAGE 4 END ## -->



				<!-- ===============================================

					PAGE 5 - GALLERY

					=============================================== -->
					<div id="tab-5" class="qcTabPage clearfix" style="display: none;">

						<!-- ## ROW ## -->
						<div class="stretch row clearfix">

							<!-- ## TAB TITLE & DESC ## -->
							<div class="col-4 col">
								<div class="qcTabTitle">
									<h4>Gallery<span> Some memories of the past event</span></h4>
								</div>
								<p class="qcPageDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, accusamus, sed, necessitatibus ea nemo hic molestias amet tempora fuga pariatur officia itaque eum quis rerum aliquam minus illo nulla laborum!</p>
							</div>

							<!-- ## GALLERY LIST ## -->
							<div class="col-8 col">
								<div class="video box no-border">
									<ul id="imgGallery" class="clearfix">
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips video" data-rel="prettyPhoto[pp_gal]" original-title="Zedd">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" alt="Zedd">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Bassnectar">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_129.jpg" alt="Bassnectar">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Stereosonic">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_138.jpg" alt="Stereosonic">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="OMFG!">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_072.jpg" alt="OMFG!">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Excision">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_008.jpg" alt="Excision">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="BeuNos">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_150.jpg" alt="BeuNos">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/ultramusic-festival/" class="tips video" data-rel="prettyPhoto[pp_gal]" original-title="UltraMusic Festival">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_023.jpg" alt="UltraMusic Festival">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/zedd/" class="tips video" data-rel="prettyPhoto[pp_gal]" original-title="Zedd">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_155.jpg" alt="Zedd">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/bassnectar/" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Bassnectar">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_129.jpg" alt="Bassnectar">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/stereosonic/" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Stereosonic">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_138.jpg" alt="Stereosonic">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/omfg/" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="OMFG!">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultrasa14b_072.jpg" alt="OMFG!">
											</a>
										</li>
										<li>
											<a href="http://themeforest.quadcodes.com/wordpress/musicvent/gallery/excision/" class="tips" data-rel="prettyPhoto[pp_gal]" original-title="Excision">
												<img src="http://themeforest.quadcodes.com/wordpress/musicvent/wp-content/uploads/2014/03/ultraba14a_008.jpg" alt="Excision">
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- ## GALLERY LIST END ## -->

						</div>
						<!-- ## ROW END ## -->

					</div>
					<!-- ## PAGE 5 END ## -->


				</div>
				<!-- ## TABS END ## -->

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