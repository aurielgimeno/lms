<?php
	include("../includes/config.php");
	$lesson_id = 596;
	$i = 1;
	
	while($lesson_id < 1153){
		
		
		$query="INSERT INTO tbl_ready_quiz
		(ready_quiz_id, 
		ready_quiz_timer, 
		ready_quiz_title, 
		ready_quiz_date_uploaded, 
		ready_quiz_remarks, 
		ready_quiz_file_name, 
		ready_quiz_file_type, 
		ready_quiz_location, 
		ready_quiz_BLOB, 
		ready_quiz_no_of_items, 
		it_id, 
		raw_quiz_id, 
		lesson_id)
		VALUES 
		('',
		'15',
		'Quiz # $lesson_id',
		'',
		'',
		'',
		'',
		'',
		'',
		'',
		'1',
		'',
		'$lesson_id')";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
		if($result){
			$lesson_id++;
			$i++;
		$return = "$lesson_id success<br>";
		}else{
		$return = "not success<br>";
		}
		echo $return;
		
		
	}
	
	
	
	
?>