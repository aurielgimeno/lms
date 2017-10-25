<?php 
include("../includes/config.php");
	
/** variables for different data received */
		$username = $_GET["username"];
		$id = $_GET["accID"];
		$accType = $_GET["accType"];
		$usernamecode = "";
		$name = "";
/**checks if email exists */
		
/**checks if username exists */
		$query1 = "SELECT * FROM tbl_account WHERE acct_username = '" .$username. "'";
		$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
		$row1 = mysqli_fetch_array($result1);
			if ($row1 > 0) {
				
				$query = "SELECT * FROM tbl_account WHERE acct_username = '" .$username. "' AND acct_id = '".$id."'";
				$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
				$row = mysqli_fetch_array($result);
				if($row > 0){
					$usernamecode = "allow";
				}else{
					$usernamecode = "notallow";
				}
			}
			
			else
			{
				$usernamecode = "allow";
				}
/** return a callback to the mobile app */
echo $_GET['callback']."(".json_encode(array("username"=>$name,"uexists"=>$usernamecode)).");";
?>