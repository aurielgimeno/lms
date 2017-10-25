<?php
	session_start();
	include "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Learning Management System</title>
		<meta name="generator" content="Bootply" />
		<!--CSS-->
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<!--<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">-->
			<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
			<link href="css/styles.css" rel="stylesheet">
				<!-- Custom CSS -->
		<!--END CSS-->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
	.hideOnSubjectPage{
		display:none;
	}
	.navbar-nav li a:hover {
  	background-color:#315cb4;
	}
	.dropdown-menu li a:hover{
		background-color:#E5E5E5;
	}

</style>
	</head>

	<body background="/img/bg.jpg">
		
		<!-- Navigation -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
						<b  class="navbar-brand">Gordon Heights National High School Learning Management System</b>
						<a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">  
						<li><a href="index.php">Home</a></li>
						<li><a href="announcement.php">Announcement</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				
					<?php
						include("includes/login_span_home_pages.php");
					?>
					
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
			<br />
			<br />
		<!-- Header Carousel -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
				<li data-target="#myCarousel" data-slide-to="5"></li>
			</ol>

				<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/ban1/English.png" style="width:100%; height:350px;">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<img src="img/ban1/Math.png" style="width:100%; height:350px">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<img src="img/ban1/Science.png" style="width:100%; height:350px">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<img src="img/ban1/Filipino.png" style="width:100%; height:350px">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<img src="img/ban1/AP.png" style="width:100%; height:350px">
					<div class="carousel-caption"></div>
				</div>
				<div class="item">
					<img src="img/ban1/TLE.png" style="width:100%; height:350px">
					<div class="carousel-caption"></div>
				</div>
			</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</header>
	
		<!-- Page Content -->
		<div class="container">
			<hr>
                <div class="row">
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=1" class="chooseSubject" name="English">
						<img src="img/eng.png" style="width:100%; height:100%"; alt=""> </a>
						<center>    <h3>ENGLISH</h3>
					</div>
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=2" class="chooseSubject" name="Mathematics">
						<img src="img/math.png" style="width:100%; height:100;" alt=""> </a>
						<center>    <h3>MATHEMATICS</h3>	
					</div>
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=2" class="chooseSubject" name="Science" >
						<img src="img/sci.png" style="width:100%; height:100%;" alt=""> </a>
						<center>    <h3>SCIENCE</h3>
					</div>
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=3" class="chooseSubject" name="Filipino">
						<img src="img/fil.png" style="width:100%; height:100%" alt=""> </a>
						<center>    <h3>FILIPINO</h3> 
					</div>
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=5" class="chooseSubject" name="Araling Panlipunan">
						<img src="img/mak.png" style="width:100%; height:100%" alt=""> </a>
						<center>    <h3>ARALING PANLIPUNAN</h3>
					</div>
					<div class="col-sm-2">
						<a href="subject_content.php?subject_id=6" class="chooseSubject" name="T.L.E">
						<img src="img/tle.png" style="width:100%; height:100%;" alt=""> </a>
						<center>    <h3>T.L.E.</h3>
					</div>
				</div>
			</hr>
		</div>
	
		<!--footer-->
			<footer>
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-right"><h5>©Company 2014</h5></div>
					</div>
				</div>
			</footer>	
		<!-- /.container -->

		<!-- jQuery Version 1.11.0 -->
		
		<!-- Bootstrap Core JavaScript -->	
		
		<!-- Script to Activate the Carousel -->
		<script src="js/scripts.js"></script>
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
		<script>
			$('.carousel').carousel({
				interval: 3000 //changes the speed
			})
		</script>
<?php
	include("includes/tech_team_script_links_for_main_pages.php");#script links bootstrap.js first before jq.js
	include("includes/tech_team_custom_scripts.php");#custom scripts
?>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".chooseSubject").click(function(){
				var a = $(this).attr("name");
				window.sessionStorage.setItem("chooseSubject",a);
			});
		});
	</script>
</html>