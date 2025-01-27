@extends('client.layouts.app')

@section('title', 'Services')

@section('content')
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <!-- Basic Page Needs -->
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
    @include('client.partials.header')

	<!-- BANNER -->
	<div class="section subbanner" style="background:url('images/slide_page.jpg') no-repeat center center;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="caption">
						<h3>PRICING</h3>
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Pricing</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	
	<!-- ABOUT SECTION -->
	<div id="services" class="section services">
		<div class="container">
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">OUR PRICING TABLE</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Regular Bag</h3>
							<div class="price">
								<sup>$</sup>10
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>15 lbs</td></tr>
									<tr><td>Home Delivery</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Medium Bag</h3>
							<div class="price">
								<sup>$</sup>25
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>30 lbs</td></tr>
									<tr><td>Home Delivery</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>Large Bag</h3>
							<div class="price">
								<sup>$</sup>45
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>40 lbs</td></tr>
									<tr><td>Home Delivery</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-3">
					<div class="panel panel-default panel-pricing wow fadeInDown">
						<header class="panel-heading">
							<h3>XLarge Bag</h3>
							<div class="price">
								<sup>$</sup>99
							</div>
						</header>
						<div class="panel-body">
							<table class="table">
								<tbody>
									<tr><td>70 lbs</td></tr>
									<tr><td>Home Delivery</td></tr>
									<tr><td>Ironing</td></tr>
									<tr><td>Perfume</td></tr>
									<tr><td>1 Day Finish</td></tr>
								</tbody>
							</table>
						</div>
						<footer class="panel-footer">
							<a href="#" class="btn btn-primary btn-block">ORDER NOW</a>
						</footer>
					</div>
		
				</div>
				
				
				
			</div>
			
			<!--  -->
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="page-title">
						<h2 class="lead">MORE DETAIL PRICE</h2>
						<p class="sublead">This template is designed with a unique and simple, so that it can promote and laundry business solution.</p>
					</div>
				</div>
			</div>
			
			<div class="row">
			
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Dry Cleaning.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>All Shirts</div>
								<div class="item-price">$ 1.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Pants, Jeans, Skirt</div>
								<div class="item-price">$ 2.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Sweeters</div>
								<div class="item-price">$ 6.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Tie, Scarf</div>
								<div class="item-price">$ 5.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Coat, Heavy Jacket, Dress</div>
								<div class="item-price">$ 10.50</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Laundry Press.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Sheets</div>
								<div class="item-price">$ 1.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Pillowcases</div>
								<div class="item-price">$ 2.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Duvet Covers</div>
								<div class="item-price">$ 6.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Bed Covers</div>
								<div class="item-price">$ 5.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Gorden</div>
								<div class="item-price">$ 10.50</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Special Items.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Fancy Dresses</div>
								<div class="item-price">$ 1.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Comforters</div>
								<div class="item-price">$ 2.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Handkerchief</div>
								<div class="item-price">$ 6.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Tuxedo Shirt</div>
								<div class="item-price">$ 5.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Polo (laundered short sleeve)</div>
								<div class="item-price">$ 10.50</div>
							</div>
							
						</div>
					</div>
		
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="price-detail">
						<div class="price-detail-heading">Leather Items.</div>
						<div class="price-detail-body">
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Fancy Dresses</div>
								<div class="item-price">$ 21.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Comforters</div>
								<div class="item-price">$ 22.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Handkerchief</div>
								<div class="item-price">$ 16.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Tuxedo Shirt</div>
								<div class="item-price">$ 85.50</div>
							</div>
							<div class="item">
								<div class="item-name"><i class="fa fa-check-circle"></i>Polo (laundered short sleeve)</div>
								<div class="item-price">$ 6.50</div>
							</div>
							
						</div>
					</div>
		
				</div>
				
				<div class="col-sm-12 col-md-12">
				
				<p class="more-info-price">Get discount 10% if you join our membership. <br />
				Leather items (1 - 2 weeks finish). <br />
				Don't worry if your items not listed here, <a href="mailto:mail@email.com" title="">Send Us Message</a> and we will take care of it.</p>
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

	
	<script>
	
	
    </script>
	
</body>
</html>
@endsection
