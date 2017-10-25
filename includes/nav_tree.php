<!-- navigation tree START-->
					<div class="tree" style="background:none;border:none;min-height:500px" >
						<ul><!--for school_year -->
							<?php 
								//set subject_id for different subject navigation
								$_SESSION['subject_id'] = 1;
								$subj_id = $_SESSION['subject_id'];
								$query= "SELECT * from tbl_school_year";
									$result = mysqli_query($conn,$query) or die (mysqli_error($conn));
									while($row = mysqli_fetch_array($result)){
										echo "<li class='schoolYear'><input type='hidden' value='testing'/><span><i class='icon-calendar'></i>$row[sy_start] - $row[sy_end]</span>";
								
										//for months
										echo "<ul>";
											$query1 = "SELECT * from tbl_month";
											$result1 = mysqli_query($conn,$query1) or die (mysqli_error($conn));
											while($row1 = mysqli_fetch_array($result1)){
												echo "<li class='month'>
														<span class='monthNameSpan'>
															<input type='hidden' name='' class='hiddenMonth' value='$row1[month_id]' />
															$row1[month_name]
															<input type='hidden' name='' class='hiddenMonthName' value='$row1[month_name]' />
															<input type='hidden' name='' class='hiddenSYofThisMonth' value='$row[sy_start] - $row[sy_end]' />
															
														</span>";
													//for months_quarter
													echo "<ul class='hideOnload' >";
													$query2 = "SELECT * from tbl_month_quarter where month_id = $row1[month_id] and sy_id = $row[sy_id]"; 
													$result2 = mysqli_query($conn,$query2) or die (mysqli_error($conn));
													while($row2 = mysqli_fetch_array($result2)){
														
														echo "<li class='mqParent' >
														
														<span class='monthQuarterSpan'>
															<input type='hidden' name='' class='hiddenMonthName' value='$row1[month_name]' />
															<input type='hidden' name='' class='hiddenMonthQuarter' value='$row2[month_quarter_id]' />
															$row2[month_quarterd_date_start] - $row2[month_quarterd_date_end]
															<input type='hidden' name='' class='hiddenMonthQuarterName' value='$row2[month_quarterd_date_start] - $row2[month_quarterd_date_end]' />
														</span>";
														
														
													}

													echo "</li>";//end li for MQ
													echo "</ul>";
													//for months_quarter END
												}
											
											echo "</li>";
										echo "</ul>";//for months END
									}
									echo"</li>"//end li for SY
							?>
							
						</ul><!-- school year END -->
					</div>
				<!-- navigation tree END-->