<?php
	include("../includes/config.php");
	session_start();
	$username = $_GET["user"];
	$pass = $_GET["pass"];
	$return = array();
	$query = "SELECT * FROM tbl_view_acc_staff WHERE acct_username = '" .$username. "' ";
	$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if($row = mysqli_fetch_array($result)){
		$_SESSION['username'] = $row['acct_username'];
		$_SESSION['acc_type_name'] = $row['acct_type_name'];
		$return[] = array(
			  'name' => $row['it_fname']
		   );

		}
	
	
	echo $_GET['callback']."(".json_encode($return).");";
?>	