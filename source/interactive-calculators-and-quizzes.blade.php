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
						Boost your marketing with highly converting <b>calculators</b> and viral <b>quizzes</b>
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
				A New Marketing Toolkit
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

	<div class="col-md-12 col-sm-12 col-xs-12 np bg1-img lp-bg-freeTrial">
		<div class="col-md-12 col-xs-12 col-sm-12 np text-center startTrial-outer startTrial-outer1">
			<i class="material-icons">email</i>
			<input class="lead-form-email" name="emailId" type="email" placeholder="Please enter your email address">							
			<span class="lead-form-btn">
				<a href="//app.outgrow.co/signup/?email=" class="lead-email btn-buildcal" onclick="callGA('CANNOT WAIT CTA'); ">
					Start Free Trial
				</a>				
				<span class="live-demo">OR <a href="https://sample.outgrow.co/builder-demo/sample-calculator" class="">TAKE A LIVE DEMO</a></span>
			</span>
			<div id="bfrVid"></div>
		</div>
	</div>

	<section class="section sec-integrations lp-sec-int">
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
	<div class="section-main hide">
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

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Critically Acclaimed
			</div>
			<div class="social-media-section">
				<div class="each-arrow-section">
					<div id="fb-img" class="arrow_box testactive" onclick="openTestimonial('fb')">
						<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookim.png"/> 
						<img alt="Facebook image" src="//dzvexx2x036l1.cloudfront.net/facebookh.png" class="over over1"/>  
					</div>
		
					<div id="capterra-img" class="arrow_box" onclick="openTestimonial('capterra')">
						<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterraimg.png"/>
						<img alt="Capterra image" src="//dzvexx2x036l1.cloudfront.net/capterah.png" class="over over2"/>  
					</div>
		
					<div id="g2-img" class="arrow_box" onclick="openTestimonial('g2')">
						<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowd.png"/> 
						<img alt="G2 Crowd image" src="//dzvexx2x036l1.cloudfront.net/crowdh.png" class="over over3"/> 
					</div>

					<div id="google-img" class="arrow_box" onclick="openTestimonial('google')">
						<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_logo.png"/> 
						<img alt="Google image" src="https://dzvexx2x036l1.cloudfront.net/google_hover.png" class="over over4"/> 
					</div>

				</div>
			</div>
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1">
			<div class="container mobile-container protfolio-section">
				
				<div id="fb" class="protfolio-inner-section" data-repuso-grid="4406" data-website-id="0"></div>

				<div id="capterra" class="protfolio-inner-section testhide" data-repuso-grid="4407" data-website-id="0"></div>

				<div id="g2" class="protfolio-inner-section testhide" data-repuso-grid="4320" data-website-id="0"></div>

				<div id="google" class="protfolio-inner-section testhide" data-repuso-grid="5402" data-website-id="0"></div>
			</div>
		</div>
	</div>

	<!-- start static HTML of fb, capterra and g2 crowd -->
	<div class="col-md-12 col-sm-12 col-xs-12 text-center np custom-embeds" id="staticReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Critically Acclaimed
			</div>			

			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#fb-tab"></a></li>
				<li><a data-toggle="tab" href="#capterra-tab"></a></li>
				<li><a data-toggle="tab" href="#g2crowd-tab"></a></li>
				<li><a data-toggle="tab" href="#google-tab"></a></li>
			</ul>

			<div class="tab-content">
				<div id="fb-tab" class="tab-pane fade in active">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">If you are an A+ marketer, you will love this beast! It looks simple but the intelligence you get out of it is incredible. Makes generation of qualified leads a lot easier and even fun. A lot of thought has gone into building this piece of software. For sure.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Dapo Bankole</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-dapo.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Such a great idea for conversion rate optimization on landing pages! These are the benefits that I found were great for us: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Jonathan Naccache</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-jona.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Great calculator quiz building tool with various field types and well-designed modern templates. The resources section and support is great too. Very happy with the software.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Va Barber Hua</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-va.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">You can't beat outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. If you do some thinking, you'd be shocked how many different quizzes you can come up with. Super customisable and easy to use, would definitely recommend checking it out!</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Bryce York</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-bryce.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">These guys are so cool! Their product is fun and easy to use and obviously developed by a team of creative geniuses that care about their customers.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Rachel Kornak</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-rachel.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">The next generation of content marketing This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Jake Anderson</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="Facebook logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-fb-mini.png">
										</a>
									</div>
									<img alt="user image" src="images/testimonial-userImg-jake.png">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="capterra-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Such a great idea for conversion rate optimization
								Pros: - When you've maximized good quality traffic, this is a great idea to optimize conversion rates on your landing pages - When used intelligently, visual content mixed with calculators and quizzes leads to better engagement and completion rates - Integrates with most important tools out there
								Cons: - Wish there was more visual mapping for different outcomes, but I am confident this will be available in the near future.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Verified Reviewer</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">You can't beat Outgrow for quizzes
							Pros: You can't beat Outgrow for creating advanced quizzes that help you generate leads. It's like the facebook quizzes we used to do for fun, but now you can use them to generate top quality leads for your business. Highly recommend testing it out.
							Cons: It can be a little expensive (especially if you want the more advanced features), but if you're using it properly it'll pay for itself in no time.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Verified Reviewer</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Easy to Set-up, Great Converter
							Pros: Converting visitors to leads at a rate of 10x vs. not using Outgrow. Further, we're dropping these leads into a drip campaign specific to the results of their quiz.
							Cons: Cosmetically the tempalte we are using has shadows. Outgrow was quick to suggest an alternative template.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Ryan Zagata</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									<!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg"> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Outgrow is on to having a great product!
							Pros: I love that I can build a quiz in minutes. I love that I can mix different types of questions: Multiple choice, open ended, or select all that apply.
							Cons: I would like more page editing features rather than to depend on templates. Also, when I want to embed the Quiz on one of my pages I cannot (I don't know CSS or am a programmer) change the background color of the Quiz to reflect my site colors. This would be nice to do. I hear the new version coming out may solve this...
							Overall: Quizzes are the future of internet marketing. People love quizzes and they help you build a relationship with someone easier. If you don't use quizzes you are missing a great tool to market your products.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Ed Ferrigan</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-ed.png"> 
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">Pros: The Outgrow software is something I have been looking for in the market for a long time. However, I could only find unglamorous, 'ugly' designs and bad user interfaces.... Then, I found Outgrow. Outgrow provide a really easy solution to the problems of marketing and engaging with consumers in 2017. The team are a really dedicated support who get back to you within a few minutes on live chat.
							Cons: Nothing. Everything is great. I would like to see more features being added though, to add even more value, but otherwise really great!
							Overall: Being able to really engage with my consumers and give them fun ways to know more about my brand.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<!-- <span class="testi-desig ellipsis"></span> -->
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<!-- <div class="testimonial-question">What do you like best?</div> -->
							<div class="testimonial-answer">The next generation of content marketing
							Pros: This software is extremely agile and allows us to build any type of calculator or quiz we can imagine. This is one of the best options out there to create engaging content, especially in a time when blog posts are being dull.
							Cons: I wish the lead generation module was more agile in terms of placement. Also I would like to see an advanced drag and drop editor.
							Overall: Generate more leads. Capture the attention of my customers and build goodwill with great content.</div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										 <span class="testi-desig ellipsis">Jake Anderson</span> 
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<!-- <img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg"> -->
										</a>
									</div>
									 <!-- <img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">  -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="g2crowd-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">I think these quizzes are fabulous! I can do a variety of quizzes to intrigue my blog readers, and make different ones to fit the need at that time. Sometimes humorous, serious, or simply interesting. I love the social share so once the reader gets their outcome, they can share on social media. Also, it can take them back directly to my website. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2Crwod logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg1.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">Outgrow is the gamification of online customer engagement, a conversion machine that improves the experience of our visitors. At Bazaar10X.com we track the most effective growth strategies and Outgrow comes at the top of our list for online marketing and customer engagement. Their platform is flexible, easy to use and fully customizable making every experience unique and relevant to our target audience. We use Outgrow to drive conversion, add value or educate our audience and to pre-qualify leads. The follow-up process for our leads is much more targetted with Outgrow because we already collected key information to make the content and value proposition more relevant. We collect more leads with more relevant info. I term of SEO, the platform includes all the bells and whistles to rank and it can be used both as a standalone landing page or embedded on a website. All and all relly impressed with Outgrow, right now at the centre of our online engagement strategy. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg2.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">Outgrow is best thought of as a very powerful calculator. Imagine a very intelligent person sitting across from you with a computer asking questions, calculating results, and feeding the results back to you in an easy-to-understand form. Outgrow is all of that and more. The best part about Outgrow is that it is equally useful for beginners and advanced users alike. You can get started creating simple calculators and quizzes in no time. You can make those calculators and quizzes gorgeous with little effort. You can do it in less than 15 minutes. But it doesn't stop there. The advanced calculation features allow you to design highly complex apps without needing to do any coding. The possibilities for lead magnets and premium products are infinite and exciting. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg3.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">I like to use my time to work on my business but tactical are just as important so being able to learn a piece of software in the shortest space of time make sense. But that's not all. I have used all sorts of software , from page builders, to trackers, to heatmappers, to webinars software. What impresses me most about Outgrow is that it delivers on it's promises. All functionalities work and the support turnaround is fast and personal. I find i am not wasting time waiting 2 months plus for bug fixes and poor excuses. When i have an issue or i am not sure about a particular function - i just send a chat ticket and invariably it gets answered with 40 minutes. Money likes speed and money is fuel for a business. I like things that work! </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg4.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">This tool was so easy to use. We've tried other calculator tools but Outgrow had a variety of templates and designs as well as the flexibility of making our own formulated results. Plus the customer support team was extremely helpful in getting our calculator perfected before launch. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg5.jpg">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-question">What do you like best?</div> 
							<div class="testimonial-answer">Their customization was really great, their template selection was excellent as it let me customize my quiz exactly the way I wanted. Their drag and drip feature made it really easy for anyone in my team to be able to modify the quiz and customize it to our needs. At one point I had some questions about the platform and needed technical support, they were very helpful through the phone and were willing to work with me. The fact that the sales rep had researched my company prior to our call and gave us suggestions as to how to better implement Outgrow into our website to increase our leads was impressive. I don't think I've had a company do its research on a customer before jumping on a call. It also really helped in terms of context, since I avoided having to explain who we are and what we do. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">								
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Administrator in Information Technology and Services</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="G2 Crowd logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-g2crowd-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg6.jpg">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="google-tab" class="tab-pane fade">
					<div class="col-md-12 col-sm-12 col-xs-12 np">
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Love Outgrow as the marketing tool to get profile and health profiling of our customers. Getting to know our Health Bootcamp members well is critical as it enables us to customize the experience. Our success depends on how well we know the issues they are facing. Outgrow has great templates and branded designs as well as a very simple beautiful user experience. We have had 96% response rate using Outgrow Quiz. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Reena Jadhav</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-reenaJ.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">We've been using Outgrow to create interactive content for a range of clients. It's a great tool for creating interesting ways to add leads to the top of the funnel, whilst staying away from the overused free PDF guides, etc. The content builder is very easy to use, but extremely powerful. The scoring logic is really useful, especially the "if most answers are A, give the outcome X". There are a number of potential integrations, including to the most popular email marketing systems. The native integration with Active Campaign was perfect for our clients. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Robert Peters</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-robertP.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Put simply - why will your audience leave - once they start interacting with an Outgrow calculator. Simply outstanding .. guys you have created an amazing engaging platform where the clients get massive value. Also 24 hrs support and simply superb. great to see a company investing in great platform but also on customer service .. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Vicky Singh</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-vickyS.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Love the easy function for building a Quiz and the ability for branding. Your new leads are coming! We have searched for this for a couple of years and now it´s here. Thanks, Outgrow! Fantastic software. Easy to use, meet needs and are enjoyable! The customer service is fast with high knowledge and flexible mindset. To fully meet our brand book, and tone of voice, there have to be more fonts. Such as Open Sans and top Google font family. Meet needs, easy to use and enjoyable! </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Joakim Thörn</span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-joakimT.png">
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 np testimonial-block">
							<div class="testimonial-quote"></div>
							<div class="testimonial-answer">Great product for creating quizzes, surveys with viral power. Love the calculator option, we can create powerful assessments for our clients which calculate scores, then use that score to assign an assessment or gap value. Amazingly powerful. Support is great, really great, they always answer, always help with things we are doing even when it's a weird request. Not many cons, new features show up, but it's pretty powerful now. We've had a few growing pains as we learn to create assessments and quizzes, but support has helped us through them. </div>
							<div class="testimonial-bottom">
								<div class="testimonial-bottom-left">
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
									<i class="material-icons">star_rate</i>
								</div>
								<div class="testimonial-bottom-right">
									<div class="testi-content">
										<span class="testi-desig ellipsis">Tom Lyons </span>
										<a href="javascript:void(0);" class="view-post ellipsis">View Post
											<img alt="gplus logo image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="https://dzvexx2x036l1.cloudfront.net/testimonial-userImg-tomL.png">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<!-- end static HTML of fb, capterra and g2 crowd -->

	<script>
		function triggerLiveStaticReviews () {
			var url = 'https://api.repuso.com/v1/widgets/posts/4406?callback=jQuery111205308389182797406_1512564953651&website_id=0&_=1512564953652';
			var live = document.querySelector('#liveReviews');
			var static = document.querySelector('#staticReviews');

			var xhr = new XMLHttpRequest;
			xhr.onreadystatechange = function () {
				console.log('Ready state changed');
				if (this.status == 200) {
					live.classList.remove('hide');
					static.classList.add('hide');
				}
				else {
					static.classList.remove('hide');
					live.classList.add('hide');
				}
			}
			xhr.open("GET", url, true);
			xhr.setRequestHeader('Access-Control-Allow-Origin', '*');
			xhr.send();
		}

		var gridJS = document.createElement('script');
		gridJS.src = 'https://repuso.com/widgets/grid.js';

		gridJS.onload = triggerLiveStaticReviews;

		var head = document.querySelector('head');
		head.appendChild(gridJS);
	</script> 

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
		<span>Copyright 2018</span>
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