@extends('_layouts.master')

@section('title', 'Why Interactive Content ? | Outgrow')

@section('metaDescription')
	<meta name="description" content="Because Customers want to be helped. Not Sold To."/>
	<link rel="canonical" href="http://outgrow.co/why_calculators.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Why Calculators? | Outgrow" />
	<meta property="og:description" content="Because Customers want to be helped. Not Sold To." />
	<meta property="og:url" content="https://outgrow.co/why_calculators.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Because Customers want to be helped. Not Sold To." />
	<meta name="twitter:title" content="Why Calculators? | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('inlinescripts')
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/custom-sa.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/why-responsive.css">
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/stylesheet.min.css' type='text/css' media='all'  />
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/navbar.css">
@endsection

@section('pageClass', '')

@section('pageId', 'why')

@section('content')
	<script src="{{ $page->baseUrl }}/js/swiper.min.js"></script>
	<section class="section section-metrics">

		<div class="container-fluid">
			<div class="">
				<h3>Let’s Start With The Metrics</h3>
				<h5 class="section-2-subheading">Simple pricing. No Hidden costs. No transaction-based fees. </h5>
			</div>
		</div>
		<div class="container">
			<div class="col-md-12 col-sm-12 col-xs-12 np metrics-inner">
				<div class="col-md-4 col-sm-4 col-xs-12 np metrics-inner-block">
					<h4>Conversion Rate</h4>
					<span>Interactive content provides real value to users thus boosting conversion rate exponentially. </span>
					<img src="{{ $page->baseUrl }}/images/why-img-conversionRate.png" alt="Conversion Rate">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np metrics-inner-block">
					<h4>Bounce Rate</h4>
					<span>Interactive content takes users on a journey to the results page thus reducing bounce rate. </span>
					<img src="{{ $page->baseUrl }}/images/why-img-bounceRate.png" alt="Bounce Rate">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 np metrics-inner-block">
					<h4>Social Share</h4>
					<span>Interactive content reaches a wider audience, increasing your visibility and referral traffic. </span>
					<img src="{{ $page->baseUrl }}/images/why-img-socialShare.png" alt="Social Share">
				</div>
			</div>
			<div class="asterix-text">*Data from a sample of 50 calculators	</div>
		</div>
	</section>

	<section class="section section-whyMerticsAwesome">
		<div class="container">
			<div class="section-2-heading">Why Interactive Content is Awesome! </div>	
			<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner">
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-left">
						<!-- <img src="{{ $page->baseUrl }}/images/anim1-real-value.gif" alt="Unlike Ads, Calculators Add Real Value"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-real-value.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-right">
						<h3 class="section-subheading">Unlike Ads, <b>Interactive Content Adds Real Value </b> </h3>
						<ul>
							<li>
								<span class="bullets"></span>
								<span class="list">They build trust by answering your customer's most pressing questions early on in the buying cycle. </span>
							</li>
							<li>
								<span class="bullets"></span>
								<span class="list">Buyers who don’t convert the first time will use interactive content. They form the optimal step in the buyer journey between the first visit and the eventual buy. </span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-show">
						<!-- <img src="{{ $page->baseUrl }}/images/anim2-new-traffic.gif" alt="Calculators Bring New Traffic"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-new-traffic.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-left sec-newTraffic">
						<h3 class="section-subheading">Interactive Content Brings <b>New Traffic</b> </h3>
						<ul>
							<li>
								<span class="bullets"></span>
								<span class="list">They are inherently viral. Due to the personalized nature of the responses, one is more attuned to sharing results. </span>
							</li>
							<li>
								<span class="bullets"></span>
								<span class="list">More people are searching for “How much does X cost” or “What is my risk of getting a X disease”. With interactive quizzes and calculators, get to the top of search results. </span>
							</li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-hide">
						<!-- <img src="{{ $page->baseUrl }}/images/anim2-new-traffic.gif" alt="Calculators Bring New Traffic"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-new-traffic.mp4" type="video/mp4">
						</video>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-left">
						<!-- <img src="{{ $page->baseUrl }}/images/anim3-engagement.gif" alt="Calculators Increase Engagement & Conversion"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-engagement.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-right">
						<h3 class="section-subheading">Quizzes and Calculators Increase <b>Engagement & Conversion </b> </h3>
						<ul>
							<li>
								<span class="bullets"></span>
								<span class="list">Highly interactive quizzes and calculators provide instant gratification and hence visitors are more likely to share their contact  information. </span>
							</li>
							<li>
								<span class="bullets"></span>
								<span class="list">Conversion rate from interactive content is a magnitude higher than your run-of-the-mill landing pages. </span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-12 np whyMerticsAwesome-inner-row">
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-show">
						<!-- <img src="{{ $page->baseUrl }}/images/anim4-target-sales.gif" alt="Audience Segmentation and Targeted Sales"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-augmented.mp4" type="video/mp4">
						</video>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 np whyMerticsAwesome-inner-left sec-audience">
						<h3 class="section-subheading">Audience Segmentation <b>and Targeted Sales</b> </h3>
						<ul>
							<li>
								<span class="bullets"></span>
								<span class="list">Interactive content helps you find out much more about your audience beyond name and email. You can use this information to categorize them into very specific segments. </span>
							</li>
							<li>
								<span class="bullets"></span>
								<span class="list">Interactive content-based segmentation of audience helps you design highly personalized and targeted sales followups. </span>
							</li>
						</ul>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12 np whyMerticsAwesome-inner-right rs-hide">
						<!-- <img src="{{ $page->baseUrl }}/images/anim4-target-sales.gif" alt="Audience Segmentation and Targeted Sales"> -->
						<video width="auto" height="auto" autoplay loop>
							<source src="{{ $page->baseUrl }}/images/why-video-augmented.mp4" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section section-3 p20 calc-table">
		<div class="container">
			<div class="section-2-heading">Interactive Content Trumps Static Content </div>
			<div class="col-xs-12 mobile-sec3 rs-show">
				<div class="swiper-container-first">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>Add Real Value</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<i class="material-icons hide">check_circle</i>
									<p>Answer your customers most pressing questions.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<i class="material-icons hide">gesture</i>
									<p>Sure! But do people really have time to read?</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<i class="material-icons hide">clear</i>
									<p>A marketing rant with click baits adds little value.</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>CONVERSION RATES</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">High</h4>
									<p>Interactivity enhances conversion to over 40-50%</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Uninspiring</h4>
									<p>No instant gratification only allows for 10-20%.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">eh!</h4>
									<p>You have to work hard to get 3-8%</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>TRAFFIC</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">INHERENTLY VIRAL</h4>
									<p>Personalized responses encourage sharing.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Average </h4>
									<p>They can get shared. But viral? Hardly!</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">Dead Cold</h4>
									<p>When was the last time you shared a landing page?</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="col-xs-12 sec3-box2 mk-animate-element scale-up">
								<h3>DATA</h3>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Calculators</h5>
									<h4 class="hide">RICH</h4>
									<p>Rich responses can help make sales more targeted.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Ebooks</h5>
									<h4 class="hide">Little</h4>
									<p>You can't do much with an email and name.</p>
									<span>V/S</span>
								</div>
								<div class="col-xs-12 np sec3-box2inner">
									<h5>Marketing Pages</h5>
									<h4 class="hide">Little</h4>
									<p>When did you last submit a real email? ;)</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 np rs-hide calc-table-inner">
				<div class="col-xs-12 col-sm-3 mk-animate-element scale-up">
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Add Real Value</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Conversion Rates</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Traffic</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
					<div class="col-xs-12 np sec3-box1inner">
						<h4>Data</h4>
						<p>&nbsp; <br>&nbsp;</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box2 mk-animate-element scale-up">
					<h3>Calculators</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">check_circle</i>
						<p>Answer your customers most pressing questions.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>High</h4>
						<p>Interactivity enhances conversion to over 40-50%</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Inherently Viral</h4>
						<p>Personalized responses encourage sharing.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Rich</h4>
						<p>Rich responses can help make target sales.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box3 mk-animate-element scale-up">
					<h3>eBooks</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">gesture</i>
						<p>Sure! But do people really have time to read.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Uninspiring</h4>
						<p>No instant gratification only allows for 10-20%.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Average</h4>
						<p>They can get shared. But viral? Probably not.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Little</h4>
						<p>You can't do much with an email and name.</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3 sec3-box4 mk-animate-element scale-up">
					<h3>Marketing Pages</h3>
					<div class="col-xs-12 np sec3-box2inner">
						<i class="material-icons">clear</i>
						<p>A marketing rant with click baits adds little value.</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>eh!</h4>
						<p>You have to work hard to get 3-8%</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Dead Cold</h4>
						<p>When was the last time you shared a landing page?</p>
					</div>
					<div class="col-xs-12 np sec3-box2inner">
						<h4>Little</h4>
						<p>When did you last submit a real name, email?</p>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- Homepage section 3 end-->

	<!--<section class="section section-10 sec-grey">
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
	</section>-->
	
	<!--<div class="col-md-12 col-sm-12 col-xs-12 text-center np">
		<div class="start-trial-cta btn-compare">
			<a href="/calculators-vs-ebooks">
				<button class="btn-buildcal">
					<i class="material-icons">view_compact</i>
					See how calculators compare to ebooks etc
				</button>
			</a>
		</div>
	</div>-->


	<script>
		var swiper = new Swiper('.swiper-container-first', {
			pagination: '.swiper-pagination',
			paginationClickable: true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			//spaceBetween: 30,
			//slidesPerView: 3,
			centeredSlides: true,
			// autoplay: 2500,
			speed:500,
			autoplayDisableOnInteraction: false
		});
	</script>

	<div class="col-md-12 col-sm-12 col-xs-12 text-center np case-breathers1 hide" id="liveReviews">
		<div class="container mobile-container">
			<div class="section-2-heading" style="color: rgb(34, 34, 34);">
				Average Rating 4.9/5 <br/> 500+ Reviews
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
				Average Rating 4.9/5 <br/> 500+ Reviews
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
											<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="/images/testimonial-userImg-reenaJ.png">
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
											<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="/images/testimonial-userImg-robertP.png">
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
											<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="/images/testimonial-userImg-vickyS.png">
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
											<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="/images/testimonial-userImg-joakimT.png">
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
											<img alt="gplus logo image" src="/images/testimonial-gplus-mini.jpg">
										</a>
									</div>
									<img alt="user image" src="/images/testimonial-userImg-tomL.png">
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
		</div>
	</section>
	
	<!-- <section class="section section-16 rs-show">
		<div class="container img-container-right">
			<div class="col-xs-12 col-sm-12 col-md-5 section-16-left">
				<span class="mk-animate-element right-to-left">
				  <i class="material-icons">trending_up</i>
				</span>
				<h4 class="mk-animate-element left-to-right">
					Engagement increases conversion
				</h4>
				<span class="mk-animate-element right-to-left">
				<span>The interactivity and the value add make visitors almost <b>3-4 times more likely</b> to share their contact information.</span>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 np p-img">
				<img alt="Engagement increases conversion" src="//dzvexx2x036l1.cloudfront.net/analyticsOverview-new.jpg" class="mk-animate-element left-to-right" />
			</div>
		</div>
	</section> -->

	<section class="section section-video">		
		<div class="section-2-heading">
			Interactive Content is Now Easy to Create!
		</div>
		<div class="container-video">
			<div class="video-wrapper-1">
				<div class="embed-responsive embed-responsive-16by9">
					<video width="1324" height="607" autoplay loop>
						<source src="//dzvexx2x036l1.cloudfront.net/Outgrow-demo.mp4" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</section>



	<section class="section start-trial-cta mb0 hide">
		<div class="container-fluid np">
			<div class="col-md-12 col-sm-12 col-xs-12 np">
				<div class="bg1-img">
					<a href="//app.outgrow.co" id="trialAnchor">
						<button class="btn-buildcal mk-animate-element left-to-right mk-in-viewport full-visible ripple">
							<i class="material-icons">view_compact</i>
							<p>Build Your interactive experience</p>
						</button>
					</a>
					<!-- <label>No Credit Card Required</label> -->
				</div>
			</div>
		</div>
	</section>
@endsection

@section('pageScripts')
	const libs = {
		"jquery": "https://code.jquery.com/jquery-2.1.4.min.js",
		"sitemin": "{{ $page->baseUrl }}/js/site.min.js",
		"whypage": "{{ $page->baseUrl }}/js/pageScripts/whypage.js",
		"navbar": "{{ $page->baseUrl }}/js/pageScripts/navbar.js",
	}
@endsection
