@extends('_layouts.lp')

@section('title', 'Interactive Calculators and Quizzes | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Interactive Calculators and Quizzes | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Interactive Calculators | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	<section class="section section-1 section-old">
		<div class="container-fluid">
			<div class="col-md-5 col-sm-12 col-xs-12 section-1-left">
				<div class="section1-left-cell">
					<h4 class="mk-animate-element fade-in">
						eBooks, blogs & whitepapers giving average results?
					</h4>
					<h3 class="mk-animate-element fade-in section1-firsthead">
						Boost your marketing with highly converting <b>calculators</b> and viral <b>quizzes</b>.
					</h3>

					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer">
							<i class="material-icons">email</i>
							<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your email address">
							<a href="//app.outgrow.co/signup/?email=" class="lead-email" onclick="callGA('CANNOT WAIT CTA')">
								<span class="btn-buildcal fade-in lead-form-btn">
									Start Free Trial
								</span>
								<div class="btn-bottominfo fade-in">
									<label></label>
								</div>
							</a>
							<!--<div id="bfrVid"></div>-->
						</div>
					</div>
				</div>
			</div>

			<script>
				document.getElementsByClassName('lead-form-email')[0].onchange = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					document.getElementsByClassName('lead-email')[0].href = href + email;
				}

				document.getElementsByClassName('lead-form-email')[0].onkeypress = function (e) {
					let email = e.target.value;
					let href = "//app.outgrow.co/signup/?email=";
					if (e.keyCode == 13) {
						window.location.href = href+email;
					}
				}
			</script>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height" id="video-main-rs-mob">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-mob">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon" data-toggle="modal" data-target="#video-modal">
								<span class="inside-circle"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 np rs-show text-center hide-height" id="video-main-rs">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-res">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle" onclick="changeHeightRes()"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-7 col-sm-12 col-xs-12 np rs-hide text-center hide-height" id="video-main">
				<div class="video-img-wrapper">
					<div class="overflow-hidden">
						<div class="video-img-inner video-img-inner-web" id="him1">
							<img class="video-img" src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" data-src="//dzvexx2x036l1.cloudfront.net/video-thumbnail.jpg" />
							<span class="img-overlay"></span>
							<span class="video-playIcon">
								<span class="inside-circle" onclick="changeHeightWeb1()"><i class="material-icons">play_arrow</i></span>
							</span>
						</div>
					</div>
				</div>
			</div>

			<script>
				document.getElementsByClassName("video-playIcon")[0].onclick = function () {
					console.log('Some cick');
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3'
				}

				function btnclose() {
					document.getElementsByClassName("outgrow-video-mob")[0].src = 'https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3'
				}
				function changeHeightRes () {
					console.log('Res');
					// window.location.replace('#bfrVid')
					document.getElementsByClassName("video-img-inner-res")[0].innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main-rs');
					// if (xDiv.style.height == '')
					// 	xDiv.style.height = '460px';
					// else
					// 	xDiv.style.height = '';
				}
				function changeHeightWeb1 () {
					console.log('Tab');
					// window.location.replace('#bfrVid')
					document.getElementById("him1").innerHTML = "<div class='embed-responsive embed-responsive-16by9'><iframe class='outgrow-video' src='https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=1&amp;iv_load_policy=3' frameborder='0' allowfullscreen></iframe></div>";
					var xDiv = document.getElementById('video-main');

					// if (xDiv.style.height == '')
					// 	xDiv.style.height = '600px';
					// else
					// 	xDiv.style.height = '';
				}
			</script>
		</div>
	</section>

	<section class="section section-10 sec-grey">
		<div class="container container-center">
			<h1 class="section-2-heading">
				Calculators & quizzes:<br/> The Next Big Thing in Marketing
			</h1>
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table1.png">
					<span>Achieve Conversion Rates of Over 60%</span>
					<p class="">Calculators and quizzes are interactive experiences that engage the customers at a psychological level. This leads to record, never-seen-before conversion rates!</p>
				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table2.png">
					<span>ADD VALUE TO CUSTOMERS, INSTANTLY.</span>
					<p class="">Calculators and quizzes provide instant gratification and give personalized answers & recommendations to your customer's most pressing questions.</p>

				</div>
				<div class="col-md-4 col-xs-12 np text-center sec-new-table">
					<img src="//dzvexx2x036l1.cloudfront.net/img-table3.png">
					
					<span>GENERATE VIRAL REFERRAL TRAFFIC</span>
					<p class="">Given the engagement, quizzes and calculators tend to go viral. You reach a wider audience, your brand gets noticed, and your referral traffic shoots through the roof.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Homepage section 3 end-->

	<section class="section">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up sec-top-heading">
				Beautiful calculators and quizzes. <br/> Without Developers.
			</h1>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Create beautiful experiences in minutes with our simple, yet powerful development studio.
			</h5>
		</div>
	</section>

	<!-- Homepage section 4 start-->
	<section class="section section-4">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 np section-4-right mk-animate-element fade-in rs-show">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3 section-4-left ">
				<h4 class="mk-animate-element right-to-left">
					Build Beautiful
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">format_paint</i>
					<span><b>Appealing Templates</b> that Set Your UX Apart</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">view_compact</i>
					<span>Showcase Your Brand with <b>Quick Customizations</b> </span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">developer_board</i>
					<span>Publish Within Minutes, with <b>No IT Headache</b> including <b>Charts and Graphs</b></span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 np section-4-right mk-animate-element fade-in rs-hide">
				<div class="video-frame">
					<span class="circle"></span>
					<div class="embed-responsive embed-responsive-16by9">
						<video width="1324" height="607" autoplay loop>
							<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 4 end-->

	<!-- Homepage section 5 start-->
	<section class="section section-5">
		<div class="container mobile-container">
			<div class="col-xs-12 col-sm-12 col-md-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-show">
				<img class="scrollimg mk-animate-element scale-up sec5-2-1" src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
			<div class="col-xs-12 col-sm-12 col-sm-push-9 col-md-3 section-5-left">
				<h4 class="mk-animate-element right-to-left">
					Publish Anywhere
				</h4>
				<span class="mk-animate-element right-to-left" >
					<i class="material-icons">public</i>
					<span>Publish on <b>Your Domain</b> or a URL of your choice.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Embed Beautifully in Any <b>App, Webpage or CMS</b>.</span>
				</span>
				 <span class="mk-animate-element right-to-left">
					<i class="material-icons">check_circle</i>
					<span>Present as a <b>Pop-up</b> or a <b>Slide-in</b>. </span>
				</span>

			</div>
			<div class="col-xs-12 col-sm-9 col-sm-pull-3 np section-5-right mk-animate-element fade-in rs-hide">
				<img class="scrollimg mk-animate-element scale-up sec5-2-1" src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-publishAnywhere.png" />
			</div>
		</div>
	</section>
	<!-- Homepage section 5 end-->

	<!-- Homepage section 6 start-->
	<section class="section section-6 sec-6-old">
		<div class="container img-container">
			<div class="col-xs-12 col-sm-12 col-md-9 np mk-animate-element fade-in section-6-right rs-show">
				<img class="scrollimg mk-animate-element right-to-left sec6-2-1" src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg sec6-2-2 mk-animate-element left-to-right" src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
			<div class="col-xs-12 col-md-3 col-sm-12 section-6-left mobile-container">
				<h4 class="mk-animate-element left-to-right">
					Boost Growth
				</h4>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">timeline</i>
					<span>See <b>record</b> conversion rates with interactive <b>lead generation</b> forms.</span>
				</span>
				<span class="mk-animate-element right-to-left">
					<i class="material-icons">face</i>
					<span>Go <b>viral</b> with seamless <b>Facebook, Twitter and Linkedin</b> integrations.</span>
				</span>
			</div>
			<div class="col-xs-12 col-sm-9 np mk-animate-element fade-in section-6-right rs-hide">
				<img class="scrollimg mk-animate-element right-to-left" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-tab.png" />
				<img class="scrollimg sec4-2 mk-animate-element left-to-right" src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-boostgrowth-mobile.png" />
			</div>
			<!--<div class="col-xs-12 col-sm-12 text-center rs-hide">
				<a href="{{ $page->baseUrl }}/features"><button class="btn-buildcal mk-animate-element left-to-right"> <p>Explore More Features</p> <i class="material-icons">keyboard_arrow_right</i></button></a>
			</div>-->

			<div class="col-md-12 col-xs-12 col-sm-12 np text-center col-sm-offset-3 startTrial-outer btn-signup btn-signup1">
				<i class="material-icons">email</i>
				<input class="lead-form-email-1" name="emailId" type="email" placeholder="Please enter your email address">
				
				<a href="//app.outgrow.co/signup/?email=" class="lead-email-1" onclick="callGA('CANNOT WAIT CTA')">
					<span class="btn-buildcal fade-in lead-form-btn">
						Start Free Trial
					</span>
					<div class="btn-bottominfo fade-in">
						<label></label>
					</div>
				</a>
				<!--<div id="bfrVid"></div>-->
			</div>
		</div>
		<script>
			document.getElementsByClassName('lead-form-email-1')[0].onchange = function (e) {
				let email = e.target.value;
				let href = "//app.outgrow.co/signup/?email=";
				document.getElementsByClassName('lead-email-1')[0].href = href + email;
			}

			document.getElementsByClassName('lead-form-email-1')[0].onkeypress = function (e) {
				let email = e.target.value;
				let href = "//app.outgrow.co/signup/?email=";
				if (e.keyCode == 13) {
					window.location.href = href+email;
				}
			}
		</script>
	</section>

	<section class="section sec-integrations">
		<div class="container mobile-container">
			<h1 class="section-2-heading mk-animate-element scale-up ">
				Over 500 integrations
			</h1>
			<h5 class="section-2-subheading mk-animate-element scale-up">
				 Easily Integrate with Over 500 sales & marketing tools
			</h5>
			<div class="col-xs-12 col-sm-12 col-md-12 np rs-hide mk-in-viewport text-center">
				<!--<img class="mk-animate-element scale-up int-box-shadow" src=""  data-src="//dzvexx2x036l1.cloudfront.net/img-integration-full.jpg" />-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-res">
				<!--<img class="int-box-shadow" src="" data-src="//dzvexx2x036l1.cloudfront.net/img-integration-resp.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 np mk-animate-element scale-up rs-show text-center mk-in-viewport rs-hide-int-mob">
				<!--<img class="int-box-shadow" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-integration-mob.jpg">-->
				<div class="img-int-wrapper">
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-1.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-2.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-3.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-4.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-5.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-6.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-7.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-8.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-9.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-10.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-11.jpg" />
					<img class="scrollimg" src=""  data-scroll-img="//dzvexx2x036l1.cloudfront.net/img-int-12.jpg" />
				</div>
			</div>
		</div>
	</section>
	<!-- Homepage section 6 end-->

	<!--section testimonial -->
	<div class="section-main">
		<section class="section section-7-top section-7-top-old">
			<div class="container mobile-container">
				<h1 class="section-2-heading mk-animate-element scale-up">
					Check what our users have to say!
				</h1>
			</div>
		</section>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show-less480 ">
			<div class="swiper-container mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-show rs-hide-less480 section-old-testi">
			<div class="swiper-container mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonialsMobile08.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="col-xs-12 col-sm-12 np slider-sa text-center sec-testimonials rs-hide section-old-testi">
			<div class="swiper-container mk-animate-element scale-up">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials01.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials03.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials04.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials05.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials06.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials07.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
					<div class="swiper-slide">
						<img src="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/testimonials08.jpg" alt="" class="scrollimg qode-lazy-image" />
					</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination"></div>
			<!-- Add Arrows -->
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<script>
			var swiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				paginationClickable: true,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				spaceBetween: 30,
				slidesPerView: 3,
				centeredSlides: true,
				// autoplay: 2500,
				// speed:500,
				autoplayDisableOnInteraction: false
			});
		</script>
	</div>
	<!--section testimonial -->

	<div class="col-md-12 col-xs-12 col-sm-12 np startTrial-outer lp-sign">
		<div class="lp-sign-inner">
			<i class="material-icons">email</i>
			<input class="lead-form-email-2" name="emailId" type="email" placeholder="Please enter your email address">
			<a href="//app.outgrow.co/signup/?email=" class="lead-email-2" onclick="callGA('CANNOT WAIT CTA')">
				<span class="btn-buildcal fade-in lead-form-btn">
					Start Free Trial
				</span>
			</a>
		</div>
	</div>

	<div class="footer-copyright footer-lp">
		<i class="material-icons">copyright</i>
		<span>Copyright 2017</span>
		<img class="scrollimg" data-scroll-img="//dzvexx2x036l1.cloudfront.net/footer-logo-dark.png" src="" />
		<a style="display:none;" href="https://trustlogo.com/install/index5.html?certificatename=Comodo-SSL-Wildcard" target="_blank"><img class="scrollimg footer-img-2 rs-hide-mb" data-scroll-img="//dzvexx2x036l1.cloudfront.net/comodo_secure.png" src="" /></a>
	</div>
	<script>
		document.getElementsByClassName('lead-form-email-2')[0].onchange = function (e) {
			let email = e.target.value;
			let href = "//app.outgrow.co/signup/?email=";
			document.getElementsByClassName('lead-email-2')[0].href = href + email;
		}
		document.getElementsByClassName('lead-form-email-2')[0].onkeypress = function (e) {
			let email = e.target.value;
			let href = "//app.outgrow.co/signup/?email=";
			if (e.keyCode == 13) {
				window.location.href = href+email;
			}
		}
	</script>
	<!-- Homepage section 13 end-->
	<!-- Start: Modal Video -->
	<div id="video-modal" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" onclick="btnclose()" id="btn-close-mob" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="row">
						<div class="modal-video-full">
							<div class="tab-content">
								<div id="overview" class="tab-pane fade in active">
									<div class="embed-responsive embed-responsive-16by9">
										<iframe class="outgrow-video outgrow-video-mob" src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" data-src="https://www.youtube.com/embed/PmN_MY5kNrE?vq=hd720&amp;rel=0&amp;controls=0&amp;showinfo=0;autoplay=0&amp;iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End: Modal Video -->
	<!-- Start: Modal calcEmbed1 -->
	<!--<div id="calcEmbed-modal1" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/Which-engineering-major-is-right-for-you?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed1 -->

	<!-- Start: Modal calcEmbed2 -->
	<!--<div id="calcEmbed-modal2" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/Cost-of-a-video-campaign-4?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed2 -->

	<!-- Start: Modal calcEmbed3 -->
	<!--<div id="calcEmbed-modal3" class="modal fade calcEmbed-modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-video">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
					<i class="material-icons">close</i></button>
					<div class="col-md-12 np">
						<iframe class="og-iframe-res" src="" data-calc="https://website.outgrow.co/What-is-your-risk-of-getting-a-heart-disease?vHeight=1"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<!-- End: Modal calcEmbed3 -->
@endsection

@section('inlinescripts')
@endsection


@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"index": "{{ $page->baseUrl }}/js/pageScripts/index.js",
		"resizer": "{{ $page->baseUrl }}/js/loader/resizer.js",
	}
@endsection