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
	$query = "UPDATE tbl_it_staff SET it_fname= '$Fname', it_lname = '$Lname', it_mname= '$Mname', it_gender= '$gender',it_bday='$bdate' WHERE acct_id ='$id'";
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