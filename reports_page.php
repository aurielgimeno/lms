<?php
	session_start();
	include "includes/config.php";
	if(($_SESSION["acc_type_name"]) == "subject_coordinator"){
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
}.hoverSpecial li a:hover {
  	background-color:#dadada;
}
.bgColorSpecial{
	background:#194077;
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
                <b class="navbar-brand">Gordon Heights National High School Learning Management System (Reports Page)</b>
			    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="glyphicon glyphicon-chevron-down"></span>
				</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">  
						
					</ul>
				
					<?php
						include("includes/login_span_reports_pages.php");
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
				<div class="panel-heading bgColorSpecial" style="color:#fff;">
				<h4>Quiz Result of:</h4> 
				<h4><span class="txtStudName"></span>  <span class="txtStudId"></span></h4>
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
											
											<button class="btnCreatePdfStudQuizResult btn btn-primary">Create PDF Report</button>
										</div>
								   </div>
								
								
								</div><!--lesson tabs END -->
						</div>
						</div>
			</div>
		</div>
		<div class="col-lg-4" >
			<div class="panel">
				<div class="panel-heading bgColorSpecial" style="color:#fff;">Navigation</div>
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
	
	<div id="divStudQuizResultIndividually" style="font-family:Times New Roman;position:fixed;">	
		<h1><img src="img/reports-images/report-header.png" alt="" style="width:400px"/></h1>
		<h3 style="margin-top:3em;margin-left:100em;font-weight:normal"> Student Quiz Summary Report:</h3>
		
			<p style="font-weight:normal;font-size:1em">Student Details:</p>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<td>Student Name:</td>
						<td>Student ID:</td>
					</tr>
				</thead>
				<tbody>
					<td class="txtStudNameReport"></td>
					<td class="txtStudIdReport"></td>
				</tbody>
			</table>
			
			<p style="font-weight:normal;font-size:1em">Quiz Details:</p>
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>Subject</th>
						<th width="15%">Level</th>
						<th>SY</th>
						<th>Month</th>
						<th>Month Quarter</th>
					</tr>
				</thead>
				<tbody>
					<tr>
					<td class="subject_nameReport"></td>
					<td class="txtLevelIdReport"></td>
					<td class="txtSyReport"></td>
					<td class="txtMonthReport"></td>
					<td class="txtMonthQuarterReport"></td>
					</tr>
				</tbody>
			</table>
			
			<p style="font-weight:normal;font-size:1em">Quiz Results:</p>
			<table class="table table-hover table-striped" id="studentQuizResultIndividuallyReport" style="">
				 
				<thead>
					<tr>
						<th>Date Taken</th>
						<th>Attempt No</th>
						<th>No of Items</th>
						<th>Score</th>
						<th>Status</th>
			
					</tr>
				</thead>
				<tbody>
					
				  
				</tbody>
			</table>
			
			
			<!--<a href="javascript:demoFromHTML()" class="button btnCreatePdfStudQuizResult">Run Code</a>-->		
		</div>
		
			
			
</body>
	<script type="text/javascript" src="js/jspdf.debug.js"></script>
	<script type="text/javascript" src="js/basic.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		callDetails();
		
		$(".btnCreatePdfStudQuizResult").click(function(){
			
			callDetails();
			createPdfForStudQuizResultIndividually();
		});
		
		function callDetails(){
			subjNameOfSubjectCoordinator =  window.sessionStorage.getItem("subjName");
			$(".subject_name").val(subjNameOfSubjectCoordinator);
			$(".subject_name").html(subjNameOfSubjectCoordinator);
			
			
			subjIDofSubjectCoordinator =  window.sessionStorage.getItem("subjCoSubjectId");
			$(".subject_id_tgl").val(subjIDofSubjectCoordinator);
			$(".subject_id_tgl").html(subjIDofSubjectCoordinator);
			
			txtStudName = window.sessionStorage.getItem("stud_name");
			$(".txtStudName").val(txtStudName);
			$(".txtStudName").html(txtStudName);
			
			txtStudId = window.sessionStorage.getItem("stud_id");
			$(".txtStudId").val("(Stud-Id: " +txtStudId+ ")");
			$(".txtStudId").html("(Stud-Id: " +txtStudId+ ")");
			
			
			txtStudIdReport = window.sessionStorage.getItem("stud_id");
			$(".txtStudIdReport").val(txtStudIdReport);
			$(".txtStudIdReport").html(txtStudIdReport);	
			
			txtStudNameReport = window.sessionStorage.getItem("stud_name");
			$(".txtStudNameReport").val(txtStudNameReport);
			$(".txtStudNameReport").html(txtStudNameReport);
			
			subject_nameReport = window.sessionStorage.getItem("subjName");
			$(".subject_nameReport").val(subject_nameReport);
			$(".subject_nameReport").html(subject_nameReport);
			
			txtLevelIdReport = window.sessionStorage.getItem("levelId");
			$(".txtLevelIdReport").val(txtLevelIdReport);
			$(".txtLevelIdReport").html(txtLevelIdReport);
			
			txtSyReport = window.sessionStorage.getItem("hiddenSYofThisMonth");
			$(".txtSyReport").val(txtSyReport);
			$(".txtSyReport").html(txtSyReport);
			
			txtMonthReport = window.sessionStorage.getItem("hiddenMonthName");
			$(".txtMonthReport").val(txtMonthReport);
			$(".txtMonthReport").html(txtMonthReport);
			
			txtMonthQuarterReport = window.sessionStorage.getItem("hiddenMonthQuarterName");
			$(".txtMonthQuarterReport").val(txtMonthQuarterReport);
			$(".txtMonthQuarterReport").html(txtMonthQuarterReport);
			
			
			
			
		}
		function createPdfForStudQuizResultIndividually() {
			fileTiltle = " (Sud ID-"+ txtStudId +") " +txtStudName +" : " + subjNameOfSubjectCoordinator + " Level-" + txtLevelIdReport ;
			
			var pdf = new jsPDF('p', 'pt', 'letter')

			// source can be HTML-formatted string, or a reference
			// to an actual DOM element from which the text will be scraped.
			, source = $('#divStudQuizResultIndividually')[0]

			// we support special element handlers. Register them with jQuery-style 
			// ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
			// There is no support for any other type of selectors 
			// (class, of compound) at this time.
			, specialElementHandlers = {
				// element with id of "bypass" - jQuery style selector
				'#bypassme': function(element, renderer){
					// true = "handled elsewhere, bypass text extraction"
					return true
				}
			}

			margins = {
			  top: 60,
			  bottom: 60,
			  left: 80,
			  width: 1000
			};
			// all coords and widths are in jsPDF instance's declared units
			// 'inches' in this case
			pdf.fromHTML(
				source // HTML string or DOM elem ref.
				, margins.left // x coord
				, margins.top // y coord
				, {
					'width': margins.width // max width of content on PDF
					, 'elementHandlers': specialElementHandlers
				},
				function (dispose) {
				  // dispose: object with X, Y of the last line add to the PDF 
				  //          this allow the insertion of new lines after html
			
				  pdf.save(fileTiltle);
				},
				margins
			)
		}
	});
</script>


</html>
<?php
	
	}else{
		header('location:login.php');
	}
?>