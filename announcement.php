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
<?php
	include("includes/tech_team_css_links.php");
	?>
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

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
<hr>
<hr>
<!-- Begin Body -->
<div class="container">
	<div class="no-gutter row">
				<div>
					<br />
					<br />
				</div>
      		<!-- right content column-->
      		<div class="col-lg-12 col-md-12" id="content">
            	<div class="panel">
				
				      		<div class="col-md-12" id="content">
            	<div class="panel">
    			<div class="panel-heading" style="background-color:#111;color:#fff;">Top Stories
					<ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
						<li>M|D|YR SY, RANGE  </li>
					</ul>
				</div>   
              	<div class="panel-body">
                  
                  <div class="row">
                  <div class="col-md-12">
                    <h2>The Year of Responsive Design.</h2>
                    2013 was marked as the year of Responsive Web Design (RWD). The Web is filled with big brands, galleries and magical examples that media queries demonstrate the glory of responsive design.
                    <br><br>
                    <button class="btn btn-default">More</button>
                    <h2>The Year of Responsive Design.</h2>
                    2013 was marked as the year of Responsive Web Design (RWD). The Web is filled with big brands, galleries and magical examples that media queries demonstrate the glory of responsive design.
                    <br><br>
                    <button class="btn btn-default">More</button>
                    <h2>The Year of Responsive Design.</h2>
                    2013 was marked as the year of Responsive Web Design (RWD). The Web is filled with big brands, galleries and magical examples that media queries demonstrate the glory of responsive design.
                    <br><br>
                    <button class="btn btn-default">More</button>
                    <h2>The Year of Responsive Design.</h2>
                    2013 was marked as the year of Responsive Web Design (RWD). The Web is filled with big brands, galleries and magical examples that media queries demonstrate the glory of responsive design.
                    <br><br>
                    <button class="btn btn-default">More</button>
                  </div>   
                </div>
			</div><!--/panel-body-->
                </div><!--/panel--> 	
      	</div>

                </div><!--/panel-->
              	<!--/end right column-->
      	</div> 
      			
 
      		
  	</div>
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

    <!-- jQuery Version 1.11.0 
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel 
	<script src="js/scripts.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	
	-->
    <script>
	
	
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
	
	<?php
	include("includes/tech_team_script_links_for_main_pages.php");#script links bootstrap.js first before jq.js
	include("includes/tech_team_custom_scripts.php");#custom scripts
?>
</body>

</html>
