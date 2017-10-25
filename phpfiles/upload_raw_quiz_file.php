<?php
//mga kelangan
//1.session_start()
//2. $_SESSION[subj_co_id] id of subject coordinator
session_start();
?>

<?php
include('../includes/config.php');
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
		/*info on upload
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
		*/
		if (file_exists("../upload/raw_quiz/" . $_FILES["file"]["name"])) {
		  //echo $_FILES["file"]["name"] . " already exists. ";
				echo '<script language="javascript">';
				echo 'alert("File Already Exist");';
				echo "window.location.href = '../admin_add_files_page.php'";
				echo '</script>';
		} else {
		  move_uploaded_file($_FILES["file"]["tmp_name"],
		  "../upload/raw_quiz/" . $_FILES["file"]["name"]);
		  /*echo "Stored in: " . "../upload/lecture/" . $_FILES["file"]["name*/
		  
		  
		  /*upload file to DATABASE*/
			$fileName = @mysql_real_escape_string($_FILES['file']['name']);
			$tmpName  = @mysql_real_escape_string($_FILES['file']['tmp_name']);
			$fileSize =	intval($_FILES['file']['size']);
			$fileType = @mysql_real_escape_string($_FILES['file']['type']);

			$content = @mysql_real_escape_string(file_get_contents($_FILES['file']['tmp_name']));
			$date = date('Y-m-d H:i:s');
			$subjectCoId = $_SESSION["subj_co_id"];
			$lessonId = $_POST["lesson_id"];
			$remarks = $_POST["remarks"];
			$query="INSERT INTO `tbl_raw_quiz`
				(`raw_quiz_id`, 
				`raw_quiz_title`, 
				`raw_quiz_date_uploaded`, 
				`raw_quiz_remarks`, 
				`raw_quiz_file_name`,
				`raw_quiz_file_type`,
				`raw_quiz_file_location`,
				`raw_quiz_file_BLOB`,
				`subj_co_id`, 
				`lesson_id`)
				VALUES ('',
				'$fileName',
				'$date',
				'$remarks',
				'$fileName',
				'$fileType',
				'upload/raw_quiz/',
				'$content',
				'$subjectCoId',
				'$lessonId')";
			$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
			if($result){
				echo '<script language="javascript">';
				echo 'alert("Raw Quiz File successfully uploaded");';
				echo "window.location.href = '../admin_add_files_page.php'";
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("Invalid File");';
				echo "window.location.href = '../admin_add_files_page.php'";
				echo '</script>';
			
		}
    }
  }
} else {
  echo "Invalid file";
  echo '<script language="javascript">';
		echo 'alert("Invalid File");';
		echo "window.location.href = '../admin_add_files_page.php'";
		echo '</script>';
  
}
	}
?> 