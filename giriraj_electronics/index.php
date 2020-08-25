<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Giriraj Electronics</title>
	
	<!--favicon-->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">

	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
		
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
																			
			});
	</script>

	
</head>
<body>	
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs1-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
					<img src="images/jpg.png" class="hidden-xs" alt="">
					<h3 class="visible-xs" style="font-size:24px"> Giriraj Electronics</h3>
				</a>
				
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div align="center"><img src="images/abd.jpg" style="height:80px;"> &nbsp;&nbsp;&nbsp;<h1 style="font-size:24px; color:#FFF;display:inline;"> Giriraj Electronics</h1></div>
				
			</div>
		</div>
	</nav>
	
	<header id="intro">
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/giri.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        
                    </div><!-- /header-text -->
			    </div>
				<div class="item" style="">
			    	<img src="images/tv.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                       
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/s1.jpg" alt="Third slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                       
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/mixer.png" alt="Fourth slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                       
                    </div><!-- /header-text -->
			    </div>
				<div class="item">
			    	<img src="images/w1.jpg" alt="Fifth slide">
			    	<!-- Static Header -->
                    <div class="header-text hidden-xs">
                       
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</header>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="index-page">
	
		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		<section class="box-content box-1">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<a href="admin/admin_login.php"><div class="service">
							<img src="images/ad.png" title="icon-name" title="Admin Login" style="height:100px">
							<h2>User Login</h2>
							
							<p>User can add a product,<br>View a product,<br>Search a product,<br>And can generate bill.</p>							
							<a class="btn btn-2 btn-sm" href="admin/admin_login.php">User Login</a>
						</div></a>
			 		</div>
			 				
				</div>
			</div>
		</section>
	
		
	</div>

	<footer>

		
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright 2019-2020  Designed by Giriraj Electronics</p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	<!--<script src="js/jquery.contact-buttons.js"></script>-->
	<script src="js/demo.js"></script>
</body>
</html>
	
