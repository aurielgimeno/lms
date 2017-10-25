<?php
	session_start();
	include "includes/config.php";
	if(($_SESSION["acc_type_name"])== "it_staff" ) {
										
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

	<style type="text/css">
	.formError{
		color:#ff0000;
		display:block;
	}
</style>

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
				
               
                
              
				<?php
						include("includes/login_span_admin _pages.php");
				?>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  >
                        <a href="javascript:;" data-toggle="collapse" data-target="#fileManagerMenu"><i class="fa fa-fw fa-file"></i> File Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="fileManagerMenu" class="collapse">
                            <li>
                                <a href="admin_add_files_page.php"> <i class="fa fa-fw fa-plus-circle active"></i>Add | Upload Files</a>
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
					
					<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#userManagerMenu"><i class="fa fa-fw fa-users"></i> User Manager <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="userManagerMenu" class="">
                            <li>
                                <a href="admin_students_page.php"> <i class="fa fa-fw fa-user"></i>Students</a>
                            </li>
                            <li style="background:#080808;">
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
                             <i class="fa fa-fw fa-users"></i>User Manager <small>Subject Coordinator</small>
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

               
                <!-- /.row -->
				
				<!-- main content START -->
				<div class="row">
					<div class="col-lg-10">
						<!-- subject coordinator's masterlist div START -->
						<div class="panel panel-default" id="container-masterlist-subject-co">
							<div class="panel-heading">
								<h3 class="panel-title"> Subject Coordinator's Masterlist</h3>
							</div>
							<div class="panel-body">
							<!--<h2>Striped Rows</h2>-->
								<div class="table-responsive" >
									<table class="table table-hover table-striped tableWithFilter">
										<thead>
											<tr>
												<th>ID</th>
												<th>Last name</th>
												<th>First name</th>
												<th>Gender</th>
												<th>Birth date</th>
												<th>Subject</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											
										   <?php
											$queryMasterlistSubj = "SELECT * FROM tbl_view_acc_coordinator ORDER BY subj_co_id ASC";
											$resultMasterlistSubj = mysqli_query($conn,$queryMasterlistSubj) or die (mysqli_error($conn));
											while($rowMasterlistSubj = mysqli_fetch_array($resultMasterlistSubj)){
											echo "<tr>";
											echo "<td> $rowMasterlistSubj[subj_co_id]</td>";
											echo "<td> $rowMasterlistSubj[subj_co_lname]</td>";
											echo "<td> $rowMasterlistSubj[subj_co_fname]</td>";
											echo "<td> $rowMasterlistSubj[subj_co_gender]</td>";
											echo "<td> $rowMasterlistSubj[subj_co_bday]</td>";
											echo "<td> $rowMasterlistSubj[subj_name]</td>";
											echo "<td>
													<a href='#' class='editSubjCo'><input type='hidden' name='' class='SubjCoID' value='$rowMasterlistSubj[subj_co_id]' /><i class='fa fa-pencil'></i></a>
													| 
													<a href='#'  class='deleteSubjCo'><input type='hidden' name='' class='SubjCoID' value='$rowMasterlistSubj[subj_co_id]' /><input type='hidden' name='' class='acctID' value='$rowMasterlistSubj[acct_id]' /><i class='fa fa-trash-o'></i></a>
													
												</td>";
											echo "</tr>";
											
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div><!-- students masterlist div END -->
					
                        <div class="panel panel-default" id="container-addnew-subject-co" style="display:none">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-plus-circle"></i> Add New Subject Coordinator</h3>
                            </div>
                            <div class="panel-body">
								<form id="subjregform" action="javascript:verifySubjRegfirst()">
								<div id="regPopuptext" class="text-center"></div>
								<b>First Name:</b><br />
								<input type="text" class="form-control" placeholder="first name" name="fname" id="fname">
								<small class="formError" id="errorfname"></small>
								
								<b>Last Name:</b>
								<input type="text" class="form-control" placeholder="last name" name="lname" id="lname">
								<small class="formError" id="errorlname"></small>
								
								<b>Middle Name:</b>
								<input type="text" class="form-control" placeholder="middle name" name="mname" id="mname">
								<small class="formError"  id="errormname"></small>
								
								<b>Gender:</b><br />
								<fieldset class="btn-group" data-toggle="buttons">
								   <label class="btn btn-success"><input type="radio" name="gender" id="rchoicemale" value="Male">
								   Male</label>
								   <label class="btn btn-success"><input type="radio" name="gender"  id="rchoicefemale" value="Female">
								   Female</label>
								</fieldset><br />
								<small class="formError"  id="errorgender"></small>
								<b>Birthdate*:</b><br>
								<fieldset class="form-inline">
								   <select name="bdaym" id="mbirth" style="height:40px">
				
									  <option value="01">January</option>
									  <option value="02">February</option>
									  <option value="03">March</option>
									  <option value="04">April</option>
									  <option value="05">May</option>
									  <option value="06">June</option>
									  <option value="07">July</option>
									  <option value="08">August</option>
									  <option value="09">September</option>
									  <option value="10">October</option>
									  <option value="11">November</option>
									  <option value="12">December</option>
								   </select>
								   &nbsp;&nbsp;&nbsp;&nbsp;
								   <select name="bdayd" id="dbirth" style="height:40px;width:60px">
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									  <option value="6">6</option>
									  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									  <option value="13">13</option>
									  <option value="14">14</option>
									  <option value="15">15</option>
									  <option value="16">16</option>
									  <option value="17">17</option>
									  <option value="18">18</option>
									  <option value="19">19</option>
									  <option value="20">20</option>
									  <option value="21">21</option>
									  <option value="22">22</option>
									  <option value="23">23</option>
									  <option value="24">24</option>
									  <option value="25">25</option>
									  <option value="26">26</option>
									  <option value="27">27</option>
									  <option value="28">28</option>
									  <option value="29">29</option>
									  <option value="30">30</option>
									  <option value="31">31</option>
								   </select>
								   &nbsp;&nbsp;&nbsp;&nbsp;
								   <select name="bdayy" id="ybirth" style="height:40px;width:80px">
									  <option value="1960">1960</option>
									  <option value="1961">1961</option>
									  <option value="1962">1962</option>
									  <option value="1963">1963</option>
									  <option value="1964">1964</option>
									  <option value="1965">1965</option>
									  <option value="1966">1966</option>
									  <option value="1967">1967</option>
									  <option value="1968">1968</option>
									  <option value="1969">1969</option>
									  <option value="1970">1970</option>
									  <option value="1971">1971</option>
									  <option value="1972">1972</option>
									  <option value="1973">1973</option>
									  <option value="1974">1974</option>
									  <option value="1975">1975</option>
									  <option value="1976">1976</option>
									  <option value="1977">1977</option>
									  <option value="1978">1978</option>
									  <option value="1979">1979</option>
									  <option value="1980">1980</option>
									  <option value="1981">1981</option>
									  <option value="1982">1982</option>
									  <option value="1983">1983</option>
									  <option value="1984">1984</option>
									  <option value="1985">1985</option>
									  <option value="1986">1986</option>
									  <option value="1987">1987</option>
									  <option value="1988">1988</option>
									  <option value="1989">1989</option>
									  <option value="1990">1990</option>
									  <option value="1991">1991</option>
									  <option value="1992">1992</option>
									  <option value="1993">1993</option>
									  <option value="1994">1994</option>
									  <option value="1995">1995</option>
									  <option value="1996">1996</option>
									  <option value="1997">1997</option>
									  <option value="1998">1998</option>
									  <option value="1999">1999</option>
									  <option value="2000">2000</option>
									  <option value="2001">2001</option>
									  <option value="2002">2002</option>
									  <option value="2003">2003</option>
									  <option value="2004">2004</option>
									  <option value="2005">2005</option>
									  <option value="2006">2006</option>
									  <option value="2007">2007</option>
									  <option value="2008">2008</option>
									  <option value="2009">2009</option>
									  <option value="2010">2010</option>
									  <option value="2011">2011</option>
									  <option value="2012">2012</option>
									  <option value="2013">2013</option>
								   </select>
								</fieldset>
								<br />
								<b>Select Subject</b><br />
									<?php
										$query5 = "SELECT * FROM tbl_subject";
										$result5 = mysqli_query($conn,$query5) or die (mysqli_error($conn));
										while($row5 = mysqli_fetch_array($result5)){
										echo "&nbsp;<input type='radio' name='subject' value='$row5[subj_id]'/>&nbsp;<b>$row5[subj_name]</b><br />";
										
										}
									?>
								<small class="formError"  id="errorsubject"></small><br />
				
								<b>Assign Username</b>
								<input type="text" class="form-control"placeholder = "acc" name="username" id="username"/>
								
								<small class="formError"  id="errorusername"></small>
								<b>Assign Password</b>
								<input type="password" class="form-control  password" placeholder="acct password" name="password" id="password"/>
								<small class="formError"  id="errorpassword"></small>
								
								<b>Confirm Assign Password</b>
								
								<input type="password" class="form-control password" placeholder="acct cpassword" name="cpassword" id="cpassword"/>
								<small class="formError"  id="errorcpassword"></small>
								<input type="checkbox" class="showHidePassword"> Show/Hide Password
								<br />
								<input type="submit" value="Submit" class="btn btn-success" id="btnSubmit"/>
								<button type="button" class="btn btn-default btn-danger" id="btnResetForm">Reset Form</button>
								</form>
                            </div>
                        </div>
                    </div>
					
					<div class="col-lg-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-bars"></i> Navigation</h3>
                            </div>
                            <div class="panel-body">
								<button class="btn col-lg-12 btn-success" id="btn-masterlist-subject-co">Masterlist</button><br /><br />
								<button class="btn col-lg-12 btn-primary" id="btn-addnew-subject-co">Add New  <br /> Subject  <br />Coordinator</button><br /><br />
								<!--
								<button class="btn col-lg-12 btn-warning">Update Details</button><br /><br />
								<button class="btn col-lg-12 btn-danger">Delete record</button>
								-->
                            </div>
                        </div>
                    </div>
				</div>
				<div id="updateSubjCoModal" class="modal fade" data-backdrop="static">
				<div class="modal-dialog" >
					<div class="modal-content" style="">
						<div class="modal-header">
							<button type="button" class="close btnClose" data-dismiss="modal" aria-hidden="true">×</button>
							<h3 class="panel-title"><i class="fa fa-plus-circle"></i> Update Subject Coordinator Info</h3>
						</div>
                            <div class="panel-body">
								<form id="updateSubjCoForm" action="javascript:verifyUpdateSubjCofirst()">
								<div id="upopuptext" class="text-center"></div>
								<input type="hidden" class="form-control" placeholder="first name" name="accID" id="accID">
								<input type="hidden" class="form-control" placeholder="first name" name="accType" id="accType">
								<b>First Name:</b><br />
								<input type="text" class="form-control" placeholder="first name" name="fname" id="testname">
								<small class="formError" id="error1fname"></small>
								
								<b>Last Name:</b>
								<input type="text" class="form-control" placeholder="last name" name="lname" id="lname">
								<small class="formError" id="error1lname"></small>
								
								<b>Middle Name:</b>
								<input type="text" class="form-control" placeholder="middle name" name="mname" id="mname">
								<small class="formError"  id="error1mname"></small>
								
								<b>Gender:</b><br />
								<input type="radio" name="gender" id="Mgender" value="Male"/>Male
								<input type="radio" name="gender" id="Fgender" value="Female"/>Female
								<small class="formError"  id="error1gender"></small>
								<b>Birthdate*:</b><br>
								<input type="date" name="bdate" id="bdate"/>
								<br />
								<b>Select subject</b><br />
									<select name="subject" id="subject">
										<option value="" selected disabled>Select subject</option>
										<?php
										$query6 = "SELECT * FROM tbl_subject";
										$result6 = mysqli_query($conn,$query6) or die (mysqli_error($conn));
										while($row5 = mysqli_fetch_array($result6)){
											echo "<option value='$row5[subj_id]'>$row5[subj_name]</option>";
											}
										?>
									</select><br />
									
								<small class="formError"  id="error1subject"></small>
									
								<br />
								
								<b>Assign Username</b>
								<input type="text" class="form-control" placeholder="acct username" name="username" id="username"/>
								
								<small class="formError"  id="error1username"></small>
								<b>Assign Password</b>
								<input type="password" class="form-control  password" placeholder="acct password" name="password" id="password"/>
								<small class="formError"  id="error1password"></small>
								
								<b>Confirm Assign Password</b>
								
								<input type="password" class="form-control password" placeholder="acct cpassword" name="cpassword" id="cpassword"/>
								<small class="formError"  id="error1cpassword"></small>
								<input type="checkbox" class="showHidePassword"> Show/Hide Password
								<br />
								<input type="submit" value="Submit" class="btn btn-success" id="btnSubmit"/>
								
								<button type="button" class="btn btn-default btnExit btn-warning" id="btnExit">Cancel</button>
								</form>
                            
				</div>
			</div>
		</div>
	</div>	
				
				<!-- main content END -->

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

<script type="text/javascript">
var subjCoIDforUpdate = "";
$(".btnExit").click(function(){
	$("#updateSubjCoModal").modal("hide");
	location.reload(true);
});
$(".btnClose").click(function(){
	$("#updateSubjCoModal").modal("hide");
	location.reload(true);
});
$(".editSubjCo").click(function(){
	
	subjCoIDforUpdate = $(this).children(".SubjCoID").val();
	//alert(subjCoIDforUpdate);
	getsubjCoInfo();
	$("#updateSubjCoModal").modal("show");
});
$(".deleteSubjCo").click(function(){
	subjCoIDforUpdate = $(this).children(".SubjCoID").val();
	subjCoIDforDel = $(this).children(".acctID").val();
	//alert(subjCoIDforDel);
	
	//alert(a);
	
});
$(".deleteSubjCo").confirm({
	
    text: "Are you sure you want to delete this item?",
    title: "Confirmation required",
    confirm: function(button) {
        // do something
		deleteSubjCo();
		setTimeout(function(){
		location.href = "admin_sa_page.php";
		},100);
    },
    cancel: function(button) {
        // do something
    },
    confirmButton: "Yes I am",
    cancelButton: "No",
    post: true
});
$(".showHidePassword").click(function () {
            if ($(".password").attr("type")=="password") {
                $(".password").attr("type", "text");
            }
            else{
                $(".password").attr("type", "password");
            }
});
 //Reg validation student script START
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules subjregform start
            $("#subjregform").validate({
				errorPlacement: function ($error, $element) {
				var name = $element.attr("name");
				$("#error" + name).html($error);},
                rules: {
                    fname: {
                        required: true,
                        minlength: 2
                    },
                    lname: {
                        required: true,
                        minlength: 1
                    },
					mname: {
                        required: true,
                        minlength: 1
                    },
					gender: {
                        required: true,
                    },
					subject: {
                        required: true,
                    },
					syear: {
                        required: true,
                    },
					
					txtDob: {
                        required: true,
                       
                    },
					username: {
                        required: true,
                        minlength: 6
                    },
					password: {
                        required: true,
                        minlength: 6
                    }, 
					cpassword: {
						required: true,
                        minlength: 6,
						equalTo: password
					}
                   
                },
				
			//messages if not meet the rule	
                messages: {
                    fname: {
                      //  required: "",
                      //  minlength: ""
                    },
                    lname: {
                      
                      //  required: "",
                      //  minlength:. ""
                    },
					mname: {
                       
                      //  required: "",
                      //  minlength: ""
                    },
					gender: {
                     //   required: true,
                    },
					subject: {
                    //    required: true,
                    },
					syear: {
                      //  required: true,
                    },
					
					txtDob: {
                        required: true,
                       
                    },
					username: {
                        //required: true,
                        //minlength: 6
                    },
					password: {
                        //required: true,
                        //minlength: 6
                    },
					cpassword: {
						equalTo: "Password did not match"
					}
					
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
			// form validation for subjregform end
			
			
			//form validation form updateSubjCoForm start
            $("#updateSubjCoForm").validate({
				errorPlacement: function ($error, $element) {
				var name = $element.attr("name");
				$("#error1" + name).html($error);},
                rules: {
                    fname: {
                        required: true,
                        minlength: 2
                    },
                    lname: {
                        required: true,
                        minlength: 1
                    },
					mname: {
                        required: true,
                        minlength: 1
                    },
					gender: {
                        required: true,
                    },
					section: {
                        required: true,
                    },
					syear: {
                        required: true,
                    },
					
					txtDob: {
                        required: true,
                       
                    },
					username: {
                        required: true,
                        minlength: 6
                    },
					password: {
                        required: true,
                        minlength: 6
                    }, 
					cpassword: {
						required: true,
                        minlength: 6,
						
					}
                   
                },
				
			//messages if not meet the rule	
                messages: {
                    fname: {
                      //  required: "",
                      //  minlength: ""
                    },
                    lname: {
                      
                      //  required: "",
                      //  minlength: ""
                    },
					mname: {
                       
                      //  required: "",
                      //  minlength: ""
                    },
					gender: {
                     //   required: true,
                    },
					section: {
                    //    required: true,
                    },
					syear: {
                      //  required: true,
                    },
					
					txtDob: {
                        required: true,
                       
                    },
					username: {
                        //required: true,
                        //minlength: 6
                    },
					password: {
                        //required: true,
                        //minlength: 6
                    },
					cpassword: {
					
						
					}
					
                   
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
			//form validation form updateSubjCoForm end
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
//Reg student script END
	
</script>


<script type="text/javascript">
//reset form START

	function resetForm(){
		rform.find("input[type=text],input[type=password], textarea").val("");
		rform.find("select").prop('selectedIndex',0);
	}
	$("#btnResetForm").click(function(){
		resetForm();
	});
//reset form END

//register student START
	
	var rform = $("#subjregform");
	var uform = $("#updateSubjCoForm");
	function verifySubjRegfirst(){
		$.getJSON("phpfiles/register_check.php?callback=?",rform.serialize(), function(data)
		{
			 if(data.uexists == "exists")
			{
				$("#regPopuptext").html("<h6>The username is already use</h6>");
			}
			else
			{
				$.getJSON("phpfiles/register_subj_co.php?callback=?",rform.serialize(), function(data)
				{
					//clear form after register success
					resetForm();
					//modal pag complete
					$("#regPopuptext").html("<h6>Registration Complete!</h6>");
				}).fail(function(data){
				
					$("#regPopuptext").html("<h6>Registration Failed!</h6>");
				});
			}
		}).fail(function(data){
			$("#regPopuptext").html("<h6>Problem with your login, Please check internet connection or try again later.</h6>");
		});
		
	}
//register student END

//Update Subject Coordinator START
function verifyUpdateSubjCofirst(){
	$.getJSON("phpfiles/update_check.php?callback=?",uform.serialize(), function(data)
		{
			 if(data.uexists == "notallow")
			{
				$("#upopuptext").html("<h6>The username is already taken</h6>");
			}else if(data.uexists =="allow")
			{
				
				$.getJSON("phpfiles/update_subjco.php?callback=?",uform.serialize(), function(data)
						{
							//clear form after register success
							
							//modal pag complete
							$("#upopuptext").html("<h6>Update Complete!</h6>");
							
						}).fail(function(data){
						
							$("#upopuptext").html("<h6>Update Failed</h6>");
						});
				
			}
			
			
		}).fail(function(data){
			$("#upopuptext").html("<h6>Problem with your update, Please check internet connection or try again later.</h6>");
		});	
			
	}
//Update Subject Coordinator END

//delete subject coordinator START
function deleteSubjCo(){
	//alert("testDel" + subjCoIDforUpdate);
	$.ajax({
		url: "phpfiles/delete_subjcoordinator.php",
		type: "GET",
		data: {"subjCo_id":subjCoIDforUpdate,"acct_id":subjCoIDforDel},
		dataType: "json",
		success: function(data){
			location.reload(true);
			//location.href = "admin_students_page.php";
		},
		error: function(data){
			alert(data);
			//do something if error
		}
		
	});
	
}
//delete subject coordinator END


//select student info START
function getsubjCoInfo(){
	$.ajax({
		url: "phpfiles/get_info_subjco.php",
		type: "GET",
		data: {"subjCo_id":subjCoIDforUpdate},
		dataType: "json",
		success: function(data){
			//location.href = "admin_students_page.php";
			//alert("success");
			//testname
			
			$("#updateSubjCoForm").find('input[name=accID]').val(data[0].acct_id);
			$("#updateSubjCoForm").find('input[name=accType]').val(data[0].acct_type);
			$("#updateSubjCoForm").find('input[name=fname]').val(data[0].subjCo_fname);
			$("#updateSubjCoForm").find('input[name=lname]').val(data[0].subjCo_lname);
			$("#updateSubjCoForm").find('input[name=mname]').val(data[0].subjCo_mname);
			var $radios = $("#updateSubjCoForm").find('input:radio[name=gender]');
			if(data[0].subjCo_gender == "Male"){
			$radios.filter("[value='Male']").prop('checked', true);
			}else{
				$radios.filter("[value='Female']").prop('checked', true);
			}
			$("#updateSubjCoForm").find('input[name=bdate]').val(data[0].subjCo_bday);
			$("#updateSubjCoForm").find('select[name=subject]').val(data[0].subj_id);
			$("#updateSubjCoForm").find('input[name=username]').val(data[0].username);
			$("#updateSubjCoForm").find('input[name=password]').val(data[0].password);
			$("#updateSubjCoForm").find('input[name=cpassword]').val(data[0].password);
			//$("#testname").val(data[0].stud_id);
			//alert(data[0].stud_id);
		},
		error: function(){
			//alert(data);
			//do something if error
			alert("not success");
		}
		
	});
}
//select student info END
</script>
</body>


</html>

<?php
}else{
	header('location:index.php');
}
?>