<?php
	session_start();
	include "includes/config.php";
	if(isset($_SESSION["username"])){
		if(isset($_GET["subject_id"])){
			$subjId = $_GET["subject_id"];
			if($subjId <= 0 || $subjId > 6){
				header('location:login.php');
			}
		}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Learning Management System</title>
	<meta name="generator" content="Bootply" />
	<!--CSS-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		-->
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		    <!-- Custom CSS -->
	<!--END CSS-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	

	<?php
	include("includes/tech_team_css_links.php");
?>
<style type="text/css">
	.hideOnSubjectPage{
		display:none;
	}
	.navbar-nav li a:hover {
  	background-color:#315cb4;
}
</style>
</head>

<body>
<div class="container">
    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b  class="navbar-brand">Gordon Heights National High School Learning Management System</b>
			    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="glyphicon glyphicon-chevron-down"></span>
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">  
						<li><a href="index.php">Home</a></li>
						<li><a href="announcement.php">Announcement</a></li>
						<li><a href="about.php">About</a></li>
					</ul>
				
					<?php
						include("includes/login_span_home_pages.php");
					?>
					
				</div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<hr>
<hr>
<!-- Begin Body -->
<div class="row col-lg-12">
		<div class="col-lg-8">
			<div class="panel">
				<div class="panel-heading" style="background-color:#111;color:#fff;">
				<span class="subject_name"></span>
					<ul class="nav navbar-nav navbar-right" style="margin-right:20px;">
						<li>
							<span class="school_year_name"></span> | 
							<span class="month_name"></span> | 
							<span class="month_quarter_name"></span> 
						
						
						</li>
						
					</ul>
				</div>
				<div class="panel-body" style="border:thin solid #b0b0b0">
				<div style="display:none;">
					<!--testing YENG START -->
					<div class="row col-lg-12"><!-- hide this START -->
						<h3>To get the lesseon_id we need the ff:</h3>
						subject_id: <br /><input type="text" name="" class="subject_id_tgl" value="<?php if(isset($_GET["subject_id"])){echo $_GET["subject_id"];} ?>" /><br />
						month_quarter_id: <br /><input type="text" name="" class="month_quarter_tgl" /><br />
						level_id: <br /><input type="text" name="" class="level_id_tgl" /><br />
						lesson_id: <br /><input type="text" name="" class="lesson_id_tgl" /><br />
					</div><!-- hide this END -->
					
					<div class="row col-lg-12"><!--show this REARRANGE START-->
						<label for="">Need to show the ff: (REARRANGE) </label><br />
						Subject Name: <br /><input type="text" class="subject_name" name="" id="" placeholder="Subject Name" /><br />
						Month: <br /><input type="text" name="" class="month_name" id="" placeholder="" /><br />
						Month Quarter Range : <br /><input type="text" class="month_quarter_name" name="" id="" placeholder="" /><br />
					</div><!--show this REARRANGE END-->
					</div>
					<!--testing YENG END --> 
					<div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p class="msg_choose_mq_first errorColor">1. Choose Month Quarter First</p>
						<p class="msg_choose_lvl_first errorColor">2. Choose Level</p>
								
					</div>
					<div class="row">
						<!--levels div START-->
						<div class="col-lg-12" style="margin-top:1em;margin-bottom:2em">
							<div class="col-sm-3 " >
								<button class="noBg levelBox " id="1" disabled>
									<img src="img/icons/lvl1.png" style="width:100%;" alt="" class="noBg borderless "/>
								</button> 
							</div>
							<div class="col-sm-3">
								<button class="noBg levelBox " id="2" disabled>
									<img src="img/icons/lvl2.png" style="width:100%;" alt="" class="noBg borderless "/>
								</button> 
							</div>
							<div class="col-sm-3">
								<button class="noBg levelBox " id="3" disabled>
									<img src="img/icons/lvl3.png" style="width:100%;" alt="" class="noBg borderless "/>
								</button></div>
							<div class="col-sm-3">
								<button class="noBg levelBox " id="4" disabled>
									<img src="img/icons/lvl4.png" style="width:100%;" alt="" class="noBg borderless "/>
								</button>
							</div>
						</div><!--levels div END-->
							
						<div style="display:none;" class="row col-lg-12 lesson_tabs" style="margin-top:100px;">
								<ul id="myTab"  class="nav nav-tabs">
									<li class="active" >
										
										<a href="#announcement" data-toggle="tab" class="btn btn-primary">
										Announcement
										</a>
									</li>
									<li>
										<a href="#reviewer" data-toggle="tab" class="btn btn-success">
										Reviewer
										</a>
									</li>
									<?php
										if(($_SESSION["acc_type_name"])== "it_staff" || ($_SESSION["acc_type_name"]) == "subject_coordinator") {
									?>
									<li>
										<a href="#quiz" data-toggle="tab" class="btn btn-warning">
										Raw Quiz
										</a>
									</li>
									<?php }else{ }?>
									
									
									<?php
										if(($_SESSION["acc_type_name"])== "it_staff" || ($_SESSION["acc_type_name"]) == "student") {
										
									?>
									<li style="display:none;">
										<a href="#result" data-toggle="tab" class="btn btn-danger">
										Ready Quiz
										</a>
									</li>
									<?php }else{ }?>
									
									
									<?php
										if(($_SESSION["acc_type_name"]) == "student") {
										
									?>
									
									<li>
										<a href="#quizResult" data-toggle="tab" class="btn btn-info btnCallStudQuizResult">
											Quiz Result
										</a>
									</li>
									
									<?php }else{ }?>
								</ul>
								<div id="myTabContent" class="tab-content">
								   <div class="tab-pane fade in active" id="announcement">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h4>Announcement</h4>
										<?php
										if(($_SESSION["acc_type_name"])== "it_staff" || ($_SESSION["acc_type_name"]) == "subject_coordinator") {
										?>
										<button class="btn btn-primary" style="display:none;"><i class="fa fa-fw fa-plus-circle"></i>Add New Announcement</button>
										<?php }else{ }?>
										<!--
										<input type="button" value="Add New Announcement" class="btn btn-primary" /><br /><br />
										-->
										</div>
								   </div>
								   <div class="tab-pane fade" id="reviewer" style="">
										<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h4 class="">Reviewer</h4>
										<?php
											if(($_SESSION["acc_type_name"])== "subject_coordinator") {
										?>
										<button id="btnUploadLecture" class="btn btn-success" class="" style="display:none;" ><i class="fa fa-fw fa-plus-circle"></i>Add New Reviewer</button>
										<?php
											}else{
											}
										?>
										<table id="lectureList" class="table table-hover table-striped table-bordered" >
											<thead>
											<tr>
												<th class="hidden">Lec ID</th><!--need hidden-->
												<th>Title</th><!--SHOW -->
												<th>Date uploaded</th><!-- SHOW  -->
												<th>Remarks</th><!-- SHOW  -->
												<th class="hidden">Lec file name</th><!--need hidden-->
												<th class="hidden">Lec file type</th><!--need hidden-->
												<th class="hidden">Lec file location</th><!--need hidden -->
												<th class="hidden">Lec file BLOB</th><!--need hidden-->
												<th class="hidden">subj_co_id</th><!--need hidden-->
												<th class="hidden">lesson_id</th><!--need hidden-->
												<th>Action</th>
											</tr>
											</thead>
											<tbody></tbody>
										</table>
										</div>
								   </div>
								   
								   <div class="tab-pane fade" id="quiz">
																		
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h4>Raw Quiz</h4>
										<?php
											if(($_SESSION["acc_type_name"])== "subject_coordinator") {
										?>
										<button id="btnUploadRawQuiz" class="btn btn-warning" style="display:none"><i class="fa fa-fw fa-plus-circle"></i>Add New  Pdf  Quiz</button>
										<?php
											}else{
											}
										?>
										<table id="rawQuizList" class="table table-hover table-striped table-bordered">
											<thead>
											<tr>
												<th class="hidden">Raw Quiz ID</th><!--need hidden-->
												<th>Title</th><!--SHOW -->
												<th>Date uploaded</th><!-- SHOW  -->
												<th>Remarks</th><!-- SHOW  -->
												<th class="hidden">Raw Quiz file name</th><!--need hidden-->
												<th class="hidden">Raw Quiz file type</th><!--need hidden-->
												<th class="hidden">Raw Quiz file location</th><!--need hidden -->
												<th class="hidden">Raw Quiz file BLOB</th><!--need hidden-->
												<th class="hidden">subj_co_id</th><!--need hidden-->
												<th class="hidden">lesson_id</th><!--need hidden-->
												<th>Action</th>
											</tr>
											</thead>
											<tbody></tbody>
										</table>
										</div>
								   </div>
								   <div class="tab-pane fade" id="result">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										
									<h4>Ready Quiz</h4>
									<?php
									if(($_SESSION["acc_type_name"]) == "student") {
									?>	
									<!--<a href="quiz_page.html" target="_blank" >Take Quiz</a>-->
									<a data-toggle="modal" href="quiz_page.html" data-target="#quizModal"  class="btnTakeQuiz btn btn-success">Take Quiz</a>
									<?php
									}else{
									
									?>
									
									<button id="btnCreateNewReadyQuiz" class="btn btn-danger" style="display:none;" ><i class="fa fa-fw fa-plus-circle"></i>Generate New Quiz</button>
									<input id="btnAddnewItemToReadyQuiz" type="button" value="Add new Question " class="btn btn-danger" style="display:none;" /><br /><br />
									
									<div style="position:relative;overflow:auto;" class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="table-responsive" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<table class="table table-condensed table-striped table-bordered table-hover no-margin" id="readyQuizItemList">
												<thead>
													<!--
													<th>ready_quiz_item_id</th>
													<th>ready_quiz_item_question</th>
													<th>ready_quiz_item_a</th>
													<th>ready_quiz_item_b</th>
													<th>ready_quiz_item_c</th>
													<th>ready_quiz_item_d</th>
													<th>ready_quiz_item_correct_answer</th>
													<th>ready_quiz_item_id</th>
													<th>ready_quiz_item_timer</th>
													-->
													<th>Item NO</th>
													<th>Question</th>
													<th>a</th>
													<th>b</th>
													<th>c</th>
													<th>d</th>
													<th>Correct</th>
													<th>Action</th>
													
												</thead>
											</table>
										</div>
									</div>
									<?php } ?>
									</div>
								   </div>
								   
								   <div class="tab-pane fade" id="quizResult">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h4>Student Quiz Result</h4>
										<div class="table-responsive" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<table id="studentQuizResultIndividually" class="table table-condensed table-striped table-bordered table-hover no-margin" >
												<thead>
													
													<th>Date Taken</th>
													<th>Attempt No</th>
													<th>No of Items</th>
													<th>Score</th>
													<th>Status</th>
													
													
												</thead>
											</table>
										</div>
								   </div>
								   </div>
								</div>
								</div><!--lesson tabs END -->
						</div>
						</div>
			</div>
		</div>
		<div class="col-lg-4" >
			<div class="panel">
				<div class="panel-heading" style="background-color:#111;color:#fff;">Navigation</div>
				<div class="panel-body" style="border:thin solid #b0b0b0">
				<?php
						include("includes/nav_tree.php");
					?>
				</div>
			</div>
		</div>
		
	</div>

	
	
</div>	
<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-right"><h5>©Company 2014</h5></div>
			</div>
		</div>
	</footer>
    <!-- /.container -->
    <!-- jQuery Version 1.11.0 
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>
	-->
	
    <!-- Script to Activate the Carousel -->
	<!--<script src="js/scripts.js"></script>
	<!--
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	-->
	<?php
	include("includes/tech_team_script_links_for_main_pages.php");#script links bootstrap.js first before jq.js
	include("includes/tech_team_custom_scripts.php");#custom scripts
?>
<!-- for uploadLectureModal START-->
<div id="quizModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-backdrop="static" >

  <div class="modal-dialog modal-lg">
	
    <div class="modal-content col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding:0;margin:0;background:#428bca;border:0;">
     
    </div>
  </div>
</div>
	<!-- for uploadLectureModal END-->
	
	
</body>
<script type="text/javascript">
	$(document).ready(function(){
		var chooseSubjectName =  window.sessionStorage.getItem("chooseSubject");
		$(".subject_name").val(chooseSubjectName);
		$(".subject_name").html(chooseSubjectName);
		
		
	});
</script>


</html>
<?php
	
	}else{
		header('location:login.php');
	}
?>