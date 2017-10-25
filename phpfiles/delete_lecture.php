<?php
	include("../includes/config.php");
	
	$lec_id = $_GET["lecture_id"];
	$lec_filename = $_GET["lecture_filename"];
	
	$query="DELETE from tbl_lecture WHERE lec_id = $lec_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
		unlink("../upload/lecture/$lec_filename");
	}else{
		$return = "not";
	}
	
	echo ($return);
?>