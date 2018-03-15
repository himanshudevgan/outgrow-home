@extends('_layouts.master')

@section('title', 'Pricing-Special Deal | Outgrow')

@section('metaDescription')
	<meta name="description" content="Simple pricing, No Hidden costs, No transaction based fees."/>
	<link rel="canonical" href="http://outgrow.co/pricing.html" />
	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Pricing | Outgrow" />
	<meta property="og:description" content="Simple pricing, No Hidden costs, No transaction based fees." />
	<meta property="og:url" content="https://outgrow.co/pricing.html" />
	<meta property="og:site_name" content="Outgrow" />
	<meta property="og:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:image" content="https://cdn.filestackcontent.com/dIn85YuTWuak2ghxNu89" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="Simple pricing, No Hidden costs, No transaction based fees." />
	<meta name="twitter:title" content="Pricing | Outgrow" />
	<meta name="twitter:creator" content="@outgrowco" />

@endsection

@section('inlinescripts')
@endsection

@section('css')
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/bootstrap.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/pricing-dup-ltd.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/sahil-hover.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/home-responsive.css">
	<link rel="stylesheet" href="{{ $page->baseUrl }}/css/pricing-dup-res-ltd.css">
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/stylesheet.min.css' type='text/css' media='all'  />
	<link rel='stylesheet' href='{{ $page->baseUrl }}/css/js_composer.mina752.css?ver=4.11.2.1' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('pageClass', '')

@section('pageId', 'pricing')

@section('content')
	<!-- Homepage section 1 start-->
	<section class="section section-1">
        <div class="container-fluid">
            <div class="col-xs-12 col-sm-12 text-center pricing-headingtop">
                <h3 class="plans-heading">Limited Time Discounted Pricing</h3>
                <!-- <p class="plans-subheading">Simple pricing, No Hidden costs, No transaction based fees.</p> -->
                <section id="plan-cycle" class="hide">
                    <div class="col-md-12 col-sm-12 col-xs-12 np billing-plan-list" id="plans">
                        <ul>
                            <li class="cycle-tab active" id="annually">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Annual
                                    <!-- <label class="save-per">Save 10%</label> -->
                                </a>
                            </li>
                            <!-- <li class="cycle-tab" id="half-yearly">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Semi-Annual
                                </a>
                            </li> -->
                            <li class="cycle-tab" id="monthly">
                                <a href="javascript:void(0)" class="hvr-sweep-to-right view">
                                    <i class="material-icons">check</i> Monthly
                                </a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <div class="pricing-outer container hide">
                <table>

                    <colgroup></colgroup>
                    <colgroup></colgroup>
                    <colgroup></colgroup>
                    <colgroup></colgroup>

                    <thead>
                        <tr class="">
                            <th>
                                <span class="expand-all">
                                    <i class="material-icons plus">add</i>
                                    <i class="material-icons minus">remove</i> 
                                     &nbsp;Show Detailed Pricing
                                </span>
                            </th>
                            <th class="active ltd-plan">
                                <!-- <span class="ribbon">Most Popular</span> -->
                                <span class="label-popularPlan"></span>
                                <h2>Lifetime Deal</h2>
                                <span class="annual-price">
                                    <p class="price"><sup>$</sup>49<small>*</small></p>
                                </span>
                                <span class=""><a onClick="return selectPlan('ltd')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                            </th>   
                            <th>
                                <span class="label-popularPlan">Limited Time**</span>
                                <h2>Freelancer</h2>                                
                                <span class="annual-price">
                                     <!-- <p class="strike-price">$300<sub>/yr</sub></p>  -->
                                    <p class="price"><sup>$</sup>125<small>*</small><sub>/yr</sub></p>
                                </span>
                                <span class=""><a onClick="return selectPlan('freelancer')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                            </th>                          
                            <th class="">
                                <span class="label-popularPlan"></span>
                                <h2>Essentials</h2>
                                <span class="annual-price">
                                     <!-- <p class="strike-price">$1140<sub>/yr</sub></p>  -->
                                    <p class="price"><sup>$</sup>420<small>*</small><sub>/yr</sub></p>
                                </span>
                                <span class=""><a onClick="return selectPlan('essentials')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                            </th>
                            <th class="hide">
                                <h2>Business</h2>
                                <span class="annual-price">

                                    <!--<p class="strike-price">$720<sub>/yr</sub></p>-->

                                    <p class="price"><sup>$</sup>7200<sub>/yr</sub></p>
                                </span>
                                <span class="s-annual-price">
                                    <!-- <p class="strike-price">$720<sub>/yr</sub></p> -->
                                    <p class="price"><sup>$</sup>667<sub>/yr</sub></p>
                                </span>
                                <span class="monthly-price">
                                    <!--<p class="strike-price">$45<sub>/yr</sub></p>-->
                                    <p class="price"><sup>$</sup>720<sub>/yr</sub></p>
                                </span>
                                <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                            </th>
                        </tr>
                    </thead>

                    <!--<tfoot>
                        <tr>
                            <th>&nbsp;</th>
                            <td><a href="#">Start trial</a></td>
                            <td><a href="#">Start trial</a></td>
                            <td><a href="#">Start trial</a></td>
                        </tr>
                    </tfoot>-->

                    <tbody>
                        <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i> Leads & Visits </th>
                            <td class="active-bg"><span class="quater"></span>300 & 6000</td>
                            <td><span class="quater"></span>300 & 6000</td>
                            <!-- <td class=""><span class="full"></span>Unlimited</td> -->
                             <td><span class="full"></span>1,000 & 20,000</td>
                        </tr>
                        <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i> No. of Experiences</th>
                            <td class="active-bg"><span class="quater"></span>3</td>
                            <td><span class="half"></span>6</td>
                            <td class=""><span class="full"></span>25</td>
                            <!-- <td><span class="full"></span>Unlimited</td> -->
                        </tr>
                         <tr class="not-info">
                             <th>
                                <i class="material-icons vis-hide">add</i>
                                <!-- <i class="material-icons minus">remove</i>  -->
                                Type of Experiences
                            </th> 
                            <td class="active-bg">
                                <span class="quater"></span>Only Outcome Quizzes
                                <!-- <span class="detail">Only Outcome Quizzes </span> -->
                            </td>
                            <td class="">
                                <span class="half"></span>                                
                                <span>Numerical Calculators <br/> Outcome Quizzes </span>
                                <!-- <span class="detail">Numerical Calc and Outcome Quiz </span> -->
                            </td>
                            <td class="">
                                <span class="full"></span>
                                <span>Numerical Calculators <br/>Outcome Quizzes <br/>Graded Quizzes <br/>Polls </span>
                                <!-- <span class="detail">Numerical Calculators, Outcome Quizzes, Graded Quizzes and Polls </span> -->
                            </td>
                        </tr> 
                        <!-- <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i> Collaborators</th>
                            <td><span class="quater"></span>1</td>
                            <td class="active-bg"><span class="half"></span>3</td>
                            <td><span class="full"></span>10</td>
                        </tr> -->
                        <tr class="not-info">
                            <th>
                                <i class="material-icons vis-hide">add</i>
                                <!-- <i class="material-icons minus">remove</i>--> Layouts and Templates   
                            </th>
                            <td class="expand-child active-bg">
                                <span class="quater"></span>
                                <span>Classic Layout and Templates</span>
                                <!-- <span class="detail">Only the Classic "Chicago" layout and templates.</span> -->
                            </td>
                            <td class="expand-child">
                                <span class="quater"></span>
                                <span>Classic Layout and Templates</span>
                                <!-- <span class="detail">Only the Classic "Chicago" layout and templates.</span> -->
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>
                                <span>All Layouts and Templates </span>
                                <!-- <span class="detail">All layouts and templates are unlocked.</span> -->
                            </td>
                        </tr>                        
                        <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  
                                Formula and Logic Jump
                            </th>
                            <td class="expand-child active-bg">                                
                                <span class="none"></span>No Access
                                <!-- <span class="detail">Logic jump is not included.</span> -->
                            </td>
                            <td class="expand-child">                                
                                <span class="quater"></span>Limited Access
                                <span class="detail">You can use basic mathematical operators like +,-, x and /.  </span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Full Access
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator as well as use visual logic jump [branching logic] to improve personalization.</span>                             
                            </td>
                        </tr>                         
                        <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Analytics and Tracking
                            </th>
                            <td class="expand-child active-bg">                                
                                <span class="quater"></span>Limited Access
                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                            </td>
                            <td class="expand-child">                                
                                <span class="quater"></span>Limited Access
                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Full Access
                                <span class="detail">Traffic Details, Lead Data and User Responses. Can add Facebook and Google Analytics tracking codes.</span>                             
                            </td>
                        </tr>                       
                        <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Hosting and Embedding
                            </th>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Embed Anywhere
                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                            </td>  
                            <td class="expand-child">
                                <span class="half"></span>Embed Anywhere
                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                            </td>
                            <td class="expand-child">
                                <span class="half"></span>Embed Anywhere
                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                            </td>                          
                        </tr>
                        <!-- <tr class="not-info">
                            <th>
                                Charts and Graphs
                            </th>                          
                            <td class="active-bg">
                                <span class="none"></span>No Access
                            </td>
                            <td>
                                <span class="none"></span>No Access
                            </td>  
                            <td class="">
                                <span class="none"></span>No Access
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Lead Generation
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Full Access
                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>Advanced Access
                                <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                            </td>
                            <td class="expand-child">
                                <span class="half"></span>Full Access 
                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                            </td>
                        </tr>                         -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> Advanced Features
                            </th>
                            <td class="expand-child">
                                <span class="none"></span>No Access
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>Full Access
                                <span class="detail">Advanced features include Custom Call To Actions, Conditional Messaging and Email Embeds.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Full Access
                                <span class="detail">Advanced features include Custom Call To Actions, Conditional Messaging and Email Embeds.</span>
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Domain Hosting
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Outgrow Domain
                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Outgrow Domain
                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                            </td>
                            <td class="expand-child">
                                <span class="half"></span>Outgrow Domain
                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>
                                Charts and Graphs
                            </th>
                            <td class="">
                                <span class="none"></span>No Access
                            </td>
                            <td class="active-bg">
                                <span class="full"></span>Full Access
                                 <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Full Access
                                <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Display Customizations
                            </th>
                            <td class="expand-child">
                                <span class="half"></span>Standard Access
                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="full"></span>Full Access
                                <span class="detail">Use your brand logo and customize look & feel using custom colors and tinges.</span>
                            </td>
                            <td class="expand-child">
                                <span class="half"></span>Standard Access
                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                            </td>
                        </tr>  -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Branding
                            </th>
                            <td class="expand-child">
                                <span class="quater"></span>Outgrow Branding
                                <span class="detail">A small discreet Outgrow logo at the bottom of the screen and a subtle plug in social shares.</span>
                            </td>
                            <td class="expand-child active-bg">
                                <span class="half"></span>Light Outgrow Branding
                                <span class="detail">A small discreet Outgrow logo at the bottom of the screen.</span>
                            </td>
                            <td class="expand-child">
                                <span class="half"></span>Light Outgrow Branding
                                <span class="detail">A small discreet Outgrow logo at the bottom of the screen.</span>
                            </td>
                        </tr> -->
                        <tr class="not-info">
                            <th>
                                <i class="material-icons vis-hide">add</i>
                                <!-- <i class="material-icons minus">remove</i>  -->
                                Custom Branding
                            </th>
                            <td class="expand-child active-bg">
                                <span class="full"></span>Allowed
                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Allowed
                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                            </td>
                            <td class="expand-child">
                                <span class="full"></span>Allowed
                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                            </td>
                        </tr>
                        <tr class="not-info">
                            <th>
                                <i class="material-icons vis-hide">add</i>
                                <!-- <i class="material-icons minus">remove</i>  -->
                                Integrations
                            </th>
                            <td class="expand-child active-bg">                                
                                <span class="full"></span>Zapier + Native
                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc.</span> -->
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Zapier + Native
                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc.</span>                              -->
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Zapier + Native
                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc.</span> -->
                            </td>
                        </tr>
                        <!-- <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i>Templates</th>
                            <td><span class="half"></span>Basic Template</td>
                            <td class="active-bg"><span class="full"></span>All Templates </td>
                            <td><span class="full"></span>All Templates</td>
                        </tr> 
                        <tr class="not-info">
                            <th><i class="material-icons vis-hide">add</i>Layouts</th>
                            <td><span class="half"></span>Basic Layout</td>
                            <td class="active-bg"><span class="full"></span>All Layouts </td>
                            <td><span class="full"></span>All Layouts</td>
                        </tr>  -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Call To Actions
                            </th>
                            <td class="expand-child">                                
                                Basic CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>                             
                            </td>
                            <td class="expand-child">                                
                                Advanced CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>                             
                            </td>
                            <td class="expand-child">                                
                                Advanced CTAs
                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  
                                Formulas
                            </th>
                            <td class="expand-child">                                
                                <span class="full"></span>Advanced Operators
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="full"></span>Advanced Operators
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Advanced Operators
                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i>  
                                Logic Jump
                            </th>
                            <td>
                                <span class="none"></span>No Access   
                            </td>
                            <td class="expand-child active-bg">  
                                <span class="full"></span>Full Access
                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>    
                            </td>
                            <td class="expand-child">  
                                <span class="full"></span>Full Access
                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>    
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Advanced Features
                            </th>                            
                            <td class="expand-child active-bg">
                                <span class="none"></span>No Access
                            </td>  
                            <td class="expand-child">
                                <span class="none"></span>No Access
                            </td> 
                            <td class="expand-child">
                                <span class="quater"></span>Limited Access
                                <span class="detail">Access to conditional messaging.</span>
                            </td>        
                        </tr> -->
                        <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Support
                            </th>
                            <td class="expand-child active-bg">                                
                                <span class="quater"></span>Support Docs
                                <span class="detail">You will have access to support docs.</span>
                            </td>
                            <td class="expand-child">                                
                                <span class="quater"></span>Support Docs
                                <span class="detail">You will have access to support docs.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="half"></span>Basic
                                <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>                             
                            </td>
                        </tr>
                        <!-- <tr class="expand">
                            <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Analytics
                            </th>
                            <td class="expand-child">                                
                                <span class="half"></span>Full Analytics Report
                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="full"></span>Advanced Analytics Report
                                <span class="detail">Traffic Detiails, Lead Data, User Responses & Funnel Visualization.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="half"></span>Full Analytics Report
                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>                             
                            </td>
                        </tr> -->
                        <!-- <tr class="expand">
                             <th>
                                <i class="material-icons plus">add</i>
                                <i class="material-icons minus">remove</i> 
                                Support
                            </th> 
                            <td class="expand-child">                                
                                <span class="half"></span>Basic
                                <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>                             
                            </td>
                            <td class="expand-child active-bg">                                
                                <span class="half"></span>Basic
                                <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>                             
                            </td>
                            <td class="expand-child">                                
                                <span class="full"></span>Priority
                                <span class="detail">You will have access to support docs, email support as well as live chat.</span>                             
                            </td>
                        </tr> -->
                    </tbody>

                </table>

                <!-- start: for responsive -->                    
                    <!-- lifetime -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block ltd-plan">
                        <!-- <span class="ribbon">Most Popular</span> -->
                        <span class="label-popularPlan">Life Time Deal</span>
                        <div class="pricing-top">
                            <h3>Life Time Deal</h3>
                            <span class="annual-price">
                                <p class="price"><sup>$</sup>49<small>*</small></p>
                            </span>
                            <span class=""><a onClick="return selectPlan('ltd')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li>
                                    <span class="feature-title">Leads & Visits</span>
                                    <span class="feature-subtitle"><span class="full"></span>300 &amp; 6000</span>
                                </li>
                                <li>
                                    <span class="feature-title">No. of Experiences</span>
                                    <span class="feature-subtitle"><span class="half"></span>3</span>
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Type of Experiences
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Only Outcome Quizzes</span>
                                    <!-- <span class="detail">Only Outcome Quizzes </span> -->
                                </li> 
                                <!-- <li>
                                    <span class="feature-title">Collaborators</span>
                                    <span class="feature-subtitle"><span class="half"></span>3</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                       Layouts and Templates  
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Classic Layout and Templates </span>
                                    <!-- <span class="detail">Only the Classic "Chicago" layout and templates.</span> -->
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i>  -->
                                        Formula and Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access </span>
                                    <!-- <span class="detail">Logic jump is not included.</span> -->
                                </li> 
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Analytics and Tracking
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                                </li>                                
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Access </span>
                                    <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Advanced Features
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                     <span class="detail">Advanced Features Include Custom Call To Actions, Conditional Messaging and Email Embeds.</span> 
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Charts and Graphs
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full access</span>
                                    <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Use your brand logo and customize look & feel using custom colors and tinges.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Branding
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Light Outgrow Branding</span>
                                    <span class="detail">A small discreet Outgrow logo at the bottom of the screen.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Hosting and Embedding
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                    <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Charts and Graphs
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Custom Branding
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                    <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Integrations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                    <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc. </span> -->
                                </li>
                                <!-- <li class="">
                                    <span class="feature-title">
                                        Advanced Features
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Support
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                    <span class="detail">You will have access to support docs.</span>
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                </li>-->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Advanced CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Analytics
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Analytics Report</span>
                                    <span class="detail">Traffic Details, Lead Data, User Responses & Funnel Visualization.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Support
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic</span>
                                    <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>
                                </li> -->
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- lifetime-->

                    <!-- freelancer -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block">
                        <div class="pricing-top">
                            <span class="label-popularPlan">Limited Time**</span>
                            <h3>Freelancer</h3>                            
                            <!-- <p class="strike-price">$300<sub>/mo.</sub></p> -->
                            <span class="annual-price">
                                <p class="price"><sup>$</sup>125<small>*</small><sub>/yr</sub></p>
                            </span>
                            <span class=""><a onClick="return selectPlan('freelancer')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li>
                                    <span class="feature-title">Leads & Visits</span>
                                    <span class="feature-subtitle"><span class="quater"></span>300 & 6000</span>
                                </li>
                                <li>
                                    <span class="feature-title">No. of Experiences</span>
                                    <span class="feature-subtitle"><span class="quater"></span>6</span>
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Type of Experiences
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Numerical Calculators <br/> Outcome Quizzes</span>
                                    <!-- <span class="detail">Numerical Calc and Outcome Quiz </span> -->
                                </li> 
                                <!-- <li>
                                    <span class="feature-title">Collaborators</span>
                                    <span class="feature-subtitle"><span class="full"></span>1</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                       Layouts and Templates  
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Classic Layout and Templates</span>
                                    <!-- <span class="detail">Only the Classic "Chicago" layout and templates. </span> -->
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formula and Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail"> You can use basic mathematical operators like +,-, x and /. </span>
                                </li> 
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Analytics and Tracking
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                    <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                                </li>                                
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                    <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Hosting and Embedding
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                    <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">
                                        Charts and Graphs
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Custom Branding
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                    <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Integrations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                    <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc.</span> -->
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Template</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using our basic design layout (The Chicago).</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic Layout</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Layout</span>
                                    <span class="detail">You get access to our basic, yet the most versatile layout: The Chicago.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Basic CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Basic Operators</span>
                                    <span class="detail">You can use basic mathematical operators like +,-, x and /.</span>
                                </li>
                                <li>
                                    <span class="feature-title">
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">
                                        Advanced Features
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Support
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                    <span class="detail">You will have access to support docs.</span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- freelancer-->          

                    <!-- essential -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block most-popular-plan">
                        <!-- <span class="ribbon">Most Popular</span> -->
                        <span class="label-popularPlan">Most Popular</span>
                        <div class="pricing-top">
                            <span class="label-popularPlan">Limited Time**</span>
                            <h3>Essentials</h3>
                            <!-- <p class="strike-price">$1140<sub>/mo.</sub></p> -->
                            <span class="annual-price">
                                <p class="price"><sup>$</sup>420<small>*</small><sub>/yr.</sub></p>
                            </span>
                            <span class=""><a onClick="return selectPlan('essentials')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li>
                                    <span class="feature-title">Leads & Visits</span>
                                    <span class="feature-subtitle"><span class="half"></span>1,000 & 20,000</span>
                                </li>
                                <li>
                                    <span class="feature-title">No. of Experiences</span>
                                    <span class="feature-subtitle"><span class="full"></span>25</span>
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Type of Experiences
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Numerical Calculators <br/>Outcome Quizzes <br/>Graded Quizzes <br/>Polls </span>
                                    <!-- <span class="detail">Numerical Calculators, Outcome Quizzes, Graded Quizzes and Polls </span> -->
                                </li> 
                                <!-- <li>
                                    <span class="feature-title">Collaborators</span>
                                    <span class="feature-subtitle"><span class="half"></span>3</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                       Layouts and Templates  
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts and Templates </span>
                                    <!-- <span class="detail">All layouts and templates are unlocked.</span> -->
                                </li>
                                
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formula and Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator as well as use visual logic jump [branching logic] to improve personalization.</span>
                                </li> 
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Analytics and Tracking
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Traffic Details, Lead Data and User Responses. Can add Facebook and Google Analytics tracking codes.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                    <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Hosting and Embedding
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                    <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">
                                        Charts and Graphs
                                    </span>
                                    <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                    <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Custom Branding
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                    <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                </li>
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Integrations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                    <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc. </span> -->
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Templates
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>All Templates</span>
                                    <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>
                                </li> -->
                                <!-- <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Layouts
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>All Layouts</span>
                                    <span class="detail">You get access to all of the design layouts.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Advanced CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                </li>
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Advanced Features
                                    </span>
                                    <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                     <span class="detail">Access to conditional messaging.</span> 
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Support
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Basic</span>
                                    <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- essential-->

                    <!-- business -->
                    <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block hide">
                        <div class="pricing-top">
                            <h3>Business</h3>
                            <span class="annual-price">

                                <!--<p class="strike-price">$720<sub>/yr</sub></p>-->

                                <p class="price"><sup>$</sup>7200<sub>/yr</sub></p>
                            </span>
                            <span class="s-annual-price">
                                <!-- <p class="strike-price">$720<sub>/yr</sub></p> -->
                                <p class="price"><sup>$</sup>667<sub>/yr</sub></p>
                            </span>
                            <span class="monthly-price">
                                <!--<p class="strike-price"><sup>$</sup>45<sub>/yr</sub></p>-->
                                <p class="price"><sup>$</sup>720<sub>/yr</sub></p>
                            </span>
                            <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                        </div>
                        <div class="pricing-bottom">
                            <ul class="features rs-hide">
                                <li>
                                    <span class="feature-title">Leads & Visits</span>
                                    <span class="feature-subtitle"><span class="full"></span>1,000 & 20,000</span>
                                </li>
                                <li>
                                    <span class="feature-title">No. of Experiences</span>
                                    <span class="feature-subtitle"><span class="full"></span>Unlimited</span>
                                </li>
                                <li>
                                    <span class="feature-title">Type of Experiences</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Experiences</span>
                                </li> 
                                <!-- <li>
                                    <span class="feature-title">Collaborators</span>
                                    <span class="feature-subtitle"><span class="full"></span>10</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                       Layouts and Templates  
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>All Layouts and Templates </span>
                                    <!-- <span class="detail">All layouts and templates are unlocked.</span> -->
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Lead Generation
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Access </span>
                                    <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                                </li>                                 -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Advanced Features
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                     <span class="detail">Advanced features include Custom Call To Actions, Conditional Messaging and Email Embeds.</span> 
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Domain Hosting
                                    </span>
                                    <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                    <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Charts and Graphs
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Display Customizations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Use your brand logo, customize look & feel using custom colors, tinges and add custom HTML.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Branding
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>No Outgrow Branding</span>
                                    <span class="detail">No Outgrow branding is displayed on any screen.</span>
                                </li> -->
                                <li class="">
                                    <span class="feature-title">
                                        <!-- <i class="material-icons vis-hide">add</i> -->
                                        <!-- <i class="material-icons minus">remove</i>  -->
                                        Integrations
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                    <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc.</span> -->
                                </li>
                                <!-- <li>
                                    <span class="feature-title">Templates</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                </li>
                                <li>
                                    <span class="feature-title">Layouts</span>
                                    <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Call To Actions
                                    </span>
                                    <span class="feature-subtitle">Advanced CTAs</span>
                                    <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Formulas
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                    <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                </li> -->
                                <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Logic Jump
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                    <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                </li>
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Analytics
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Advanced Analytics Report</span>
                                    <span class="detail">Traffic Detiails, Lead Data, User Responses & Funnel Visualization.</span>
                                </li> -->
                                <!-- <li class="expand-rs">
                                    <span class="feature-title">
                                        <i class="material-icons plus">add</i>
                                        <i class="material-icons minus">remove</i> 
                                        Support
                                    </span>
                                    <span class="feature-subtitle"><span class="full"></span>Priority</span>
                                    <span class="detail">You will have access to support docs, email support as well as live chat.</span>
                                </li> -->
                            </ul>
                            <a href="javascript:void(0);" class="toggle-more">
                                <i class="material-icons">add</i>
                                <p class="more-info">Show more</p>
                            </a>
                        </div>
                    </div>
                    <!-- business-->

                <!-- end: for responsive -->
            </div>
            <div class="asterix-text hide">
                *Only for new customers, who have never signed up for Outgrow before
                <br/>**Offer is available for 2 weeks only
            </div>
            <!-- <div class="col-md-12 col-sm-12 col-xs-12 np enterprise_pos">
                <div class="col-md-12 col-sm-12 col-xs-12 np text-center need-custom-plan">
                    <a class="" href="javascrpt:void(0);">
                        <i class="material-icons">headset_mic</i>need enterprise grade features? Contact us.
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 np">
                    <div class="container-enterprise">
                        <div class=" enterprise-box-new text-center">
                            <h2 class="title">Enterprise Plan</h2>
                            <span class="border-center"></span>
                            <p>
                                Made especially for power users and agencies, this plan gives you full access with a dedicated account manager, API access and team training.
                            </p>
                            <button class="ic-launcher btn btn-white-red-outline btn-hover" id="intercom_trigger">contact us</button>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <div class="col-md-12 col-sm-12 col-xs-12 np ltdSales-wrapper">
                <div class="container">
                    <div class="col-md-6 col-sm-12 col-xs-12 np">
                        <!-- ltd design for sales pages -->
                        <div class="pricing-outer container pricing-outer-ltdSales">
                            <table>

                                <colgroup></colgroup>
                                <colgroup></colgroup>
                                <!-- <colgroup></colgroup>
                                <colgroup></colgroup> -->

                                <thead>
                                    <tr class="">
                                        <th>
                                            <span class="expand-all">
                                                <i class="material-icons plus">add</i>
                                                <i class="material-icons minus">remove</i> 
                                                &nbsp;Show Detailed Pricing
                                            </span>
                                        </th>
                                        <th class="active ltd-plan">
                                            <span class="label-popularPlan">Limited Time*</span>
                                            <h2>Lifetime Deal</h2>
                                            <span class="annual-price">
                                                <p class="price"><sup>$</sup>49</p>
                                            </span>
                                            <span class=""><a onClick="return selectPlan('ltd')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                        </th>   
                                        <!-- <th>
                                            <span class="label-popularPlan">Limited Time**</span>
                                            <h2>Freelancer</h2>                                
                                            <span class="annual-price">
                                                <p class="price"><sup>$</sup>125<small>*</small><sub>/yr</sub></p>
                                            </span>
                                            <span class=""><a onClick="return selectPlan('freelancer')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                        </th>                          
                                        <th class="">
                                            <span class="label-popularPlan"></span>
                                            <h2>Essentials</h2>
                                            <span class="annual-price">
                                                <p class="price"><sup>$</sup>420<small>*</small><sub>/yr</sub></p>
                                            </span>
                                            <span class=""><a onClick="return selectPlan('essentials')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                        </th> -->
                                        <th class="hide">
                                            <h2>Business</h2>
                                            <span class="annual-price">

                                                <!--<p class="strike-price">$720<sub>/yr</sub></p>-->

                                                <p class="price"><sup>$</sup>7200<sub>/yr</sub></p>
                                            </span>
                                            <span class="s-annual-price">
                                                <!-- <p class="strike-price">$720<sub>/yr</sub></p> -->
                                                <p class="price"><sup>$</sup>667<sub>/yr</sub></p>
                                            </span>
                                            <span class="monthly-price">
                                                <!--<p class="strike-price">$45<sub>/yr</sub></p>-->
                                                <p class="price"><sup>$</sup>720<sub>/yr</sub></p>
                                            </span>
                                            <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="not-info">
                                        <th><i class="material-icons vis-hide">add</i> Leads & Visits </th>
                                        <td class="active-bg"><span class="quater"></span>300 & 6000</td>
                                        <!-- <td><span class="quater"></span>300 & 6000</td>
                                        <td><span class="full"></span>1,000 & 20,000</td> -->
                                    </tr>
                                    <tr class="not-info">
                                        <th><i class="material-icons vis-hide">add</i> No. of Experiences</th>
                                        <td class="active-bg"><span class="quater"></span>3</td>
                                        <!-- <td><span class="half"></span>6</td>
                                        <td class=""><span class="full"></span>25</td> -->
                                    </tr>
                                    <tr class="not-info">
                                        <th>
                                            <i class="material-icons vis-hide">add</i>
                                            <!-- <i class="material-icons minus">remove</i>  -->
                                            Type of Experiences
                                        </th> 
                                        <td class="active-bg">
                                            <span class="quater"></span>Only Outcome Quizzes
                                            <!-- <span class="detail">Only Outcome Quizzes </span> -->
                                        </td>
                                        <!-- <td class="">
                                            <span class="half"></span>                                
                                            <span>Numerical Calculators <br/> Outcome Quizzes </span>
                                        </td>
                                        <td class="">
                                            <span class="full"></span>
                                            <span>Numerical Calculators <br/>Outcome Quizzes <br/>Graded Quizzes <br/>Polls </span>
                                        </td> -->
                                    </tr> 
                                    <tr class="not-info">
                                        <th>
                                            <i class="material-icons vis-hide">add</i>
                                            <!-- <i class="material-icons minus">remove</i>--> Layouts and Templates   
                                        </th>
                                        <td class="expand-child active-bg">
                                            <span class="quater"></span>
                                            <span>Classic Layout and Templates</span>
                                            <!-- <span class="detail">Only the Classic "Chicago" layout and templates.</span> -->
                                        </td>
                                        <!-- <td class="expand-child">
                                            <span class="quater"></span>
                                            <span>Classic Layout and Templates</span>
                                        </td>
                                        <td class="expand-child">
                                            <span class="full"></span>
                                            <span>All Layouts and Templates </span>
                                        </td> -->
                                    </tr>                        
                                    <tr class="not-info">
                                        <th>
                                            <i class="material-icons plus vis-hide">add</i>
                                            <!-- <i class="material-icons minus">remove</i>   -->
                                            Formula and Logic Jump
                                        </th>
                                        <td class="expand-child active-bg">                                
                                            <span class="none"></span>No Access
                                            <!-- <span class="detail">Logic jump is not included.</span> -->
                                        </td>
                                        <!-- <td class="expand-child">                                
                                            <span class="quater"></span>Limited Access
                                            <span class="detail">You can use basic mathematical operators like +,-, x and /.  </span>                             
                                        </td>
                                        <td class="expand-child">                                
                                            <span class="full"></span>Full Access
                                            <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator as well as use visual logic jump [branching logic] to improve personalization.</span>                             
                                        </td> -->
                                    </tr>                         
                                    <tr class="expand">
                                        <th>
                                            <i class="material-icons plus">add</i>
                                            <i class="material-icons minus">remove</i> 
                                            Analytics and Tracking
                                        </th>
                                        <td class="expand-child active-bg">                                
                                            <span class="quater"></span>Limited Access
                                            <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                                        </td>
                                        <!-- <td class="expand-child">                                
                                            <span class="quater"></span>Limited Access
                                            <span class="detail">Traffic Details, Lead Data and User Responses.</span>                             
                                        </td>
                                        <td class="expand-child">                                
                                            <span class="full"></span>Full Access
                                            <span class="detail">Traffic Details, Lead Data and User Responses. Can add Facebook and Google Analytics tracking codes.</span>                             
                                        </td> -->
                                    </tr>                       
                                    <tr class="expand">
                                        <th>
                                            <i class="material-icons plus">add</i>
                                            <i class="material-icons minus">remove</i> 
                                            Hosting and Embedding
                                        </th>
                                        <td class="expand-child active-bg">
                                            <span class="half"></span>Embed Anywhere
                                            <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                        </td>  
                                        <!-- <td class="expand-child">
                                            <span class="half"></span>Embed Anywhere
                                            <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                        </td>
                                        <td class="expand-child">
                                            <span class="half"></span>Embed Anywhere
                                            <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                        </td>                           -->
                                    </tr>
                                    <tr class="not-info">
                                        <th>
                                            <i class="material-icons vis-hide">add</i>
                                            <!-- <i class="material-icons minus">remove</i>  -->
                                            Custom Branding
                                        </th>
                                        <td class="expand-child active-bg">
                                            <span class="full"></span>Allowed
                                            <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                        </td>
                                        <!-- <td class="expand-child">
                                            <span class="full"></span>Allowed
                                        </td>
                                        <td class="expand-child">
                                            <span class="full"></span>Allowed
                                        </td> -->
                                    </tr>
                                    <tr class="not-info">
                                        <th>
                                            <i class="material-icons vis-hide">add</i>
                                            <!-- <i class="material-icons minus">remove</i>  -->
                                            Integrations
                                        </th>
                                        <td class="expand-child active-bg">                                
                                            <span class="full"></span>Zapier + Native
                                            <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc.</span> -->
                                        </td>
                                        <!-- <td class="expand-child">                                
                                            <span class="full"></span>Zapier + Native
                                        </td>
                                        <td class="expand-child">                                
                                            <span class="full"></span>Zapier + Native
                                        </td> -->
                                    </tr>
                                    <tr class="expand">
                                        <th>
                                            <i class="material-icons plus">add</i>
                                            <i class="material-icons minus">remove</i> 
                                            Support
                                        </th>
                                        <td class="expand-child active-bg">                                
                                            <span class="quater"></span>Support Docs
                                            <span class="detail">You will have access to support docs.</span>
                                        </td>
                                        <!-- <td class="expand-child">                                
                                            <span class="quater"></span>Support Docs
                                            <span class="detail">You will have access to support docs.</span>                             
                                        </td>
                                        <td class="expand-child">                                
                                            <span class="half"></span>Basic
                                            <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>                             
                                        </td> -->
                                    </tr>
                                </tbody>

                            </table>

                            <!-- start: for responsive -->                    
                                <!-- lifetime -->
                                <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block ltd-plan">
                                    <!-- <span class="ribbon">Most Popular</span> -->
                                    <span class="label-popularPlan">Life Time Deal</span>
                                    <div class="pricing-top">
                                        <h3>Life Time Deal</h3>
                                        <span class="annual-price">
                                            <p class="price"><sup>$</sup>49<small>*</small></p>
                                        </span>
                                        <span class=""><a onClick="return selectPlan('ltd')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                    </div>
                                    <div class="pricing-bottom">
                                        <ul class="features rs-hide">
                                            <li>
                                                <span class="feature-title">Leads & Visits</span>
                                                <span class="feature-subtitle"><span class="full"></span>300 &amp; 6000</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">No. of Experiences</span>
                                                <span class="feature-subtitle"><span class="half"></span>3</span>
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Type of Experiences
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Only Outcome Quizzes</span>
                                                <!-- <span class="detail">Only Outcome Quizzes </span> -->
                                            </li> 
                                            <!-- <li>
                                                <span class="feature-title">Collaborators</span>
                                                <span class="feature-subtitle"><span class="half"></span>3</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                Layouts and Templates  
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Classic Layout and Templates </span>
                                                <!-- <span class="detail">Only the Classic "Chicago" layout and templates.</span> -->
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i>  -->
                                                    Formula and Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access </span>
                                                <!-- <span class="detail">Logic jump is not included.</span> -->
                                            </li> 
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Analytics and Tracking
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                                            </li>                                
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Lead Generation
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Access </span>
                                                <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Advanced Features
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Advanced Features Include Custom Call To Actions, Conditional Messaging and Email Embeds.</span> 
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Domain Hosting
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Charts and Graphs
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full access</span>
                                                <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Display Customizations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Use your brand logo and customize look & feel using custom colors and tinges.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Branding
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Light Outgrow Branding</span>
                                                <span class="detail">A small discreet Outgrow logo at the bottom of the screen.</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Hosting and Embedding
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Charts and Graphs
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Custom Branding
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Integrations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc. </span> -->
                                            </li>
                                            <!-- <li class="">
                                                <span class="feature-title">
                                                    Advanced Features
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Support
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                                <span class="detail">You will have access to support docs.</span>
                                            </li>
                                            <!-- <li>
                                                <span class="feature-title">Templates</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">Layouts</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                            </li>-->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Call To Actions
                                                </span>
                                                <span class="feature-subtitle">Advanced CTAs</span>
                                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formulas
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Analytics
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Analytics Report</span>
                                                <span class="detail">Traffic Details, Lead Data, User Responses & Funnel Visualization.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Support
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Basic</span>
                                                <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>
                                            </li> -->
                                        </ul>
                                        <a href="javascript:void(0);" class="toggle-more">
                                            <i class="material-icons">add</i>
                                            <p class="more-info">Show more</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- lifetime-->

                                <!-- freelancer -->
                                <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block hide">
                                    <div class="pricing-top">
                                        <span class="label-popularPlan">Limited Time**</span>
                                        <h3>Freelancer</h3>                            
                                        <!-- <p class="strike-price">$300<sub>/mo.</sub></p> -->
                                        <span class="annual-price">
                                            <p class="price"><sup>$</sup>125<small>*</small><sub>/yr</sub></p>
                                        </span>
                                        <span class=""><a onClick="return selectPlan('freelancer')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                    </div>
                                    <div class="pricing-bottom">
                                        <ul class="features rs-hide">
                                            <li>
                                                <span class="feature-title">Leads & Visits</span>
                                                <span class="feature-subtitle"><span class="quater"></span>300 & 6000</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">No. of Experiences</span>
                                                <span class="feature-subtitle"><span class="quater"></span>6</span>
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Type of Experiences
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Numerical Calculators <br/> Outcome Quizzes</span>
                                                <!-- <span class="detail">Numerical Calc and Outcome Quiz </span> -->
                                            </li> 
                                            <!-- <li>
                                                <span class="feature-title">Collaborators</span>
                                                <span class="feature-subtitle"><span class="full"></span>1</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                Layouts and Templates  
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Classic Layout and Templates</span>
                                                <!-- <span class="detail">Only the Classic "Chicago" layout and templates. </span> -->
                                            </li>
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formula and Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                                <span class="detail"> You can use basic mathematical operators like +,-, x and /. </span>
                                            </li> 
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Analytics and Tracking
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                                <span class="detail">Traffic Details, Lead Data and User Responses.</span>
                                            </li>                                
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Lead Generation
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Hosting and Embedding
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Domain Hosting
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                            </li> -->
                                            <!-- <li>
                                                <span class="feature-title">
                                                    Charts and Graphs
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Display Customizations
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Custom Branding
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Integrations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 10 direct integrations with tools like Salesforce, MailChimp, Aweber, Hubspot, Marketo Drip, Zoho, Intercom, Get Response, etc.</span> -->
                                            </li>
                                            <!-- <li>
                                                <span class="feature-title">Templates</span>
                                                <span class="feature-subtitle"><span class="half"></span>Basic Template</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Templates
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Basic Templates</span>
                                                <span class="detail">You get access to all pre-made calculators and quizzes built using our basic design layout (The Chicago).</span>
                                            </li> -->
                                            <!-- <li>
                                                <span class="feature-title">Layouts</span>
                                                <span class="feature-subtitle"><span class="half"></span>Basic Layout</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Layouts
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Basic Layout</span>
                                                <span class="detail">You get access to our basic, yet the most versatile layout: The Chicago.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Call To Actions
                                                </span>
                                                <span class="feature-subtitle">Basic CTAs</span>
                                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons to power viral sharing.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formulas
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Basic Operators</span>
                                                <span class="detail">You can use basic mathematical operators like +,-, x and /.</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">
                                                    Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <!-- <li>
                                                <span class="feature-title">
                                                    Advanced Features
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Support
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Support Docs</span>
                                                <span class="detail">You will have access to support docs.</span>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="toggle-more">
                                            <i class="material-icons">add</i>
                                            <p class="more-info">Show more</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- freelancer-->          

                                <!-- essential -->
                                <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block most-popular-plan hide">
                                    <!-- <span class="ribbon">Most Popular</span> -->
                                    <span class="label-popularPlan">Most Popular</span>
                                    <div class="pricing-top">
                                        <span class="label-popularPlan">Limited Time**</span>
                                        <h3>Essentials</h3>
                                        <!-- <p class="strike-price">$1140<sub>/mo.</sub></p> -->
                                        <span class="annual-price">
                                            <p class="price"><sup>$</sup>420<small>*</small><sub>/yr.</sub></p>
                                        </span>
                                        <span class=""><a onClick="return selectPlan('essentials')" href="//app.outgrow.co/ltd" target="_blank" class="params btn-hover">Buy Now</a></span>
                                    </div>
                                    <div class="pricing-bottom">
                                        <ul class="features rs-hide">
                                            <li>
                                                <span class="feature-title">Leads & Visits</span>
                                                <span class="feature-subtitle"><span class="half"></span>1,000 & 20,000</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">No. of Experiences</span>
                                                <span class="feature-subtitle"><span class="full"></span>25</span>
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Type of Experiences
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Numerical Calculators <br/>Outcome Quizzes <br/>Graded Quizzes <br/>Polls </span>
                                                <!-- <span class="detail">Numerical Calculators, Outcome Quizzes, Graded Quizzes and Polls </span> -->
                                            </li> 
                                            <!-- <li>
                                                <span class="feature-title">Collaborators</span>
                                                <span class="feature-subtitle"><span class="half"></span>3</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                Layouts and Templates  
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>All Layouts and Templates </span>
                                                <!-- <span class="detail">All layouts and templates are unlocked.</span> -->
                                            </li>
                                            
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formula and Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator as well as use visual logic jump [branching logic] to improve personalization.</span>
                                            </li> 
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Analytics and Tracking
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Traffic Details, Lead Data and User Responses. Can add Facebook and Google Analytics tracking codes.</span>
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Lead Generation
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Full Access </span>
                                                <span class="detail">Add lead generation capabilities to any calculator or quiz.</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Hosting and Embedding
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Embed Anywhere </span>
                                                <span class="detail">Experience hosted on Outgrow domain [yourcompany.outgrow.co] and can be embedded on any webpage.</span>
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Domain Hosting
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                            </li> -->
                                            <!-- <li>
                                                <span class="feature-title">
                                                    Charts and Graphs
                                                </span>
                                                <span class="feature-subtitle"><span class="none"></span>No Access</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Display Customizations
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Standard Access</span>
                                                <span class="detail">Use your brand logo and customize look and feel using predefined color palettes.</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Custom Branding
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Allowed</span>
                                                <!-- <span class="detail">You can add your own logo and use your brand’s colors. A small discreet Outgrow logo will appear.</span> -->
                                            </li>
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Integrations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc. </span> -->
                                            </li>
                                            <!-- <li>
                                                <span class="feature-title">Templates</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Templates
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>All Templates</span>
                                                <span class="detail">You get access to all pre-made calculators and quizzes built using any of our design layouts.</span>
                                            </li> -->
                                            <!-- <li>
                                                <span class="feature-title">Layouts</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Layouts
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>All Layouts</span>
                                                <span class="detail">You get access to all of the design layouts.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Call To Actions
                                                </span>
                                                <span class="feature-subtitle">Advanced CTAs</span>
                                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formulas
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                            </li>
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Advanced Features
                                                </span>
                                                <span class="feature-subtitle"><span class="quater"></span>Limited Access</span>
                                                <span class="detail">Access to conditional messaging.</span> 
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Support
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Basic</span>
                                                <span class="detail">You will have access to support docs as well as email support. We will try to answer all queries within 24-48 hours.</span>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="toggle-more">
                                            <i class="material-icons">add</i>
                                            <p class="more-info">Show more</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- essential-->

                                <!-- business -->
                                <div class="col-md-12 col-sm-12 col-xs-12 np pricing-block hide">
                                    <div class="pricing-top">
                                        <h3>Business</h3>
                                        <span class="annual-price">

                                            <!--<p class="strike-price">$720<sub>/yr</sub></p>-->

                                            <p class="price"><sup>$</sup>7200<sub>/yr</sub></p>
                                        </span>
                                        <span class="s-annual-price">
                                            <!-- <p class="strike-price">$720<sub>/yr</sub></p> -->
                                            <p class="price"><sup>$</sup>667<sub>/yr</sub></p>
                                        </span>
                                        <span class="monthly-price">
                                            <!--<p class="strike-price"><sup>$</sup>45<sub>/yr</sub></p>-->
                                            <p class="price"><sup>$</sup>720<sub>/yr</sub></p>
                                        </span>
                                        <span class=""><a href="//app.outgrow.co" target="_blank" class="signuplink params btn-hover">Start trial</a></span>
                                    </div>
                                    <div class="pricing-bottom">
                                        <ul class="features rs-hide">
                                            <li>
                                                <span class="feature-title">Leads & Visits</span>
                                                <span class="feature-subtitle"><span class="full"></span>1,000 & 20,000</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">No. of Experiences</span>
                                                <span class="feature-subtitle"><span class="full"></span>Unlimited</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">Type of Experiences</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Experiences</span>
                                            </li> 
                                            <!-- <li>
                                                <span class="feature-title">Collaborators</span>
                                                <span class="feature-subtitle"><span class="full"></span>10</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                Layouts and Templates  
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>All Layouts and Templates </span>
                                                <!-- <span class="detail">All layouts and templates are unlocked.</span> -->
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Lead Generation
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Access </span>
                                                <span class="detail">Ensure each lead's authenticity & reduce "fake" leads via advanced email validation.</span>
                                            </li>                                 -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Advanced Features
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Advanced features include Custom Call To Actions, Conditional Messaging and Email Embeds.</span> 
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Domain Hosting
                                                </span>
                                                <span class="feature-subtitle"><span class="half"></span>Outgrow Domain </span>
                                                <span class="detail">Experiences are hosted on "yourcompany.outgrow.co"</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Charts and Graphs
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Increase interactivity by adding charts, graphs and tables to your experiences.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Display Customizations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Use your brand logo, customize look & feel using custom colors, tinges and add custom HTML.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Branding
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>No Outgrow Branding</span>
                                                <span class="detail">No Outgrow branding is displayed on any screen.</span>
                                            </li> -->
                                            <li class="">
                                                <span class="feature-title">
                                                    <!-- <i class="material-icons vis-hide">add</i> -->
                                                    <!-- <i class="material-icons minus">remove</i>  -->
                                                    Integrations
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Zapier + Native</span>
                                                <!-- <span class="detail">You can sync user's contact information using Zapier or over 17 native integrations with tools like Marketo, Salesforce, MailChimp, Aweber, Hubspot, GetResponse, Intercom, Sendlane, Drip, Slack etc.</span> -->
                                            </li>
                                            <!-- <li>
                                                <span class="feature-title">Templates</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Templates</span>
                                            </li>
                                            <li>
                                                <span class="feature-title">Layouts</span>
                                                <span class="feature-subtitle"><span class="full"></span>All Layouts</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Call To Actions
                                                </span>
                                                <span class="feature-subtitle">Advanced CTAs</span>
                                                <span class="detail">Add Facebook, Twitter and Linkedin share buttons as well as Facebook like and Twitter Follow buttons to improve social following. You can also redirect users to external web pages and use dynamic variables.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Formulas
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Operators</span>
                                                <span class="detail">You can use any mathematical (^, log etc) or logical (if then, average etc) operator.</span>
                                            </li> -->
                                            <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Logic Jump
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Full Access</span>
                                                <span class="detail">Apply logic jump to supported templates to improve personalization.</span>
                                            </li>
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Analytics
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Advanced Analytics Report</span>
                                                <span class="detail">Traffic Detiails, Lead Data, User Responses & Funnel Visualization.</span>
                                            </li> -->
                                            <!-- <li class="expand-rs">
                                                <span class="feature-title">
                                                    <i class="material-icons plus">add</i>
                                                    <i class="material-icons minus">remove</i> 
                                                    Support
                                                </span>
                                                <span class="feature-subtitle"><span class="full"></span>Priority</span>
                                                <span class="detail">You will have access to support docs, email support as well as live chat.</span>
                                            </li> -->
                                        </ul>
                                        <a href="javascript:void(0);" class="toggle-more">
                                            <i class="material-icons">add</i>
                                            <p class="more-info">Show more</p>
                                        </a>
                                    </div>
                                </div>
                                <!-- business-->

                            <!-- end: for responsive -->
                        </div>
                        <!-- ltd design for sales pages -->
                        <div class="asterix-text">
                        *Offer is available for 2 weeks only
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 col-xs-12 np">
                        <div class="faq-section-ltd">
                            <h4 class="title-faq">FAQs</h4>
                            <div class="faq-section-title">
                                Can you explain the lifetime deal in a few words?
                            </div>
                            <div class="faq-section-content">
                                <p>This deal is exclusively for the Outgrow Quiz builder. You can have 3 live quizzes at any time by customizing our classic "Chicago" template. You also get access to certain pre-made quizzes, essential analytics, ability to customize, ability to embed on your website as well as the ability to integrate data to over 1000 tools using Zapier or our native integrations. </p>
                            </div>
                            <div class="faq-section-title">
                                What if I want other features?
                            </div>
                            <div class="faq-section-content">
                                <p>We understand that you may want to build calculators, polls while running effective lead generation programs, analyzing the data about visitors, using your own branding and using some of our premium design templates. Feel free to chat with us and we are sure that we can figure out a plan and pricing that works for you. The reason these features are not offered in the lifetime deal is due to the support costs arising from it. </p>
                            </div>
                            <div class="faq-section-title">
                                Can I get a refund?
                            </div>
                            <div class="faq-section-content">
                                <p>Yes, there is 14-day money back guarantee.  </p>
                            </div>
                            <div class="faq-section-title">
                                I am already an Outgrow subscriber, can I get this deal?
                            </div>
                            <div class="faq-section-content">
                                <p>No, this deal is only for new users and not for existing Outgrow subscribers. </p>
                            </div>
                            <div class="faq-section-title">
                                What kind of support will you offer?
                            </div>
                            <div class="faq-section-content">
                                <p>We will offer chat support for this plan. However, if you need more help or need us to build custom quizzes, then you can reach out to us over chat. Additional charges may apply for custom built quizzes. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  

	<!-- <section class="section section-faq">
		<div class="container">
			<div class="section-2-heading mk-animate-element scale-up">
				Frequently Asked Questions
			</div>
		</div>
	</section> -->
	<section class="section mk-animate-element scale-up hide">
		<div class="container-faqs">
		<div class="accordion"><div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2">
					What happens during and after the trial period?
				</a>
				<div id="accordion-2" class="accordion-section-content">
					<p>When you sign up, you will be assigned to our Business Premium plan. You will have access to this plan for 7 days. Should you choose to continue with the business plan, you will have to add your payment method.
					</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3">
					What are your billing cycles and payment options?
				</a>
				<div id="accordion-3" class="accordion-section-content">
					<p>You have the option to pay monthly, quarterly or annually. Of course, we offer heavy discounts if you buy for a longer duration.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-4">
					Any contracts or cancellation fees?
				</a>
				<div id="accordion-4" class="accordion-section-content">
					<p>For our Starter and Business premium tiers, we do not really have any contracts that need signatures. We have a simple SaaS based pricing with simple terms of service. For Enterprise customers though, we have a Service agreement which outlines SLAs and payment schedules etc.
				</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-5">
					How is my data handled?
				</a>
				<div id="accordion-5" class="accordion-section-content">
					<p>Very very securely. We use AWS serves which is basically the gold standard in hosting. We use industry benchmarked encryption for all sensitive data and subscribe to all major security measures to safeguard your data.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-6">
					Can I host on premises?
				</a>
				<div id="accordion-6" class="accordion-section-content">
					<p>Yes, you can. Just email us at support@outgrow.co.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-7">
					Can I white-label Outgrow’s tools?
				</a>
				<div id="accordion-7" class="accordion-section-content">
					<p>Yes, you can. But we will have to have a discussion around how we can make that work. Feel free to email us at support@outgrow.co and we will see what we can do.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-8">
					Can you build my calculators for me?
				</a>
				<div id="accordion-8" class="accordion-section-content">
					<p>Our DIY tool is pretty easy to use and learn, so you should be able to build your own calculators very very quickly. For our enterprise customers, we provide a 1 month onboarding where we help configure the first few calculators.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-9">
					Why should I upgrade?
				</a>
				<div id="accordion-9" class="accordion-section-content">
					<p>Well, calculators are awesome. But they are more awesome when you can run effective lead generation programs, analyze the data about visitors, use your own branding and use some of our premium design templates. </p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-10">
					Do you charge per lead?
				</a>
				<div id="accordion-10" class="accordion-section-content">
					<p>No, we charge a flat price as per your membership tier</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-11">
					Can I really build as many calculators as I want?
				</a>
				<div id="accordion-11" class="accordion-section-content">
					<p>Yes. We understand that you have tens if not hundreds of ideas and we want you to have unlimited creative space to bring your ideas to life.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-12">
					Can I get a test environment in case I do not want to publish my calculators?
				</a>
				<div id="accordion-12" class="accordion-section-content">
					<p>When you use the builder, just make sure you do not click “Publish”. That way, the calculator will neither be made public nor will it get indexed in search engines. If you want to preview the calculator, just click on “Preview” to see your edits reflect.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-13">
					I am an agency. Anything special for me?
				</a>
				<div id="accordion-13" class="accordion-section-content">
					<p>Sure. If you are an agency that works with multiple clients, we can figure out a mutually beneficial partnership. Feel free to email us at support@outgrow.co.</p>
				</div><!--end .accordion-section-content-->
			</div><!--end .accordion-section-->
		</div><!--end .accordion-->
	</div>
	</section>
	<section class="section start-trial-cta mb0">
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
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="{{ $page->baseUrl }}/js/site.min.js"></script>
    <script src="{{ $page->baseUrl }}/js/pageScripts/pricing-ltd.js"></script>
@endsection

@section('pageScripts')
	const libs = {
	};
@endsection
