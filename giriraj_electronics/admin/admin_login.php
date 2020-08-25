<?php
include("../config.php");
session_start();
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
	
	<!-- Custom Theme files -->
	<link href="../css/style.css" rel='stylesheet' type='text/css' />
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="../css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="../js/modernizr.custom.min.js"></script>    
	<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
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
	<!-----Admin login---->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="../css/style1.css">

 
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
					
					<h3 class="visible-xs" style="font-size:24px">Giriraj Electronics</h3>
				</a>
				
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div align="center"><img src="../images/abd.jpg" style="height:80px;"> &nbsp;&nbsp;&nbsp;<h3 style="font-size:24px; color:#FFF;display:inline;">Giriraj Electronics</h3></div>
					
			</div>
		</div>
	</nav>
	
	
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	
	<div id="page-content" class="index-page" style="margin-top:100px">
	  
<div class="container">
  <div class="info">
    <h1>User Login</h1><!--<span>Made with <i class="fa fa-heart"></i> by <a href="http://andytran.me">Andy Tran</a></span>-->
  </div>
</div>
<div class="form">
  <div class="thumbnail"><img src="../images/26-1User_13-512.png" style="margin-top:-15px"/></div>
  <form class="register-form">
    <input type="text" placeholder="name"/>
    <input type="password" placeholder="password"/>
    <input type="text" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" method="post">
   <!--<label>Email</label>-->    <input type="email" placeholder="Enter Email Id" name="email"/>
    <!--<label>Password</label>--><input type="password" placeholder="Enter Password" name="password"/>
    <button type="submit" name="login">Login</button>
   <!-- <p class="message">Not registered? <a href="#">Create an account</a></p>-->
  </form>
  <?php
  if(isset($_POST['login']))
  {
  	$query="select * from user where email='".$_POST['email']."' and password='".$_POST['password']."'";
	$res=mysqli_query($con,$query);
	if(mysqli_num_rows($res)>0)
      {
  	
			$row=mysqli_fetch_array($res);
			extract($row);
			//session_start();
		  	$_SESSION['admin_email']=$row['email'];
		  	echo "<script>";
		  	echo "alert('Login Successfully');";
		  	echo "window.location.href='admin_home.php';";
		  	echo "</script>";
	  }
	else
	   {
		  echo "<script>";
		  echo "alert('Username  or Password is Invalid');";
		  echo "window.location.href='admin_login.php';";
		  echo "</script>";
	  }
	
  }
  ?>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
  <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="../js/index.js"></script>

		<!-- ////////////Content Box 01 -->
		<div id="services"></div>
		
		
	</div>

</br>
</br>
</br>
</br>
</br>


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
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	<!--<script src="../js/jquery.contact-buttons.js"></script>-->
	<script src="../js/demo.js"></script>
</body>
</html>
	
