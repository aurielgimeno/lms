<?php 
include("../includes/config.php");
	
/** variables for different data received */
		$username = $_GET["username"];
		$usernamecode = "";
/**checks if email exists */
		
/**checks if username exists */
		$query1 = "SELECT * FROM tbl_account WHERE acct_username = '" .$username. "'";
		$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
		$row1 = mysqli_fetch_array($result1);
			if ($row1 > 0) {
				$usernamecode = "exists";
							}
			else
				{
				$usernamecode = "notexists";
				}
/** return a callback to the mobile app */
echo $_GET['callback']."(".json_encode(array("username"=>$username,"uexists"=>$usernamecode)).");";
?>