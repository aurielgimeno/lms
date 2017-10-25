<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Learning Management System</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php
		include("includes/tech_team_css_links.php");
		?>
		<link href="css/styler.css" rel="stylesheet">
		<style type="text/css">
		html{
			position:relative;
		}
		body{
			
			background: url(img/login_bg.png) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
		</style>
	</head>
	<body style="">
<!--login modal-->
<div class="row">
			<div class="col-sm-2">
                
			</div>
<div id="loginModal" tabindex="-1" role="dialog" aria-hidden="true" border="1" class="form col-md-8 center-block"  >
  <div class="modal-dialog">
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <div class="modal-content">
      <div class="modal-header">
			<h4 class="text-center">Gordon Heights National High School <br /> Learning Management System</h4>
			<h2 class="text-center"><b>Terms and Condition</b></h2>
		  
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <ol>
				<li>The student shall obey all the rules and regulations .</li>
				<li>The student shall obey all the rules and regulations .</li>
				<li>The student shall obey all the rules and regulations .</li>
				<li>The student shall obey all the rules and regulations .</li>
				<li>The student shall obey all the rules and regulations .</li>
			  </ol>
            </div>
            
            <div class="form-group">
              <a href="index.php" target=""><button class="btn btn-primary btn-lg btn-block">Agree and Sign In</button></a>
              <span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <!--<button class="btn" data-dismiss="modal" aria-hidden="true"><a href="index.php">Back to Home</a></button>-->
          <a href="index.php"><button class="btn" >Back to Home</button></a>
		  </div>	
      </div>
	  			<div class="col-sm-4">
                
			</div>
  </div>
  </div>
</div>
	<!-- script references 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	-->	
		
		<?php
	include("includes/tech_team_script_links_for_main_pages.php");#script links bootstrap.js first before jq.js
	include("includes/tech_team_custom_scripts.php");#custom scripts
?>
	</body>
</html>