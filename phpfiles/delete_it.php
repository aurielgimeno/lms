<?php
	include("../includes/config.php");
	
	$staff_id = $_GET["it_id"];
	$acct_id = $_GET["acct_id"];
	$return = "";
	
	$query="DELETE from tbl_it_staff WHERE it_id = $staff_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	$query1="DELETE from tbl_account WHERE acct_id = $acct_id";
	$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
	if($result1){
		$return = "success";
	}else{
		$return = "not";
	}
	
	echo json_encode($return);
?>