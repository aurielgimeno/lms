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
	$subject = $_GET["subject"];
	
	
	$query="INSERT INTO tbl_account (acct_username,acct_password,acct_type_name) VALUES('".$username."','".$password."','subject_coordinator')";
	mysqli_query($conn,$query) or die (mysqli_error($conn));
	/** bypass account verification for the meantime */
	
	$query1="INSERT INTO tbl_subject_coordinator (subj_co_fname,subj_co_lname,subj_co_mname,subj_co_gender,subj_co_bday,subj_id,acct_id) VALUES('".$Fname."','".$Lname."','".$Mname."','".$gender."','$year-$month-$date','".$subject."',LAST_INSERT_ID())";
	mysqli_query($conn,$query1) or die (mysqli_error($conn));
	/** return a callback to the mobile app */
	echo $_GET['callback']."(".json_encode(array("user"=>$username)).");";
	
?>