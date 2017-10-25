<?php
	include("../includes/config.php");
	
	$stud_id = $_GET["stud_id"];
	
	$query="SELECT * from tbl_view_acc_student WHERE stud_id = $stud_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result))
	{
	   $return[] = array(
		  'stud_id' => $row["stud_id"],
		  'stud_fname' => $row["stud_fname"],
		  'stud_lname' => $row["stud_lname"],
		  'stud_mname' => $row["stud_mname"],
		  'stud_gender' => $row["stud_gender"],
		  'stud_bday' => $row["stud_bday"],
		  'sec_id' => $row["sec_id"],
		  'sec_name' => $row["section_name"],
		  'sy_id' => $row["sy_id"],
		  'username' => $row["acct_username"],
		  'password' => $row["acct_password"],
		  'acct_id' => $row["acct_id"],
		  'acct_type' => $row["acct_type_name"],
		  
		  'message' => 'yes'
	   );
	}
	
	echo json_encode($return);
?>