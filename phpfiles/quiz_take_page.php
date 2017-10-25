<?php
	mysql_connect('localhost', 'root', '');
	mysql_select_db('db_lms_ghnhs');
	$rqID = $_GET["readyQuizId"]; 
	$sql="SELECT * FROM tbl_ready_quiz_item WHERE ready_quiz_id = $rqID";
	$records=mysql_query($sql);
	$return = array();
	while($row = mysql_fetch_array($records)){
		$return[] = array(
		  'id' => $row[0],
		  'question' => $row[1],
		  'choice1' => $row[2],
		  'choice2' => $row[3],
		  'choice3' => $row[4],
		  'choice4' => $row[5],
		  'correct' => $row[6],
		  'ready_quiz_id' => $row[7],
		  'ready_quiz_item_timer' => $row[8]
	   );
	};
	
	echo json_encode($return);
?>
