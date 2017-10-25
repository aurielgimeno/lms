<?php
	session_start();
	include "includes/config.php";
	if(($_SESSION["acc_type_name"])== "it_staff" || ($_SESSION["acc_type_name"]) == "subject_coordinator") {
										
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
	<?php
	include("includes/tech_team_css_links.php");
	?>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet"><!-- need ADMIN PANEL-->

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet"><!-- need ADMIN PANEL-->

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- need ADMIN PANEL-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LMS GHNHS Admin Panel </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
				<!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marvin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marvin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Marvin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
				-->
				<!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
				-->
				
               <?php
						include("includes/login_span_admin _pages.php");
				?>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active" >
                        <a href="javascript:;" data-toggle="collapse" data-target="#fileManagerMenu"><i class="fa fa-fw fa-file"></i> File Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="fileManagerMenu" class="">
                            <li class="activeSpecial" style="background:#080808;">
                                <a  href="admin_add_files_page.php"> <i class="fa fa-fw fa-plus-circle active"></i>Add | Upload Files</a>
                            </li>
                            <li>
                                <a href="admin_file_archieves_page.php"> <i class="fa fa-fw fa-trash-o"></i>File Archieves</a>
                            </li>
                           
                        </ul>
                    </li>
					<?php
                    if(($_SESSION["acc_type_name"]) == "subject_coordinator"){
					?>
					<li>
                        <a href="admin_results_analysis_page.php"><i class="fa fa-fw fa-table"></i> Results Analysis</a>
                    </li>
					<?php }else{}?>
					
					<?php
                    if(($_SESSION["acc_type_name"]) == "subject_coordinator"){
					}else{
					?>
					
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#userManagerMenu"><i class="fa fa-fw fa-users"></i> User Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="userManagerMenu" class="collapse">
                            <li>
                                <a href="admin_students_page.php"> <i class="fa fa-fw fa-user"></i>Students</a>
                            </li>
                            <li>
                                <a href="admin_sa_page.php"> <i class="fa fa-fw fa-user"></i>Subject Coordinators</a>
                            </li>
                            <li>
                                <a href="admin_it_page.php"><i class="fa fa-fw fa-user"></i> IT Staffs</a>
                            </li>
                        </ul>
                    </li>
					
                   
					
					
                    <li>
                        <a href="admin_sm_page.php"><i class="fa fa-fw fa-wrench"></i> System Manager</a>
                    </li>
					<?php
					}
					?>
                    <li>
                        <a href="admin_help_page.php"><i class="fa fa-fw fa-question-circle"></i> Help</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" >

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-file"></i>File Manager <small>Add | Upload Files</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->
				
				<div class="row" >
				<!-- subject name for IT_STAFF only START -->
				<?php if(($_SESSION["acc_type_name"]) == "it_staff" || ($_SESSION["acc_type_name"]) == "student"){
					
				?>
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
                                <h3 class="panel-title subject_name" style="font-weight:bold"> Choose Subject</h3>
                            </div>
                            <div class="panel-body">
								<button class="btnSubject btn btn-primary col-lg-2" value="1" name="English">English</button>
								<button class="btnSubject btn btn-success col-lg-2" value="2" name="Mathematics"> Mathematics</button>
								<button class="btnSubject btn btn-warning col-lg-2" value="3" name="Science"> Science</button>
								<button class="btnSubject btn btn-info col-lg-2" value="4" name="Filipino"> Filipino</button>
								<button class="btnSubject btn btn-danger col-lg-2" value="5" name="Araling Panlipunan"> Araling Panlipunan </button>
								<button class="btnSubject btn btn-primary col-lg-2" value="6" name="TLE">TLE</button>
							</div>
							
					</div>
				</div>
				<?php } else{}?>
					<!-- subject name for IT_STAFF only END -->
					<div class="contentAndNavTreeContainer">
						<div class="col-lg-8" >
						<div class="panel panel-default">
							<div class="panel-heading" >
								<h4 class="subject_name"><?php if(isset($_SESSION["subj_name"])){echo $_SESSION["subj_name"];} ?></h4>
								<h3 class="panel-title" style="">SY:<span class="school_year_name"></span> | <span class="month_name"></span>| <span class="month_quarter_name"></span> </h3>
							</div>
							<div class="panel-body">
							<!--testing YENG START -->
							<div style="display:none;">
							<div class="row col-lg-12"><!-- hide this START -->
								<h3>To get the lesseon_id we need the ff:</h3>
								subject_id: <br /><input type="text" name="" class="subject_id_tgl" value="<?php if(isset($_SESSION["subj_co_subj_id"])){echo $_SESSION["subj_co_subj_id"];} ?>" /><br />
								month_quarter_id: <br /><input type="text" name="" class="month_quarter_tgl" /><br />
								level_id: <br /><input type="text" name="" class="level_id_tgl" /><br />
								lesson_id: <br /><input type="text" name="" class="lesson_id_tgl" /><br />
							</div><!-- hide this END -->
							
							<div class="row col-lg-12"><!--show this REARRANGE START-->
								<label for="">Need to show the ff: (REARRANGE) </label><br />
								Subject Name: <br /><input type="text" class="subject_name" name="" id="" placeholder="Subject Name" value="<?php if(isset($_SESSION["subj_name"])){echo $_SESSION["subj_name"];} ?>" /><br />
								Month: <br /><input type="text" name="" class="month_name" id="" placeholder="" /><br />
								Month Quarter Range : <br /><input type="text" class="month_quarter_name" name="" id="" placeholder="" /><br />
							</div><!--show this REARRANGE END-->
							</div>
							<!--testing YENG END --> 
								<!-- level START -->
								
								<p class="msg_choose_mq_first errorColormsg_choose_mq_first errorColor">1. Choose Month Quarter First</p>
								<p class="msg_choose_lvl_first errorColor">2. Choose Level</p>
								<div  class="row levelContainer">
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
								</div>
								<!-- level END -->
								<br />
								<!--lesson tabs START -->
								<div style="display:none;" class="lesson_tabs">
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
									<li>
										<a href="#result" data-toggle="tab" class="btn btn-danger">
										Ready Quiz
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
										<button class="btn btn-primary"><i class="fa fa-fw fa-plus-circle"></i>Add New Announcement</button>
										<?php }else{ }?>
										<!--
										<input type="button" value="Add New Announcement" class="btn btn-primary" /><br /><br />
										-->
										</div>
								   </div>
								   <div class="tab-pane fade" id="reviewer">
										
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<h4 class="">Reviewer</h4>
										<?php
											if(($_SESSION["acc_type_name"])== "subject_coordinator") {
										?>
										<button id="btnUploadLecture" class="btn btn-success" class="" ><i class="fa fa-fw fa-plus-circle"></i>Add New Reviewer</button>
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
										<button id="btnUploadRawQuiz" class="btn btn-warning"><i class="fa fa-fw fa-plus-circle"></i>Add New  Pdf  Quiz</button>
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
									<h4>Ready</h4>
									<?php
									if(($_SESSION["acc_type_name"]) == "student") {
									?>	
									<button class="btnTakeQuiz btn btn-success" >Take Quiz (Filter this button by $_SESSION)</button>
									<?php
									}else{
									
									?>
									
									<button id="btnCreateNewReadyQuiz" class="btn btn-danger" ><i class="fa fa-fw fa-plus-circle"></i>Generate New Quiz</button>
									<input id="btnAddnewItemToReadyQuiz" type="button" value="Add new Question " class="btn btn-danger" /><br /><br />
									
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
								</div><!--lesson tabs END -->
								
								
								</div><!-- panel-body END-->
						</div>
							
							
						</div>
						
						<div class="col-lg-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-bars"></i> Navigation</h3>
								</div>
								<div class="panel-body" id="testRelaodContainer">
									<?php
										include("includes/nav_tree.php");
									?>
								</div>
							</div>
						</div>
					</div><!-- content and navbar container START -->
				</div>
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
	<!-- for uploadLectureModal START-->
	<div id = "uploadLectureModal" class = "modal fade" data-backdrop="static">
		<div class="modal-dialog" >
			<div class="modal-content" style="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"><i class="fa fa-plus-circle"></i> UPLOAD LECTURE</h3>
				</div>
				<div class="panel-body">
					<!--upload lecture form START -->
					<form action="phpfiles/upload_lecture_file.php" method="post"enctype="multipart/form-data">
						<!--lesson_id: <br />--><input type="hidden" name="lesson_id" class="lesson_id_tgl" /><br />
						Remarks: <br /><input type="text" name="remarks" class="form-control"/><br />
						<label for="file">Filename:</label>
						
						<input type="file" name="file" id="file" class="form-control" required ><br>
						<input type="submit" name="uploadLec" value="Submit" class="form-control btn btn-primary">
					</form>
					<!--upload lecture form END -->
				</div>
			</div>
		</div>
	</div>
	<!-- for uploadLectureModal END-->
	
	<!-- for uploadRawQuizModal START-->
	<div id = "uploadRawQuizModal" class = "modal fade" data-backdrop="static">
		<div class="modal-dialog" >
			<div class="modal-content" style="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"><i class="fa fa-plus-circle"></i> UPLOAD RAW QUIZ</h3>
				</div>
				<div class="panel-body">
					<!--upload raw quiz form START -->
					<form action="phpfiles/upload_raw_quiz_file.php" method="post"enctype="multipart/form-data">
						<!--lesson_id: <br />--><input type="hidden" name="lesson_id" class="lesson_id_tgl" /><br />
						Remarks: <br /><input type="text" name="remarks" class="form-control" /><br />
						<label for="file">Filename:</label>
						
						<input type="file" name="file" id="file" class="form-control"><br>
						<input type="submit" name="uploadLec" value="Submit" class="form-control btn btn-primary">
					</form>
					<!--upload raw quiz form END -->
				</div>
			</div>
		</div>
	</div>
	<!-- for uploadRawQuizModal END-->
	
	<!-- for createReadyQuizModal START-->
	<div id = "createReadyQuizModal" class = "modal fade" data-backdrop="static">
		<div class="modal-dialog" >
			<div class="modal-content" style="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"><i class="fa fa-plus-circle"></i> Create Ready Quiz</h3>
				</div>
				<div class="panel-body">
					<!--create ready quiz form START -->
					<form id="createReadyQuizForm" action="javascript:verifyAddReadyQuizFirst()">
						<label for="readyQuizTitle">Quiz Title</label>
						<input type="text" name="readyQuizTitle" id="readyQuizTitle" class="form-control" />
						<label for="readyQuizRemarks">Remarks</label>
						<input type="text" name="readyQuizRemarks" id="readyQuizRemarks" class="form-control" />
						
						<input type="submit"  value="Submit">
					</form>
					<!--create ready quiz form END -->
				</div>
			</div>
		</div>
	</div>
	<!-- for createReadyQuizModal END-->
  
  

<!-- for addReadyQuizItemModal START-->
	<div id = "addReadyQuizItemModal" class = "modal fade" data-backdrop="static">
		<div class="modal-dialog" >
			<div class="modal-content" style="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"><i class="fa fa-plus-circle"></i> Add question</h3>
				</div>
				<div class="panel-body">
					<!--create ready quiz form START -->
					<form id="addReadyQuizItemForm" action="javascript:verifyAddReadyQuizItemFirst()">
						<!--
						ready_quiz_item_question
						ready_quiz_item_a
						ready_quiz_item_b
						ready_quiz_item_c
						ready_quiz_item_d
						ready_quiz_item_correct
						ready_quiz_id
						-->
						<h3 for="" id="readyQuizItemFormPopupTxt"></h3>
						<!--<label for="rqiQuestion">Question</label><input type="text" name="rqiQuestion" id="" class="form-control" required />-->
						<label for="rqiQuestion">Question</label><textarea name="rqiQuestion" id="" cols="30" rows="3" class="form-control" required ></textarea>
						<label for="rqiItemA">Choice A:</label><input type="text" name="rqiItemA" id="rqiItemA" class="form-control"  required  />
						<label for="rqiItemB">Choice B:</label><input type="text" name="rqiItemB" id="rqiItemB" class="form-control"  required />
						<label for="rqiItemC">Choice C:</label><input type="text" name="rqiItemC" id="rqiItemC" class="form-control" required  />
						<label for="rqiItemD">Choice D:</label><input type="text" name="rqiItemD" id="rqiItemD" class="form-control" required  />
						<label for="rqiItemCorrect">Correct Answer</label>
						<select name="rqiItemCorrect" id="testOption"  class="form-control" required >
							<option value="">Select Correct Answer</option>
							<option value="rqiItemA">A</option>
							<option value="rqiItemB">B</option>
							<option value="rqiItemC">C</option>
							<option value="rqiItemD">D</option>
						</select>
						<!--<label for="hiddenCorrectAnswer">hiddenCorrectAnswer</label>-->
						<input type="hidden" name="hiddenCorrectAnswer" id="hiddenCorrectAnswer" />
						<!--<label for="">RQ ID</label>--><input type="hidden" name="readyQuizId" class="readyQuizId" />
						
						<input type="submit"  value="Submit" class="form-control btn btn-primary" style="margin-top:1em;" >
					</form>
					<!--create ready quiz form END -->
				</div>
			</div>
		</div>
	</div>
	<!-- for addReadyQuizItemModal END-->

	<!-- for editReadyQuizItemModal START -->
	<div id = "editReadyQuizItemModal" class = "modal fade editReadyQuizItemModal" data-backdrop="static">
		<div class="modal-dialog" >
			<div class="modal-content" style="">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="panel-title"><i class="fa fa-plus-circle"></i> Edit question</h3>
				</div>
				<div class="panel-body">
					<!--create ready quiz form START -->
					<form id="updateReadyQuizItemForm" action="javascript:updateReadyQuizItemFirst()">
						<!--
						ready_quiz_item_question
						ready_quiz_item_a
						ready_quiz_item_b
						ready_quiz_item_c
						ready_quiz_item_d
						ready_quiz_item_correct
						ready_quiz_id
						-->
						<h3 for="" id="readyQuizItemFormPopupTxt2"></h3>
						<!--<label for="rqiQuestion">Question</label><input type="text" name="rqiQuestion2" id="" class="form-control" required />-->
						<label for="rqiQuestion">Question</label><textarea name="rqiQuestion2" id="rqiQuestion2" cols="30" rows="3" class="form-control" required></textarea>
						<label for="rqiItemA">Choice A:</label><input type="text" name="rqiItemA2" id="rqiItemA2" class="form-control"  required  />
						<label for="rqiItemB">Choice B:</label><input type="text" name="rqiItemB2" id="rqiItemB2" class="form-control"  required />
						<label for="rqiItemC">Choice C:</label><input type="text" name="rqiItemC2" id="rqiItemC2" class="form-control" required  />
						<label for="rqiItemD">Choice D:</label><input type="text" name="rqiItemD2" id="rqiItemD2" class="form-control" required  />
						<label for="rqiItemCorrect">Correct Answer</label>
						<select name="rqiItemCorrect2" id="testOption2"  class="form-control" required >
							<option value="">Select Correct Answer</option>
							<option value="rqiItemA2">A</option>
							<option value="rqiItemB2">B</option>
							<option value="rqiItemC2">C</option>
							<option value="rqiItemD2">D</option>
						</select>
						<!--<label for="hiddenCorrectAnswer2">hiddenCorrectAnswer</label>-->
						<input type="hidden" name="hiddenCorrectAnswer2" id="hiddenCorrectAnswer2" />
						<!--<label for="">RQ ID</label>--><input type="hidden" name="readyQuizId" class="readyQuizId" />
						<input type="hidden" name="rquizID" id="rquizID2" class="readyQuizId" />
						
						<input type="submit"  value="Submit"  class="form-control btn btn-primary" style="margin-top:1em;">
					</form>
					<!--create ready quiz form END -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- for editReadyQuizItemModal END -->

  <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->

    <!-- Bootstrap Core JavaScript -->

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script><!-- need ADMIN PANEL-->
    <script src="js/plugins/morris/morris.min.js"></script><!-- need ADMIN PANEL-->
    <script src="js/plugins/morris/morris-data.js"></script><!-- need ADMIN PANEL-->
	
<?php
	include("includes/tech_team_script_links_for_admin_panel.php");#script links jq.js first befor bootstrap.js
	include("includes/tech_team_custom_scripts.php");#custom scripts
?>
<script type="text/javascript">
	//ready quiz item edit btn START
	 $('body').on('click', '.editReadyQuizItem', function() {
		rawQuizItemIDForEdit = $(this).attr("name");
		//alert("rawQuizItemIDForEdit = "+rawQuizItemIDForEdit);
		//rawQuizFileNameForDelete = $(this).val();
		$(".editReadyQuizItemModal").modal("show");
		$("#rquizID2").val(rawQuizItemIDForEdit);
		
		$("#testOption2").prop('selectedIndex',0);
		//
		editReadyQuizItem();
		$("#readyQuizItemFormPopupTxt2").html("");
		event.preventDefault();
	});//ready quiz item edit btn END



	//for adding readyQuizItem START
	function verifyAddReadyQuizItemFirst(){
		var iform = $("#addReadyQuizItemForm");
		$.getJSON("phpfiles/insert_ready_quiz_item.php?callback=?",iform.serialize(), function(data)
			{
				
			$("#readyQuizItemFormPopupTxt").html("Add Success!");
			iform.find("input[type=text],input[type=password], textarea").val("");
			iform.find("select").prop('selectedIndex',0);
			callReadyQuiz();
			
			 
			}).fail(function(data){
			$("#readyQuizItemFormPopupTxt").html("Add Failed!");
			});
	};//for adding readyQuizItem END
	
	
	//daya START
	function callReadyQuiz(){
		lessonId = $(".lesson_id_tgl").val();
		$(".readyQuizRemove").remove();
		//ajax request START
		$.ajax({
			url: "call_functions_jquery_ajax/call_ready_quiz.php",
			type: "GET",
			data: {"lessonId":lessonId},
			dataType: "json",
			success: function(lesson){
				if(lesson != 0){
					
					//alert("11"+lesson);
					//if already have quiz hide btnSubmitCreateReadyQuiz
					//readyQuizId = lesson;
					//alert("call ready quiz ID");
					readyQuizId = lesson;
					callReadyQuizItem();
					//alert(readyQuizId);
					$(".readyQuizId").val(lesson);
					$("#btnCreateNewReadyQuiz").hide();
					$("#btnAddnewItemToReadyQuiz").show();
					
				}else if(lesson == 0){
					//call ready_quiz_item
					//alert("22"+lesson);
					$("#btnCreateNewReadyQuiz").show();
					$("#btnAddnewItemToReadyQuiz").hide();
					
				}else{
					//alert("Something went wrong!");
				}
			}
		});
		//ajax request END
	}
	
	function callReadyQuizItem(){
		lessonId = $(".lesson_id_tgl").val();
				$(".readyQuizItemRemove").remove();
				//alert("asdasdas lessonId = "+ lessonId);
				//ajax request START
				$.ajax({
					url: "call_functions_jquery_ajax/call_ready_quiz_item.php",
					type: "GET",
					data: {"readyQuizId":readyQuizId},
					dataType: "json",
					success: function(lesson){
						//callReadyQuizItem();
						itemNum = 0;
						for(var i=0;i<lesson.length;i++){
							itemNum++;
							$('#readyQuizItemList').append(
								"<tr class='readyQuizItemRemove'>"+
									"<td class='hidden'>"+lesson[i].json_fld1+ "</td>"+
									"<td>"+itemNum+ "</td>"+
									"<td>"+lesson[i].json_fld2+ "</td>"+
									"<td>"+lesson[i].json_fld3+ "</td>"+
									"<td>"+lesson[i].json_fld4+ "</td>"+
									"<td>"+lesson[i].json_fld5+ "</td>"+
									"<td>"+lesson[i].json_fld6+ "</td>"+
									"<td>"+lesson[i].json_fld7+ "</td>"+
									"<td><a href='' class='editReadyQuizItem' name='"+lesson[i].json_fld1+"'>Edit</a> | <a href='' class='deleteReadyQuizItem' name='"+lesson[i].json_fld1+"' >Delete</a></td>"+
									//"<td><a href='' class='deleteReadyQuizItem' name='"+lesson[i].json_fld1+"' >Delete</a></td>"+
									"<td class='hidden'>"+lesson[i].json_fld8+ "</td>"+
									"<td class='hidden'>"+lesson[i].json_fld9+ "</td>"+
								"</tr>"
							);
							
						}
						
					},fail: function(lesson){
						alert("fail" + lesson);
					},error: function(lesson){
						alert("error"+ + lesson);
					}
				});
				//ajax request END
			}
			
			
		
	//daya END
	function verifyAddReadyQuizFirst(){
		var rform = $("#createReadyQuizForm");
		$.getJSON("phpfiles/create_ready_quiz.php?callback=?",rform.serialize(), function(data){
		
			if(data.return == "success"){
				//alert("SUCCESS");
				$("#readyQuizTitle").val("");
				$("#readyQuizRemarks").val("");
				$("#createReadyQuizModal").modal("hide");
			}else if (data.return == "not success"){
				alert("NOT SUCCESS!");
			}else{
				alert("Something went wrong");
			}
		});
		}
	
	
	function updateReadyQuizItemFirst(){
		var uform = $("#updateReadyQuizItemForm");
		$.getJSON("phpfiles/update_quiz.php?callback=?",uform.serialize(), function(data){
		
			if(data.umessage == "Success"){
				$("#readyQuizItemFormPopupTxt2").html("Update Success");
				callReadyQuiz();
			}else if (data.umessage == "Fail"){
				$("#readyQuizItemFormPopupTxt2").html("Update Fail");
			}else{
				alert("Something went wrong");
			}
		}).fail(function(data){
			$("#readyQuizItemFormPopupTxt2").html("Problem in internet connection");
		});
		}
	// Edit Quiz START	
	function editReadyQuizItem(){
	$.ajax({
		url: "phpfiles/get_quiz.php",
		type: "GET",
		data: {"rquizID":rawQuizItemIDForEdit},
		dataType: "json",
		success: function(data){
			$("#updateReadyQuizItemForm").find('input[name=rqiQuestion2]').val(data[0].question);
			$("#updateReadyQuizItemForm").find('#rqiQuestion2').html(data[0].question);
			$("#updateReadyQuizItemForm").find('input[name=rqiItemA2]').val(data[0].choice1);
			$("#updateReadyQuizItemForm").find('input[name=rqiItemB2]').val(data[0].choice2);
			$("#updateReadyQuizItemForm").find('input[name=rqiItemC2]').val(data[0].choice3);
			$("#updateReadyQuizItemForm").find('input[name=rqiItemD2]').val(data[0].choice4);
			$("#updateReadyQuizItemForm").find('input[name=hiddenCorrectAnswer2]').val(data[0].answer);
		
		},
		error: function(){
			
			alert("not success");
		}
		
	});
}
// Edit Quiz END	
	
	</script>
	<!--  UPLOAD MODAL CLICK FUNCTION END HERE  -->
</body>


</html>
<?php
}else{
	header('location:index.php');
}
?>