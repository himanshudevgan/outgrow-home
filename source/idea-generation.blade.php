@extends('_layouts.ideagen')

@section('title', 'Idea Generation | Outgrow')

@section('metaDescription')
	<meta name="description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators."/>
	<link rel="canonical" href="http://outgrow.co/" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Idea Generation | Outgrow" />
	<meta property="og:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta property="og:url" content="https://outgrow.co/" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="eBooks, blogs & whitepapers giving average results? Boost your marketing with highly converting interactive calculators." />
	<meta name="twitter:title" content="Idea Generation | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />
@endsection

@section('css')
    <link rel="stylesheet" href="{{ $page->baseUrl }}/css/allPage_minified.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/style.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/selectize.default.css">
@endsection

@section('pageClass', '')

@section('pageId', '')

@section('content')
	<div class="main-outr">
        <section class="sec-outr sec1-bg mouse-bg">
            <div class="sec">
                <!--<div class="logo">
                    <a href="{{ $page->baseUrl }}/">
                        <img src="//dzvexx2x036l1.cloudfront.net/logo1.png" alt="logo" />
                    </a>
                </div>-->
                <div class="sec-container">
                    <div class="sec1-text">
                        <h1 id="background1" class="mouse-bg1">
                            Generate Ideas <br>
                            for <span>Quiz</span> or <span>  Calculator.</span>
                        </h1>
                    </div>
                    <a class="sec1-button" href="javascript:void(0);">Get Started</a>
                </div>
            </div>
        </section>
        <!--<div class="logo-top hide">
            <a href="{{ $page->baseUrl }}/">
                <img src="//dzvexx2x036l1.cloudfront.net/logo1.png" alt="logo" />
            </a>
        </div>-->
        <section class="sec-outr sec2-bg hide">
            <!-- <div class="loader-wrapper category-page-loader">
                    <i class="material-icons loader-anim">autorenew</i>
            </div> -->
            <div class="preloader category-page-loader">
                    <div class="status">&nbsp;</div>
                </div>
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                        <span><sup>1</sup>/<sub>3</sub></span>
                    </div>
                    <div class="sec2-text">
                        Which category<br>
                        does your company <br> fall into?
                    </div>
                    <div class="sec-catergory">
                        <select class="demo-default selectize-category" data-placeholder="Choose Category">
                            <!-- <option value="0">Choose Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 3</option>
                            <option value="4">Category 4</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr sec3-bg hide">
       <!--  <div class="loader-wrapper sub-category-page-loader">
                    <i class="material-icons loader-anim">autorenew</i>
        </div> -->
        <div class="preloader sub-category-page-loader">
                    <div class="status">&nbsp;</div>
        </div>
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                          <span><sup>2</sup>/<sub>3</sub></span>
                    </div>
                    <div class="sec2-text">
                        Select<br>
                        Sub-Category
                    </div>
                    <div class="sec-catergory">
                        <select class="demo-default selectize-sub-category" data-placeholder="Choose Sub Category">
                           <!--  <option value="0">Sub Category</option>
                            <option value="1">Sub Category 1</option>
                            <option value="2">Sub Category 2</option>
                            <option value="3">Sub Category 3</option>
                            <option value="4">Sub Category 4</option> -->
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr sec4-bg hide">
            <div class="sec">
                <div class="sec-container">
                    <div class="sec2-step">
                        <span><sup>3</sup>/<sub>3</sub></span>
                    </div>
                    <div class="sec2-text">
                        Your Email
                    </div>
                    <div class="sec-catergory">
                        <input type="text" class="sec-input" id="form-email" placeholder="johndoe@outgrow.co" />
                        <span class="alert alert-danger email-validator hide">
						  	<i class="material-icons">error_outline</i> Please enter valid email
						</span>
                    </div>
                    <div class="butn-outr">
                        <button type="submit" class="sec-button button-ideas">Show me my ideas</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-outr new-sec-bg mouse-bg hide">
            <div class="sec">
                <!--<div class="logo">
                    <a href="{{ $page->baseUrl }}/">
                        <img src="//dzvexx2x036l1.cloudfront.net/logo1.png" alt="logo" />
                    </a>
                </div>-->
                <div class="sec-container custom-conatiner">
                    <div class="sec1-text">
                        <h2>Here you go!</h2>
                    </div>
                    <div class="update-section">
                         <div class="sec-catergory  custom-select">
                            <select class="demo-default selectize-category-result" data-placeholder="Choose Category">   </select>
                            <span class="error update-cat-error">Some error</span>
                        </div>
                        <div class="sec-catergory  custom-select">
                            <select class="demo-default selectize-sub-category-result" data-placeholder="Choose Sub Category"></select>
                            <span class="error update-subcat-error">Some error</span>
                        </div>
                        <div class="update-btn" style="float: none; display: inline-block">
                            <a href="javascript:void(0)">update</a>
                        </div>
                    </div>
     
                    <div class="funnel-points">
                        <div class="funnel-step top">
                            <figure class="icons-part">                            </figure>
                            <figcaption>
                               
                                <h4>TOP OF THE FUNNEL<span class="info-content" data-content="Your goal with Top Of The Funnel content should be to educate your audience on a specific question, need or pain point that they're looking to address, but without a sales tie-in. "><i class="material-icons">info_outline</i></span></h4>
                                <ul id="top-funnel">
                                    <li><a href="javascript:void(0)">Key Role Top Of <br> The Funnel</a></li>
                                    <li><a href="javascript:void(0)">Key Role Top Of <br> The Funnel</a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <div class="funnel-step middle">
                            <figure class="icons-part">                            </figure>
                            <figcaption>
                                <h4>Middle OF THE FUNNEL<span class="info-content" data-content="In the Middle Of The Funnel stage, your content should continue to educate but also start the process of positioning your company as the solution to the lead's needs and challenges."><i class="material-icons">info_outline</i></span></h4>
                                <ul id="mid-funnel">
                                    <li><a href="javascript:void(0)">Key Role middle Of  <br> The Funnel</a></li>
                                    <li><a href="javascript:void(0)">Key Role middle Of <br> The Funnel</a></li>
                                </ul>
                            </figcaption>
                        </div>
                        <div class="funnel-step bottom">
                            <figure class="icons-part">                            </figure>
                            <figcaption>
                                <h4>Bottom OF THE FUNNEL<span class="info-content" data-content="Now that the prospect has been engaged and informed about your product or service, in this stage, you can try and position your company/product as the preferred choice for your client."><i class="material-icons">info_outline</i></span></h4>
                                <ul id="bottom-funnel">
                                    <li><a href="javascript:void(0)">Key Role bottom Of <br> The Funnel</a></li>
                                    <li><a href="javascript:void(0)">Key Role bottom Of <br> The Funnel</a></li>
                                </ul>
                            </figcaption>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
    </div>	
@endsection

@section('inlinescripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/request.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/database.sheet.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/selectize.min.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/mouse.parallax.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/validation.js"></script>
    <script type="text/javascript" src="{{ $page->baseUrl }}/js/ideagen/build.js"></script>
@endsection


@section('pageScripts')
	const libs = {
		"idea-gen": "{{ $page->baseUrl }}/js/pageScripts/idea-gen.js"
	}
@endsection