<?php
session_start();
include("../config.php");
if(!isset($_SESSION['admin_email']))
{
header("location:admin_login.php");
}


?>

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
		<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon">

	 <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="../css/contact-buttons.css" rel="stylesheet">
	
	
	<script src="../js/jquery.min.js"></script>
	
	
	<script type="text/javascript" src="../js/modernizr.custom.min.js"></script>    
	<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
	
		
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
	<!-----Admin login---->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../css/style1.css">
	
	
</head>
<body>	
<style>

.navbar-nav.navbar-right:last-child {
    margin-right: -90px;
}
</style>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
			
					<h3 class="visible-xs" style="font-size:24px;    margin-top: -25px;">Giriraj Electronics</h3>
				</a>
				
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div><img src="../images/abd.jpg" style="height:80px;"> <h3 style="font-size:18px; color:#FFF;display:inline;">Giriraj Electronics</h3>
					<ul class="nav navbar-nav navbar-right" style="font-size:15px">
					<li>
                        <a class="page-scroll" href="admin_home.php">Home</a>
                    </li>
					
					
					
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Specification
       						 <span class="caret"></span></a>
       						  <ul class="dropdown-menu">
                        <li><a href="add_product.php">Add Product</a></li>
                        <li><a href="view_product.php">View Product</a></li>
                        </ul>
                    </li>
					
                    <li>
                        <a class="page-scroll" href="search_product.php">Search Product</a>
                    </li>
					
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Billing
       						 <span class="caret"></span></a>
       						  <ul class="dropdown-menu">
                        <li><a href="pbill.php">Generate Bill</a></li>
                        <li><a href="showbills.php">Show All Bills</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting
       						 <span class="caret"></span></a>
       					 <ul class="dropdown-menu">
							<li><a href="change_password.php">Change Password</a></li>
							<li><a href="logout.php">Logout</a></li>
                  		</ul>
					</li>
                   
				</ul></div>
			</div>
		</div>
	</nav>
	
	<?php ?>