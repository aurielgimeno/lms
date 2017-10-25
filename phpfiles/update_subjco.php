<?php
	include("../includes/config.php");
	$message ="";
	$username = $_GET["username"];
	$password = $_GET["password"];
	$id = $_GET["accID"];
	
$return = array();
$query = "UPDATE tbl_account SET acct_username = '$username', acct_password = '$password' WHERE acct_id ='$id'";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));

if($result){
	
	$Fname = $_GET["fname"];
	$Lname = $_GET["lname"];
	$Mname = $_GET["mname"];
	$gender = $_GET["gender"];
	$bdate = $_GET["bdate"];
	$subj = $_GET["subject"];
	$query = "UPDATE tbl_subject_coordinator SET subj_co_fname= '$Fname', subj_co_lname = '$Lname', subj_co_mname= '$Mname', subj_co_gender= '$gender',subj_co_bday='$bdate',subj_id= '$subj' WHERE acct_id ='$id'";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$message = "yes";
	}else{
		$message = "no";
	}
}else{
	$message = "error";
}
	echo $_GET['callback']."(".json_encode(array("umessage"=>$message)).");";
?>	