<?php
	include("../includes/config.php");
	session_start();
$username = $_GET["user"];
$pass = $_GET["pass"];
$return = array();
$query = "SELECT * FROM tbl_view_acc_coordinator WHERE acct_username = '" .$username. "' ";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
if($row = mysqli_fetch_array($result)){
$_SESSION['username'] = $row['acct_username'];//username of subject_coordinator
$_SESSION['acc_type_name'] = $row['acct_type_name'];//account type name of subject_coordinator
$_SESSION['subj_co_subj_id'] = $row['subJ_id'];//subject_id  of subject_coordinator 
$_SESSION['subj_name'] = $row['subj_name'];//subject name of subject_coordinator
$_SESSION['subj_co_id'] = $row['subj_co_id']; //subject coordinator id of subject_coordinator

	$return[] = array(
		  'name' => $row['subj_co_fname'],
		  'subjID' => $row['subJ_id'],
		  'subjName' => $row['subj_name']
	   );

}
	
	
	echo $_GET['callback']."(".json_encode($return).");";
?>