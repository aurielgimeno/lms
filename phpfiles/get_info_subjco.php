<?php
	include("../includes/config.php");
	
	$subjCo_id = $_GET["subjCo_id"];
	
	$query="SELECT * from tbl_view_acc_coordinator WHERE subj_co_id = $subjCo_id";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	
	$return = array();
	while($row = mysqli_fetch_array($result))
	{
	   $return[] = array(
		  'subjCo_id' => $row["subj_co_id"],
		  'subjCo_fname' => $row["subj_co_fname"],
		  'subjCo_lname' => $row["subj_co_lname"],
		  'subjCo_mname' => $row["subj_co_mname"],
		  'subjCo_gender' => $row["subj_co_gender"],
		  'subjCo_bday' => $row["subj_co_bday"],
		  'subj_id' => $row["subJ_id"],
		  'subj_name' => $row["subj_name"],
		  'username' => $row["acct_username"],
		  'password' => $row["acct_password"],
		  'acct_id' => $row["acct_id"],
		  'acct_type' => $row["acct_type_name"]
	   );
	}
	
	echo json_encode($return);
?>