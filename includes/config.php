
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_lms_ghnhs";
	
	$conn = @mysqli_connect ($host,$user,$pass,$db) OR die ('Could not connect to
	MySQL: ' . mysqli_connect_error( ) );
	
	
?>