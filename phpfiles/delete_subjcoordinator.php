<?php
	include("../includes/config.php");
	
	$subjCo_id = $_GET["subjCo_id"];
	$acct_id = $_GET["acct_id"];
	$return = "";
	
	$query="DELETE from tbl_subject_coordinator WHERE subj_co_id = $subjCo_id";
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