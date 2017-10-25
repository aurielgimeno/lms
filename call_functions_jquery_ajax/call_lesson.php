<?php
	include("../includes/config.php");
	$subjectId = $_GET['subjectId'];//subject id
	$mqId = $_GET['mqId'];//monthQuarter id
	
	$query = "SELECT * from tbl_lesson where subj_id = '$subjectId' and month_quarter_id = '$mqId'";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result)){
		$return[] = array(
		  'json_fld1' => $row[0],
		  'json_fld2' => $row[1],
		  'json_fld3' => $row[2],
		  'json_fld4' => $row[3],
		  'json_fld5' => $row[4]
	   );
	};
	
	echo json_encode($return);
?>