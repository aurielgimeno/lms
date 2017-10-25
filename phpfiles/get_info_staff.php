<?php
	include("../includes/config.php");
	
	$it_id = $_GET["it_id"];
	
	$query="SELECT * from tbl_view_acc_staff WHERE it_id = $it_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result))
	{
	   $return[] = array(
		  'it_id' => $row["it_id"],
		  'it_fname' => $row["it_fname"],
		  'it_lname' => $row["it_lname"],
		  'it_mname' => $row["it_mname"],
		  'it_gender' => $row["it_gender"],
		  'it_bday' => $row["it_bday"],
		  'username' => $row["acct_username"],
		  'password' => $row["acct_password"],
		  'acct_id' => $row["acct_id"],
		  'acct_type' => $row["acct_type_name"]
	   );
	}
	
	echo json_encode($return);
?>