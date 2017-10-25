<?php


?>

<?php
include('includes/config.php');
	if(isset($_POST['uploadLec'])){
	$allowedExts = array("pdf");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);

	if ((($_FILES["file"]["type"] == "application/pdf"))
	&& ($_FILES["file"]["size"] < 4194304000 /*up to 4gb*/)
	&& in_array($extension, $allowedExts)) {
	  if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  } else {
		/*info on upload*/
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		if (file_exists("upload/lecture/" . $_FILES["file"]["name"])) {
		  echo $_FILES["file"]["name"] . " already exists. ";
		} else {
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "upload/lecture/" . $_FILES["file"]["name"]);
		  echo "Stored in: " . "upload/lecture/" . $_FILES["file"]["name"];
		  
		  
		  /*upload file to DATABASE*/
			$fileName = @mysql_real_escape_string($_FILES['file']['name']);
			$tmpName  = @mysql_real_escape_string($_FILES['file']['tmp_name']);
			$fileSize =	intval($_FILES['file']['size']);
			$fileType = @mysql_real_escape_string($_FILES['file']['type']);

			$content = @mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name']));
			$date = date('Y-m-d H:i:s');
		
			$query="INSERT INTO `tbl_lecture`
				(`lec_id`, 
				`lec_title`, 
				`lec_date_uploaded`, 
				`lec_remarks`, 
				`lec_file_name`,
				`lec_file_type`,
				`lec_file_location`,
				`lec_file_BLOB`,
				`subj_co_id`, 
				`lesson_id`)
				VALUES ('',
				'$fileName',
				'$date',
				'test remarks',
				'$fileName',
				'$fileType',
				'upload/lecture/',
				'$content',
				'1',
				'1')";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
			if($result){
				echo '<script language="javascript">';
				echo 'alert("1");';
				echo "window.location.href = 'nav_bar_test.php'";
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("2");';
				echo "window.location.href = 'nav_bar_test.php'";
				echo '</script>';
			
		}
    }
  }
} else {
  echo "Invalid file";
  echo '<script language="javascript">';
		echo 'alert("Invalid File");';
		echo "window.location.href = 'nav_bar_test.php'";
		echo '</script>';
  
}
	}
?> 