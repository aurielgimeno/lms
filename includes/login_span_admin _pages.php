<?php 
	//check if login
	
	if(isset($_SESSION["username"])){
		//if login
		
		echo	"<ul class='nav navbar-nav navbar-right'>";
		echo	"<li><a>$_SESSION[username]</a></li>";
		echo	"<li class='dropdown'>";
			echo	"<a href='#' class='dropdown-toggle' data-toggle='dropdown'><i class='glyphicon glyphicon-user'></i> <i class='glyphicon glyphicon-chevron-down'></i></a>";
			echo	"<ul class='dropdown-menu'>";
				echo	"<li><a class='btnLogout' href='logout.php'>Log Out</a></li>";
				echo	"<li class='divider'></li>";
				if((($_SESSION["acc_type_name"]) == "it_staff") || (($_SESSION["acc_type_name"]) == "subject_coordinator")){
					echo	"<li><a  href='index.php'>LMS Website</a></li>";
				}else{
				
				}
				
				echo	"<li><a href='admin_help_page.php'>Help</a></li>";
			echo	"</ul>";
		echo	"</li>";
					
		echo	"</ul>";
		
		
		
		
	//if login END
	}else{
	//if not login
	echo	"<ul class='nav navbar-nav navbar-right'>";
	echo	"<li><a href='login.php'>Login</a></li>";


	}
	

?>