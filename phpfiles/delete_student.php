<?php
	include("../includes/config.php");
	
	$stud_id = $_GET["stud_id"];
	
	$query="DELETE from tbl_student WHERE stud_id = $stud_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	if($result){
		$return = "success";
	}else{
		$return = "not";
	}
	
	echo json_encode($return);
?>