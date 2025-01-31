@extends('client.layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Your HTML content from / -->
    @include('client.partials.header')

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laundryes - Laundry Business Html Template</title>
    <meta name="description" content="Laundryes - Laundry Business Html Template. It is built using bootstrap 3.3.2 framework, works totally responsive, easy to customise, well commented codes and seo friendly.">
    <meta name="keywords" content="laundry, multipage, business, clean, bootstrap">
    <meta name="author" content="rudhisasmito.com"> 
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	
	
	<!-- ==============================================
	Google Fonts
	=============================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,900' rel='stylesheet' type='text/css'>
	
	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
	
    <script type="text/javascript" src="js/modernizr.min.js"></script>
	
	

</head>

<body>
	
	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	
	<!-- NAVBAR SECTION -->
	<div class="navbar navbar-main navbar-fixed-top">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
						<div class="info">
							<div class="info-item">
								<span class="fa fa-phone"></span> Phone +62 7144 3300
							</div>
							<div class="info-item">
								<span class="fa fa-envelope-o"></span> <a href="mailto:info@laundryes.com" title="">Email info@laundryes.com</a>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
						<div class="top-sosmed pull-right">
							<a href="#" title=""><span class="fa fa-facebook"></span></a>
							<a href="#" title=""><span class="fa fa-twitter"></span></a>
							<a href="#" title=""><span class="fa fa-instagram"></span></a>
							<a href="#" title=""><span class="fa fa-pinterest"></span></a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="images/logo_blue.png" alt="" /></a>
				
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="/">Homepage Default</a></li>
						<li><a href="index2.html">Homepage Sliders</a></li>
					  </ul>
					</li>
					<li><a href="about">ABOUT</a></li>
					<li><a href="services">SERVICES</a></li>
					<li><a href="pricing">PRICING</a></li>
					<li><a href="faq">FAQ</a></li>
					<li><a href="blog">BLOG</a></li>
					<li><a href="contact">CONTACT</a></li>
				</ul>
			</div>
		</div>
    </div>

 
	<!-- BANNER -->
	<div class="section banner" >
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/homeslide.jpg" alt="...">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">WE ARE THE BEST LAUNDRY SERVICES</div>
								<div class="caption-desc">This template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</div>
								<a href="#" title="" class="btn btn-default">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<img src="images/homeslide-2.jpg" alt="...">
					<div class="carousel-caption">
						<div class="container">
							<div class="wrap-caption">
								<div class="caption-heading">WE ARE EXPERT CLEANER</div>
								<div class="caption-desc">This template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</div>
								<a href="#" title="" class="btn btn-default">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
				

			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="fa fa-chevron-left" ></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="fa fa-chevron-right" ></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<!-- END CAROUSEL -->
		
		<div class="work-info">
			<div class="container">
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-phone"></span>
					</div>
					<div class="work-info-body">
						Have a question? call us now
						<div class="work-info-lead">+62 7144 3300</div>
					</div>
				</div>
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-clock-o"></span>
					</div>
					<div class="work-info-body">
						We are open Non-Fri
						<div class="work-info-lead">Mon - Fri 08:00 - 17:00</div>
					</div>
				</div>
				<div class="work-info-item">
					<div class="work-info-icon">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="work-info-body">
						Need Support? Drop us an email
						<div class="work-info-lead"><a href="mailto:Support@yoursite.com" title="">Support@yoursite.com</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div class="section about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">WHY CHOOSE US?</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-flash"></div>
						</div>
						<div class="ket">
							<h4>EXPERT CLEANER</h4>
							<p>We give our best work for this template. We make with a love. Our template have diffrent style and layout in every each.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-money"></div>
						</div>
						<div class="ket">
							<h4>AFFORDABLE PRICE</h4>
							<p>Our templates price really affordable. Only $21 for one beutiful templates, you will get free update  and awesome support.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-truck"></div>
						</div>
						<div class="ket">
							<h4>EXPRESS DELIVERY</h4>
							<p>Yes it's right!. If you already purchased this template you will get free access to get a new template every our update launch</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
					<div class="why-item">
						<div class="icon">
							<div class="fa fa-life-bouy"></div>
						</div>
						<div class="ket">
							<h4>QUARANTEE</h4>
							<p>Of course this is muse templates, you dont need to writing code to edit, you just need to drag and drop your images.</p>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</div>

	
	<!-- SERVICES SECTION -->
	<div class="section services">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">OUR SERVICES</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-6 col-md-4">
					<div class="services-item left">
						<div class="icon">
							<img src="images/home-service-img-1.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>COIN LAUNDRY</h4>
							<p>Yes! Our templates already for desktop, tablet and mobile layout versions.</p>
						</div>
					</div>
					<div class="services-item left">
						<div class="icon">
							<img src="images/home-service-img-2.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>REDENTIAL LAUNDRY</h4>
							<p>We give you good documentation to make easy to understand.</p>
						</div>
					</div>
					<div class="services-item left">
						<div class="icon">
							<img src="images/home-service-img-3.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>BUSINESS LAUNDRY</h4>
							<p>Create and publish dynamic websites for dekstop and mobile devices.</p>
						</div>
					</div>
					
				</div>
				
				<div class="col-sm-6 col-md-4 col-md-offset-4">
					<div class="services-item right">
						<div class="icon">
							<img src="images/home-service-img-4.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>COIN LAUNDRY</h4>
							<p>Yes! Our templates already for desktop, tablet and mobile layout versions.</p>
						</div>
					</div>
					<div class="services-item right">
						<div class="icon">
							<img src="images/home-service-img-5.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>REDENTIAL LAUNDRY</h4>
							<p>We give you good documentation to make easy to understand.</p>
						</div>
					</div>
					<div class="services-item right">
						<div class="icon">
							<img src="images/home-service-img-6.jpg" alt="" class="img-circle" />
						</div>
						<div class="ket">
							<h4>BUSINESS LAUNDRY</h4>
							<p>Create and publish dynamic websites for dekstop and mobile devices.</p>
						</div>
					</div>
					
				</div>
				
				<div class="col-sm-12 col-md-4 col-md-offset-4">
					<div class="services-item-image">
						<img src="images/service_img_home2-u24208-fr.png" alt="" />
					</div>
				</div>
				
			</div>
			
		</div>
	</div>
		
	<!-- STATS SECTION FACTS --> 
	<div class="section stat-facts" style="background:url('images/page_img-u24411-fr.png') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-briefcase"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">450</h3>
								<p>Business Clients</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-coffee"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">250</h3>
								<p>Cup of Coffee</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-thumbs-o-up"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">4554</h3>
								<p>People Like Us</p>
							</div>	
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="stat-item">
							<div class="icon">
								<i class="fa fa-users"></i>
							</div>
							<div class="stat-title">
								<h3 class="number">350</h3>
								<p>Employees</p>
							</div>	
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- TESTIMONIALS SECTION -->
	<div class="section testimonials">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">TESTIMONIALS</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="images/home-testimony-img-1.jpg" alt="" class="img-circle" />
							<h3>John Deol</h3>
							<p>Manager Google</p>
						</div>
						<div class="quote-box">
							<p>"I can't believe the level of help and customer service he provided. I don't think I could have reached my deadline without him."</p>
							<div class="q-url">
								<a href="#" title="">www.google.com</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="images/home-testimony-img-2.jpg" alt="" class="img-circle" />
							<h3>Sonny Deol</h3>
							<p>Jonitor DC</p>
						</div>
						<div class="quote-box">
							<p>"Hello Rometheme, I just bought a muse template from you. Very happy with it"</p>
							<div class="q-url">
								<a href="#" title="">www.dcentertaiment.com</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="images/home-testimony-img-3.jpg" alt="" class="img-circle" />
							<h3>Jenny Deol</h3>
							<p>CEO Layer</p>
						</div>
						<div class="quote-box">
							<p>"Hello, I have purchased and used this template. everything is working great!."</p>
							<div class="q-url">
								<a href="#" title="">www.layer.com</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6">
					<div class="testimonials-item">
						<div class="people">
							<img src="images/home-testimony-img-4.jpg" alt="" class="img-circle" />
							<h3>Rambo Deol</h3>
							<p>Dota Player</p>
						</div>
						<div class="quote-box">
							<p>"i thought the designs are flexible to implement, Actually his service are quite good, truly recommended"</p>
							<div class="q-url">
								<a href="#" title="">www.dota.com</a>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- STATS SECTION CLIENT --> 
	<div class="section stat-client p-main" style="">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client1.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client2.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client3.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client1.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client2.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
					<div class="client-img">
						<img src="images/client3.png" alt="" class="img-responsive" />
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	
	 
	<!-- BLOG SECTION -->
	<div class="section blog pbot-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-md-offset-3">
					<div class="page-title">
						<h2 class="lead">LATEST NEWS</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
							<img src="images/blog-img-1.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="blog-1.html" title="">HOW TO LAUNDRY YOUR SUIT OFFICE - TIPS AND TRICK</a>
								</p>
								<p>Yes! Our templates already for desktop, tablet and mobile layout versions. You can use only desktop device or all devices which you need.</p>
							</div>
							<div class="body-footer">
								<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>
								<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2015
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
							<img src="images/blog-img-2.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="blog-2.html" title="">WELCOME TO OUR OFFICE IN INDONESIA, AUSTIN VISIT US</a>
								</p>
								<p>We give you good documentation to make easy to understand about this templates and the features. if you need we can give video tutorial too.</p>
							</div>
							<div class="body-footer">
								<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>
								<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2015
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-4">
					<div class="blog-item">
						<div class="gambar">
							<div class="icon-news">
								<div class="fa fa-image"></div>
							</div>
							<img src="images/blog-img-1c.jpg" alt="" class="img-responsive" />
						</div>
						<div class="item-body">
							<div class="description">
								<p class="lead">
									<a href="blog-3.html" title="">4 WAYS TO SIMPLY LAUNDRY!(CLEAN MY SPACE)</a>
								</p>
								<p>Create and publish dynamic websites for dekstop and mobile devices that meet the latest web standards without writing any code.</p>
							</div>
							<div class="body-footer">
								<div class="author">
									<i class="fa fa-user"></i> BY JOHN DOEL
								</div>
								<div class="date">
									<i class="fa fa-calendar"></i> MAY 29, 2015
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	
	<!-- FOOTER SECTION -->
	<div class="footer">
	
		<div class="f-desc">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-logo">
								<img src="images/logo_blue.png" alt="" />
							</div>
							<p>This template is a micro niche for business categories, namely laundry business. there was an excess of this template is using adobe muse making it easier to edit, add content, and without having to use the coding in the edit.</p>
							<div class="footer-sosmed">
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-facebook"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-twitter"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-pinterest"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-google"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-instagram"></i>
									</div>
								</a>
								<a href="#" title="">
									<div class="item">
										<i class="fa fa-linkedin"></i>
									</div>
								</a> 
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>RECENT POST</h4>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="blog-1.html" title="">How to laundry your suit office - tips and trick.</a>
								</div>
								<div class="footer-blog-date">
									May 29, 2015
								</div>
							</div>
							<div class="footer-blog-item">
								<div class="footer-blog-lead">
									<a href="blog-1.html" title="">How to laundry your suit office - tips and trick.</a>
								</div>
								<div class="footer-blog-date">
									May 29, 2015
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>NEWSLETTER</h4>
							</div>
							<div class="footer-form">
								<form action="#">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-default">SEND</button>
									</div>
									
								</form>
							</div>
							
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
						<div class="footer-item">
							<div class="footer-title">
								<h4>GET IN TOUCH</h4>
							</div>
							<div class="footer-getintouch">
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-phone"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Phone</div>
										<div class="desc-2">:</div>
										<div class="desc-3">+62 7000 4400 <br />+62 7000 4422</div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-envelope "></b>
									</div>
									<div class="desc">
										<div class="desc-1">Email</div>
										<div class="desc-2">:</div>
										<div class="desc-3"><a href="mailto:support@laundryes.com" title="">support@laundryes.com</a></div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-globe"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Website </div>
										<div class="desc-2">:</div>
										<div class="desc-3">www.laundryes.com</div>
									</div>
								</div>
								<div class="footer-getintouch-item">
									<div class="icon">
										<b class="fa fa-map-marker"></b>
									</div>
									<div class="desc">
										<div class="desc-1">Address </div>
										<div class="desc-2">:</div>
										<div class="desc-3">80 sukarajin street <br />Pekanbaru 40021 Riau</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
				
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<p class="ftex">&copy; 2016 Laundryes by Rudhi Sasmito - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>
	<script type='text/javascript' src='js/jqBootstrapValidation.js'></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
	
	<script type="text/javascript" src="js/script.js"></script>
	
</body>
</html>
    @include('client.partials.footer')
@endsection
