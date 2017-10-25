<?php
	session_start();
	include "includes/config.php";
	if(isset($_SESSION["username"])){
		header('location:index.php');
	}else{
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Learning Management System</title>
		<meta name="generator" content="Bootply" />
		<script type="text/javascript" src="js/jq.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
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
		<?php
	include("includes/tech_team_css_links.php");
	?>
	</head>
	
<body style="">
<!--login modal-->
<div>
<div id="termsAndContidionModal" tabindex="-1" role="dialog" aria-hidden="true" border="1" style="margin-top:5.5%;" class="form col-lg-4 col-md-8 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-2 col-sm-offset-0 col-xs-offset-0" >
  
 
  <div class="modal-content">
      <div class="modal-header">
			<h4 class="text-center">Gordon Heights National High School <br /> Learning Management System</h4>
			<h3 class="text-center">Terms of use and conditions</h3>
			
      </div>
      <div class="modal-body" style="overflow:auto;max-height:20em;">
		<p>For Students:</p>
          <ol>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		  </ol>
		<p>For Subject Coordinators:</p>
		 <ol>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		  </ol>
		 <p>For IT Staff</p>
      </div>
      <div class="modal-footer">
          <div class="col-lg-12" style="text-align:left">
			
			<input type="checkbox" name="agreeTo" id="agreeTo"  style="vertical-align:bottom;display:inline-block;" />
			<span style="vertical-align:bottom;display:inline-block;">I have read and agree to the Terms and Conditions</span>
          <!--<button class="btn" data-dismiss="modal" aria-hidden="true"><a href="index.php">Back to Home</a></button>-->
         
		
		  </div>
		  <div class="row" style="margin-top:2em;">
		  <div class="col-lg-6">
		   
			<button id="btnContinueToLogin" class="btn btn-success" style="float:left;"  >Continue</button>
		  </div>	
		  <div class="col-lg-6">
		   <a href="index.php" style="float:right"><button class="btn btn-primary" >Back to Home</button></a>
         
		  </div>
</div>		  
      </div>
	  		
  </div>
  
</div>

<div id="loginModal" tabindex="-1" role="dialog" aria-hidden="true" border="1" style="display:none;margin-top:7.5%;" class="form col-lg-4 col-md-8 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-2 col-sm-offset-0 col-xs-offset-0" >
  
 
  <div class="modal-content">
      <div class="modal-header">
			<h4 class="text-center">Gordon Heights National High School <br /> Learning Management System</h4>
			<h2 class="text-center">Login Form</h2>
			<div id="popuptext" class="text-center"></div>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" id="loginform" action="javascript:verifyfirst()">
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="user" id="username" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" name="pass" id="password" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign In" id="btnlogin"/>
              <!--<span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <!--<button class="btn" data-dismiss="modal" aria-hidden="true"><a href="index.php">Back to Home</a></button>-->
          <a href="index.php"><button class="btn btn-primary" >Back to Home</button></a>
		  </div>	
      </div>
	  			<div class="col-sm-4">
                
			</div>
  </div>
  
</div>
<script type="text/javascript">
	$('#btnContinueToLogin').prop('disabled', true);
	$("#agreeTo").click(function(){
		if($('#btnContinueToLogin').is(':disabled')){
			$('#btnContinueToLogin').prop('disabled', false);
		}else {
			$('#btnContinueToLogin').prop('disabled', true);
		}
	});
	$("#btnContinueToLogin").click(function(){
		$("#termsAndContidionModal").fadeToggle(function(){
			$("#loginModal").fadeToggle();
		});
		
	});
	var lform = $("#loginform");
	function verifyfirst(){
		if($( "#username" ).val() == "" || $( "#password" ).val() == "")
		{
			$("#popuptext").html("<h6>Please Enter Username/Password</h6>");
			return;
		}
				
		
			$.getJSON("phpfiles/login_page.php?callback=?",lform.serialize(), function(data)
			{
			
				if (data.allow == "yes")
				{
					if(data.acctype == "subject_coordinator"){
						
						$.getJSON("phpfiles/coor_info.php?callback=?",lform.serialize(), function(data)
						{
							var subjCoSubjectId = data[0].subjID;
							var subjName = data[0].subjName;
							window.sessionStorage.setItem("subjCoSubjectId",subjCoSubjectId);
							window.sessionStorage.setItem("subjName",subjName);
							window.location = "admin_add_files_page.php";
						
						}).fail(function(data){
						
							$("#popuptext").html("<h6>Error on Log In.</h6>");
						
						
						});
						
					}
					else if(data.acctype == "it_staff"){
					
						$.getJSON("phpfiles/it_info.php?callback=?",lform.serialize(), function(data)
						{
							window.location = "admin_add_files_page.php";
						
						
						}).fail(function(data){
						
							$("#popuptext").html("<h6>Error on Log In.</h6>");
							
						
						});
						
					}
					else if(data.acctype == "student"){
					
						$.getJSON("phpfiles/stud_info.php?callback=?",lform.serialize(), function(data)
						{
							var studIdOnLogin = data[0].stud_id;
							//alert(studIdOnLogin);
							window.location = "index.php";
							window.sessionStorage.setItem("stud_id",studIdOnLogin);
						
						}).fail(function(data){
						
							$("#popuptext").html("<h6>Error on Log In.</h6>");
						
						
						});
						 
					}
					
					
				}
				else if(data.allow == "no")
				{
					
					$("#popuptext").html("<h6>The account you've entered is not registered.</h6>");

				}
				else if(data.allow == "maybe")
				{
					
					$("#popuptext").html("<h6>Incorrect password. Please Try Again</h6>");

				}else{
					$("#popuptext").html("<h6>Problem with your login, Please check internet connection or try again later.</h6>");
				}
			}).fail(function(data){
				
				$("#popuptext").html("<h6>Problem with your login, Please check internet connection or try again later.</h6>");
				
				
			});
		}
	</script>
	<!-- script references -->
		
	</body>
</html>
<?php
	}
?>