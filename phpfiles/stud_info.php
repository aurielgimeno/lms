<?php
	include("../includes/config.php");
	session_start();
$username = $_GET["user"];
$pass = $_GET["pass"];
$name = "";
$return = array();
$query = "SELECT * FROM tbl_view_acc_student WHERE acct_username = '" .$username. "' ";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
if($row = mysqli_fetch_array($result)){

$_SESSION['username'] = $row['acct_username'];
$_SESSION['acc_type_name'] = $row['acct_type_name'];
$_SESSION['stud_id'] = $row['stud_id'];

	$return[] = array(
		  'stud_id' => $row['stud_id'],
		  'lname' => $row['stud_lname'],
		  'fname' => $row['stud_fname']
		  
	   );

	
	
	}
	echo $_GET['callback']."(".json_encode($return).");";
?>