<?php
	include("../includes/config.php");
	session_start();
	$lessonId = $_GET['lessonId'];//lesson 
	
	$query = "SELECT * from tbl_ready_quiz where lesson_id = '$lessonId'";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	//$return = array();
	//while($row = mysqli_fetch_array($result)){
	if($row = mysqli_fetch_array($result)){
		$return = $row[0];
		//$return[] = array(
		  //'json_fld1' => $row[0],
		  //'json_fld2' => $row[1],
		  //'json_fld3' => $row[2],
		  //'json_fld4' => $row[3],
		  //'json_fld5' => $row[4],
		  //'json_fld6' => $row[5],
		  //'json_fld7' => $row[6],
		  //'json_fld8' => $row[7],
		  //'json_fld9' => $row[8],
		  //'json_fld10' => $row[9],
		  //'json_fld11' => $row[10],
		  //'json_fld12' => $row[11]
	   //);
	}else{
		$return = 0;
	}
	
	echo json_encode($return);
?>