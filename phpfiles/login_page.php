<?php 
include("../includes/config.php");
session_start();

$username = $_GET["user"];
$pass = $_GET["pass"];
$allow = "";
$user_id = "";
$acct_type ="";

$query = "SELECT * FROM tbl_account WHERE acct_username = '" .$username. "' ";
$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
		
		if ($row = mysqli_fetch_array($result)) {
			$query = "SELECT * FROM tbl_account WHERE acct_username = '" .$username. "' AND acct_password = '".$pass."'";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
			if ($row = mysqli_fetch_array($result)) {
				$user_id = $row["acct_id"];
				$acct_type = $row["acct_type_name"];
				$allow = "yes";
			//	$_SESSION["user_nickname"] = $row["user_nickname"];
			//	$_SESSION["user_id"] = $row["user_id"];
			}
					
			else{
				//wrong password
				$allow = "maybe";
				}
		}
		else{
			$allow = "no";

			}
			
	echo $_GET['callback']."(".json_encode(array("username"=>$username,"allow"=>$allow,"user_id"=>$user_id,"acctype"=>$acct_type)).");";
?>