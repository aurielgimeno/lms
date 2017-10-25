<?php
	include("../includes/config.php");
	$levelid = 0;
	$four = 4;
	$subjectId = 6; //1 for english, 2 for math so on
	$mqId = 1; //1 for january, 2 for february and so on
	$syId = 1; //1 for 2014-2015
	$i = 961;
	
	
	while($mqId < 48){
			
	while($levelid < $four){
		$levelid++;
		$query="INSERT INTO tbl_lesson
		(lesson_id,
		level_id, 
		subj_id, 
		month_quarter_id, 
		sy_id) 
		VALUES 
		('$i',
		'$levelid',
		'$subjectId',
		'$mqId',
		'$syId')";
		$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
		if($result){
		
		$i++;
		$return = "$levelid success $mqId<br>";
		}else{
		$return = "not success<br>";
		}
		echo $return;
	
		if($levelid == 4){
			
				$levelid = 0;
				
				$mqId++;
				
				if($mqId == 9){
				$mqId++;
				}
			}
		}
		
	}
	
	
	
	
?>