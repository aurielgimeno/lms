<?php
	include("../includes/config.php");
	
	
	
	
	
	$username = $_GET["username"];
	$password = $_GET["password"];
	
	$Fname = ucwords(strtolower($_GET["fname"]));
	$Lname = ucwords(strtolower($_GET["lname"]));
	$Mname = ucwords(strtolower($_GET["mname"]));
	$gender = $_GET["gender"];
	$month = $_GET["bdaym"];
	$date = $_GET["bdayd"];
	$year = $_GET["bdayy"];
	
	
	$query="INSERT INTO tbl_account (acct_username,acct_password,acct_type_name) VALUES('".$username."','".$password."','it_staff')";
	mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** bypass account verification for the meantime */
	
	$query1="INSERT INTO tbl_it_staff (it_fname,it_lname,it_mname,it_gender,it_bday,acct_id) VALUES('".$Fname."','".$Lname."','".$Mname."','".$gender."','$year-$month-$date',LAST_INSERT_ID())";
	mysqli_query($conn,$query1) or die (mysqli_error($conn));
	/** return a callback to the mobile app */
	echo $_GET['callback']."(".json_encode(array("user"=>$username)).");";
	
?>