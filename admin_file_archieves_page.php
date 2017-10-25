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
                <a class="navbar-brand" href="#">LMS GHNHS Admin Panel</a>
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
                    <li  class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#fileManagerMenu"><i class="fa fa-fw fa-file"></i> File Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="fileManagerMenu" class="">
                            <li>
                                <a href="admin_add_files_page.php"> <i class="fa fa-fw fa-plus-circle active"></i>Add | Upload Files</a>
                            </li>
                            <li style="background:#080808;"	>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             <i class="fa fa-fw fa-trash-o"></i>File Archieves
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->
				
				<div class="row">
					<div class="col-lg-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-plus-circle"></i> Page Content</h3>
                            </div>
                            <div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<button class="btn btn-md btn-primary">Reviewer</button>
										<button class="btn btn-md btn-primary">Raw Quiz PDF</button>
										<button class="btn btn-md btn-primary">Ready Quiz</button>
									</div>
									
								</div>
								<div class="row">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped">
											<tr>
												<th>File ID</th>
												<th>File Name</th>
												<th>File Type</th>
												<th>Deleted by</th>
												<th>Date Deleted</th>
												
											</tr>
											<tr>
												<td>2</td>
												<td>Sample Reviewer</td>
												<td>pdf</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Sample Reviewer</td>
												<td>pdf</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Sample Reviewer</td>
												<td>pdf</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
											
										</table>
									</div>
								
								</div>
								<div class="row">
									<div class="col-lg-12">
										<button class="btn btn-md btn-primary">Students Archieves</button>
										<button class="btn btn-md btn-primary">Subject Coordinators Archieves</button>
										<button class="btn btn-md btn-primary">IT Staff Archieves</button>
									</div>
									
								</div>
								<div class="row">
									<div class="table-responsive">
										<table class="table table-bordered table-hover table-striped">
											<tr>
												<th>Account ID</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Deleted by</th>
												<th>Date Deleted</th>
												
											</tr>
											<tr>
												<td>2011234</td>
												<td>Mike</td>
												<td>Tan</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
											<tr>
												<td>2011523</td>
												<td>Jane</td>
												<td>Tan</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
											<tr>
												<td>2011525</td>
												<td>Chris</td>
												<td>Tan</td>
												<td>IT Staff 1</td>
												<td>11/11/2013</td>
											</tr>
										</table>
									</div>
								
								</div>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-bars"></i> Navigation</h3>
                            </div>
                            <div class="panel-body">
								<button class="btn btn-lg btn-success">Restore Data</button><br /><br />
								<button class="btn btn-lg btn-warning">Delete Data</button><br /><br />
								
                            </div>
                        </div>
                    </div>
				</div>
				


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
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
</body>


</html>
<?php
}else{
	header('location:index.php');
}
?>