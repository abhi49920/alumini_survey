<!DOCTYPE html>
<html lang="en">
	<head>
	
	<?php 
	session_start();
	if(!isset($_SESSION['name'])){
		header('location:index.html');
	}
	?>
	
		<title>Feedback form JSS Noida</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/enquiry.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
		<script type="text/javascript">
		function ShowHideDiv(chkPassport) {
		var dvPassport = document.getElementById("dvPassport");
		dvPassport.style.display = chkPassport.checked ? "block" : "none";
		}
			function ShowHideDiv2(chkPassport) {
		var dvPassport = document.getElementById("dvPassport2");
		dvPassport.style.display = chkPassport.checked ? "block" : "none";
		}
			function ShowHideDiv3(chkPassport) {
		var dvPassport = document.getElementById("dvPassport3");
		dvPassport.style.display = chkPassport.checked ? "block" : "none";
		}
			function ShowHideDiv4(chkPassport) {
		var dvPassport = document.getElementById("dvPassport4");
		dvPassport.style.display = chkPassport.checked ? "block" : "none";
		}
		</script>
		
		<style>
		.black{
		color:black !important;
		font-weight:bold;
		}
		table td,th{
			text-align:center;
		}
		label,p,td,th{
			font-family: 'Exo 2', sans-serif;
			font-size: 16px;
		}
		body {
				background-image: url('bg3.jpg');
				background-repeat: no-repeat;
				background-attachment: fixed;
			}
		.header{
				background-image: url('head.jpg');
				background-repeat:repeat;
				background-attachment: fixed;
				padding:3px;
									border-radius:	10px;
				
		}
		.dag{
			content:"";
			position:absolute;
			border-top:1px solid grey ;
			width:247px;
			margin-top:-74px;
			margin-left:-7px;
			transform: rotate(31deg);
			transform-origin: 0% 0%;
		}
		.dag2{
			content:"";
			position:absolute;
			border-top:1px solid grey ;
			width:675px;
			margin-top:-53px;
			margin-left:-7px;
			transform: rotate(8.9deg);
			transform-origin: 0% 0%;
		}
		.th2dag{
			margin-left:-60px;
		}
		.th1dag{
			margin-left:47px;
		}
		th2dag2{
			margin-left:-260px;
		}
		.th1dag2{
			margin-left:247px;
		}
		.left{
		 text-align: left;
		}
		.font{
		font-size: 13px;
		}
		</style>
		
		<!-- editor -->
		<script src="ckeditor/ckeditor.js"></script>
		
	</head>
	<body>
		<div class="container">
			
			<div class="header">
			<h1 class="text-center">JSS Academy of Technical Education, Noida</h1>
			<h3 class="text-center">Department of <?php echo $_SESSION['department']; ?></h3>
				<h2 class="black" style="text-align:center;font-family: 'Oswald', sans-serif;" >ALUMNI SURVEY</h2>
			</div>
			<br />
			<p>In order to continuously improve our academic programmers’ at JSSATE,NOIDA this questionnaire has been prepared to gather feedback on your experiences.  Your inputs are valuable to us and we value your honest and detailed responses.</p>
			<p>The questionnaire should take approximately 15 minutes to complete.  </p>
			<br />
			<p class="black">A.  Background information</p>
			<hr />
			<form action="action_page.php" method="POST" enctype="multipart/form-data">
				<!--<div class="form-group">
						<label for="name">1 : Name of Alumnus:</label>
						<input type="name" class="form-control" id="name" placeholder="Name of alumunus" name="name" required>
				</div>-->
				<div class="form-group">
					<label for="email">1 : Name of Alumnus:</label>
					<input type="name" class="form-control" id="name" placeholder="Alumnus Name" name="name" value="<?php echo $_SESSION['name']; ?>" required>
				</div>
				<div class="form-group">
					<label for="email">2 : Organization :</label>
					<input type="text" class="form-control" id="organization" placeholder="Organization Name" value="<?php echo $_SESSION['organization']; ?>" name="work_organization" required>
				</div>
				<div class="form-group">
					<label for="department">3 : Department:</label>
					<input name="department" class="form-control" id="department" placeholder="Department" value="<?php echo $_SESSION['department'] ?>" disabled>
				</div>
				<div class="form-group">
					<label for="email">4 : Email of Alumnus:</label>
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				</div>
				
				
				
				<div class="form-group">
					<label for="passing_year">5 : Year of Graduation/Post- Graduation at JSSATEN:</label>
					<select name="passing_year">
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
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
					</select>
				</div>
				
				<div class="radio">
					<p class="black">6: Your overall standing in the class (optional : if you could recall) :</p>
					<label><input type="radio" name="overall_standing" value="5" required> Top 5% </label>
					<label><input type="radio" name="overall_standing" value="10"> Top 10% </label>
					<label><input type="radio" name="overall_standing" value="25"> Top 25% </label>
					<label><input type="radio" name="overall_standing" value="50"> Top 50% </label>
					<label><input type="radio" name="overall_standing" value="none"> None of the above </label>
					
				</div>
				
				<div class="radio">
					<p class="black">7 : Which one of the following describe your current academic/ professional carrier status ? :</p>
					<label><input type="radio" name="carrier_status" value="Working in a government or the public sector organization" required> Working in a government or the public sector organization </label><br />
					<label><input type="radio" name="carrier_status" value="Working in a non-profit / non-governmental organization"> Working in a non-profit / non-governmental organization </label><br />
					<label><input type="radio" name="carrier_status" value="Working in a national private company"> Working in a national private company </label><br />
					<label><input type="radio" name="carrier_status" value="Working in a multi-national company"> Working in a multi-national company </label><br />
					<label><input type="radio" name="carrier_status" value="Self Employed"> Self Employed </label><br />
					<label><input type="radio" name="carrier_status" value="attending_graduate_school" id="chkPassport4" onclick="ShowHideDiv4(this)"> Attending graduate school : Please specify name of the institution  </label><br />
					
					<div id="dvPassport4" style="display: none">
						<input type="text" name="graduate_school" class="form-control" height="30" placeholder="Please specify the details.">
						
					</div>
					
					<label><input type="radio" name="carrier_status" value="others" id="chkPassport" onclick="ShowHideDiv(this)"> Others ( Please Specify ) </label>
					<div id="dvPassport" style="display: none">
						<input type="text" name="carrier_status_other" class="form-control" height="30" placeholder="Please specify the details.">
					</div>
					
				</div>
				
				<div class="checkbox">
					<p class="black">8 : Which one of the following describe your current nature of work ?<br /> <label>(You may have multiple options, check right in all applicatble boxes )</label></p>
					<label><input type="checkbox" name="work_nature[]" value="Involved in R & D"> Involved in R & D </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in marketing/ business development"> Involved in marketing/ business development </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in managerial/ administrative work"> Involved in managerial/ administrative work </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in PR/ Recruitment"> Involved in PR/ Recruitment </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in design/ fabrication work"> Involved in design/ fabrication work </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in software development"> Involved in software development </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Involved in system maintenance work"> Involved in system maintenance work </label><br />
					<label><input type="checkbox" name="work_nature[]" value="Teaching / Training"> Teaching / Training </label><br />
					<label><input type="checkbox" name="work_nature[]" value="others" id="chkPassport3" onclick="ShowHideDiv3(this)"> Others ( Please Specify ) </label>
					<div id="dvPassport3" style="display: none">
						<input type="text" name="current_nature_box" class="form-control" height="30" placeholder="Please specify the details.">
						</textarea>
					</div>
				</div>
				
				
				<div class="radio">
					<p class="black">9 : You got employment :</p>
					
					<label><input type="radio" name="employment" value="Through Campus placement" required>Through Campus placement </label><br />
					<label><input type="radio" name="employment" value="Through competitive examination">Through competitive examination </label><br />
					<label><input type="radio" name="employment" value="others" id="chkPassport2" onclick="ShowHideDiv2(this)">Others Channels, Please Specify </label><br />
				</div>
				<div id="dvPassport2" style="display: none">
					<input type="text" name="employment_box" class="form-control" height="30" placeholder="Please specify the details.">
					</textarea>
				</div>
				
				<!-- Part 2 -->
				<br />
				<p class="black">B. Your Feedback (multiple choice): </p>
			    <hr />
				
				<!-- block 9 -->
				<p class="black">10 : The extent to which the academic programme at JSSATEN helped you develop the following learning outcomes :</p>
				
				<?php include('include/connect.php'); 
				$query="SELECT * FROM peo WHERE department='".$_SESSION['department']."' ";
				$run=mysqli_query($con,$query);
				$fetch=mysqli_fetch_array($run);
				$peo1=$fetch['peo1'];
				$peo2=$fetch['peo2'];
				$peo3=$fetch['peo3'];
				$peo4=$fetch['peo4'];
				$peo5=$fetch['peo5'];
	
				
				?>
				
				<table class="table table-responsive table-bordered">
					<tr>
						<th style="border:none !important;width:100px;"></th>
						<th style="border-left:none !important;">Programme Educational Objectives</th>
						<th>To a great extent</th>
						<th>To a moderate extent</th>
						<th>To a slight extent</th>
						<th>To a very little extent</th>
						<th>Not at all</th>
						<th> N/A</th>
					</tr>
					
					<tr>
						<td>POE-1</td> <td class="left"> <?php echo $peo1 ?>.</td>
						<td><input type="radio" name="peo1" value="great" required></td>
						<td><input type="radio" name="peo1" value="moderate"></td>
						<td><input type="radio" name="peo1" value="slight"></td>
						<td><input type="radio" name="peo1" value="little"></td>
						<td><input type="radio" name="peo1" value="not"></td>
						<td><input type="radio" name="peo1" value="na"></td>
					</tr>
					<tr>
						<td>POE-2</td><td class="left"> <?php echo $peo2 ?>.</td>
						<td><input type="radio" name="peo2" value="great" required></td>
						<td><input type="radio" name="peo2" value="moderate"></td>
						<td><input type="radio" name="peo2" value="slight"></td>
						<td><input type="radio" name="peo2" value="little"></td>
						<td><input type="radio" name="peo2" value="not"></td>
						<td><input type="radio" name="peo2" value="na"></td>
					</tr>
					<tr>
						<td>POE-3</td><td class="left"> <?php echo $peo3 ?>.</td>
						<td><input type="radio" name="peo3" value="great" required></td>
						<td><input type="radio" name="peo3" value="moderate"></td>
						<td><input type="radio" name="peo3" value="slight"></td>
						<td><input type="radio" name="peo3" value="little"></td>
						<td><input type="radio" name="peo3" value="not"></td>
						<td><input type="radio" name="peo3" value="na"></td>
					</tr>
					<tr>
						<td>POE-4</td><td class="left"> <?php echo $peo4 ?>.</td>
						<td><input type="radio" name="peo4" value="great" required></td>
						<td><input type="radio" name="peo4" value="moderate"></td>
						<td><input type="radio" name="peo4" value="slight"></td>
						<td><input type="radio" name="peo4" value="little"></td>
						<td><input type="radio" name="peo4" value="not"></td>
						<td><input type="radio" name="peo4" value="na"></td>
					</tr>
					<tr>
						<td>POE-5</td><td class="left"> <?php echo $peo5 ?>.</td>
						<td><input type="radio" name="peo5" value="great" required></td>
						<td><input type="radio" name="peo5" value="moderate"></td>
						<td><input type="radio" name="peo5" value="slight"></td>
						<td><input type="radio" name="peo5" value="little"></td>
						<td><input type="radio" name="peo5" value="not"></td>
						<td><input type="radio" name="peo5" value="na"></td>
					</tr>
					
				</table>
				<!--/ block 9 -->
				<?php $department=$_SESSION['department']; 
				if($department=='Department of Computer Application'){
					echo '<!-- mca block -->
				<div id="mcablock">
					<h4><u><b>11 :Programme Educational Objectives</b></u><br><br></h4>
					<p><b>PEO 1:</b> To equip students with a sound foundation to design and develop solutions in mathematical
					scientific and business applications</p>
					<p><b>PEO 2:</b> To orient students to apply computing skills & also to pursue research and higher studies.</p>
					<p><b>PEO 3:</b> To inculcate in students professional & ethical values, leadership quality & teamwork skill<br> to sustain in global environment.</p>
					<p><b>PEO 4:</b> To educate students with societal, environmental & legal issues to meet the requirements of<br> global world</p>
					<br>
					<!-- column 8 detail information table -->
					<table class="table table-bordered table-responsive" style="width:50%;">
						<tr>
							<td>Rubric</td>
							<td>Numeric Value</td>
							<tr>
								<td>Excellent</td>
								<td> 3</td>
							</tr>
							<tr><td>Good</td> <td>2 </td></tr>
							<tr><td>Satisfactory</td> <td>1 </td></tr>
							</table>
							<br> <br>
							
							<!-- block 9 -->
							<table class="table table-responsive table-bordered">
								<tr>
									<th><div class="th1dag2">Ruberic</div><br><div class="dag2"></div><div class="th2dag2">Capability <br>acquired</div>
									</th>
									<th>Excellent</th>
									<th>Good</th>
									<th>Satisfactory</th>
								</tr>
								
								<tr>
									<td id="change_poe1">Obtained percentage  in MCA(Excellent( >75%) <br>Good(60%-75%)<br> 	Satisfactory(<60%)).</td>
									<td><input type="radio" name="percentage" value="Excellent" required></td>
									<td><input type="radio" name="percentage" value="Good"></td>
									<td><input type="radio" name="percentage" value="Satisfactory"></td>
								</tr>
								<tr>
									<td id="change_poe2">Acquired higher qualifications<br>/certification courses(Excellent( >2)Good(1-2)<br>Satisfactory(<1))</td>
									<td><input type="radio" name="qualification" value="Excellent" required></td>
									<td><input type="radio" name="qualification" value="Good"></td>
									<td><input type="radio" name="qualification" value="Satisfactory"></td>
									
								</tr>
								<tr>
									<td id="change_poe3">Number of years continuing in<br> software industry(Excellent( >10)<br>Good(	4-10) Satisfactory(<4))</td>
									<td><input type="radio" name="experience" value="Excellent" required></td>
									<td><input type="radio" name="experience" value="Good"></td>
									<td><input type="radio" name="experience" value="Satisfactory"></td>
								</tr>
								<tr>
									<td id="change_poe4">Number of positions<br>hold in industry(Excellent( >3)<br>Good(2-3)<br>Satisfactory(<2))</td>
									<td><input type="radio" name="positions" value="Excellent" required></td>
									<td><input type="radio" name="positions" value="Good"></td>
									<td><input type="radio" name="positions" value="Satisfactory"></td>
								</tr>
								<tr>
									<td id="change_poe4">Number Societal, environmental<br> & legal issues handled while<br> developing project(Excellent( >3)<br>	   Good(2-3) 	   Satisfactory(<2)))</td>
									<td><input type="radio" name="issues" value="Excellent" required></td>
									<td><input type="radio" name="issues" value="Good"></td>
									<td><input type="radio" name="issues" value="Satisfactory"></td></tr>
									<td id="change_poe4"> Number of project handled as <br>Team Leader(Excellent( >3)	   Good(2-3) 	 <br>  Satisfactory(<2))</td>
									<td><input type="radio" name="project" value="Excellent" required></td>
									<td><input type="radio" name="project" value="Good"></td>
									<td><input type="radio" name="project" value="Satisfactory"></td></tr>
									<td id="change_poe4"> As an entrepreneur, number of <br>projects handled Excellent( >5)	<br>   Good(2-5)  <br>	Satisfactory(1))</td>
									<td><input type="radio" name="handled" value="Excellent" required></td>
									<td><input type="radio" name="handled" value="Good"></td>
									<td><input type="radio" name="handled" value="Satisfactory"></td></tr>
									
								</table>
							</div>
							<!--/ mca block -->';
				}
				else{
					echo '
					<!-- other block -->
							<div id="otherblock">
								<p class="black">9. The extent to which the academic programme at JSSATEN helped you develop the following capabilities:<br>
									{this is a matrix with rows indicating capabilities and columns the attributes on which feedback are sought. <br>
									You need to enter a number as per the given criteria/metric}:</h4>
									<!-- column 8 detail information table -->
									<table class="table table-bordered table-responsive" style="width:50%;">
										<tr>
											<td>criteria/metric</td>
											<td>Numeric Value</td>
											<tr>
												<td>To a great extent</td>
												<td> 4</td></tr>
												<tr><td>To a moderate extent</td> <td>3 </td></tr>
												<tr><td>To a slight extent</td> <td>2 </td></tr>
												<tr><td>To a very little extent</td> <td>1 </td></tr>
												<tr><td>Not at all</td> <td>0 </td></tr>
												<tr><td>Not at all</td> <td>0 </td></tr>
												<tr><td>Not-Applicable</td> <td>- </td></tr>
											</table>
											<br> <br>
											<table class="table table-responsive table-bordered">
												<tr>
													<td ><div class="th1dag">Attribute exposure to</div><br><div class="dag"></div><div class="th2dag">Capability <br>acquired</div></td>
													<td class="font"><b>Subject materials</b></td>
													<td class="font"><b>Laboratory based courses</b></td>
													<td class="font"><b>Seminar based courses</b></td>
													<td class="font"><b>Project /Dissertation work </b></td>
													<td class="font"><b>Internship /Training</b></td>
													<td class="font"><b>Computing</b></td>
													<td class="font"><b>Maths/ Modeling</b></td>
													<td class="font"><b>Basic sciences </b></td>
													<td class="font"><b>Creative </b></td>
													<td class="font"><b>Technical skill </b></td>
													<td class="font"><b>Soft skills/ material outside  </b></td>
													<td class="font"><b>Professional & ethical behavior </b></td>
													<tr>
														<td class="left">Ability to gather and analyze evidence, and make informed conclusions </td>
														<td>
															<select name="c1[]" required>
																<option value="0">0</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option  value="3">3</option>
																<option value="4">4</option>
															</select></td>
															<td>
																<select name="c1[]">
																	<option value="0">0</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option  value="3">3</option>
																	<option value="4">4</option>
																</select></td>
																<td>
																	<select name="c1[]">
																		<option value="0">0</option>
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option  value="3">3</option>
																		<option value="4">4</option>
																	</select></td>
																	<td>
																		<select name="c1[]">
																			<option value="0">0</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option  value="3">3</option>
																			<option value="4">4</option>
																		</select></td>
																		<td>
																			<select name="c1[]">
																				<option value="0">0</option>
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option  value="3">3</option>
																				<option value="4">4</option>
																			</select></td>
																			<td>
																				<select name="c1[]">
																					<option value="0">0</option>
																					<option value="1">1</option>
																					<option value="2">2</option>
																					<option  value="3">3</option>
																					<option value="4">4</option>
																				</select></td>
																				<td>
																					<select name="c1[]">
																						<option value="0">0</option>
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option  value="3">3</option>
																						<option value="4">4</option>
																					</select></td>
																					<td>
																						<select name="c1[]">
																							<option value="0">0</option>
																							<option value="1">1</option>
																							<option value="2">2</option>
																							<option  value="3">3</option>
																							<option value="4">4</option>
																						</select></td>
																						<td>
																							<select name="c1[]">
																								<option value="0">0</option>
																								<option value="1">1</option>
																								<option value="2">2</option>
																								<option  value="3">3</option>
																								<option value="4">4</option>
																							</select></td>
																							<td>
																								<select name="c1[]">
																									<option value="0">0</option>
																									<option value="1">1</option>
																									<option value="2">2</option>
																									<option  value="3">3</option>
																									<option value="4">4</option>
																								</select></td>
																								<td>
																									<select name="c1[]">
																										<option value="0">0</option>
																										<option value="1">1</option>
																										<option value="2">2</option>
																										<option  value="3">3</option>
																										<option value="4">4</option>
																									</select></td>
																									<td>
																										<select name="c1[]">
																											<option value="0">0</option>
																											<option value="1">1</option>
																											<option value="2">2</option>
																											<option  value="3">3</option>
																											<option value="4">4</option>
																										</select></td>
																									</tr>
																									<tr>
																										<td class="left">Ability to identify and solve problems and evaluating alternatives</td>
																										<td>
																											<select name="c2[]">
																												<option value="0">0</option>
																												<option value="1">1</option>
																												<option value="2">2</option>
																												<option  value="3">3</option>
																												<option value="4">4</option>
																											</select></td>
																											<td>
																												<select name="c2[]">
																													<option value="0">0</option>
																													<option value="1">1</option>
																													<option value="2">2</option>
																													<option  value="3">3</option>
																													<option value="4">4</option>
																												</select></td>
																												<td>
																													<select name="c2[]">
																														<option value="0">0</option>
																														<option value="1">1</option>
																														<option value="2">2</option>
																														<option  value="3">3</option>
																														<option value="4">4</option>
																													</select></td>
																													<td>
																														<select name="c2[]">
																															<option value="0">0</option>
																															<option value="1">1</option>
																															<option value="2">2</option>
																															<option  value="3">3</option>
																															<option value="4">4</option>
																														</select></td>
																														<td>
																															<select name="c2[]">
																																<option value="0">0</option>
																																<option value="1">1</option>
																																<option value="2">2</option>
																																<option  value="3">3</option>
																																<option value="4">4</option>
																															</select></td>
																															<td>
																																<select name="c2[]">
																																	<option value="0">0</option>
																																	<option value="1">1</option>
																																	<option value="2">2</option>
																																	<option  value="3">3</option>
																																	<option value="4">4</option>
																																</select></td>
																																<td>
																																	<select name="c2[]">
																																		<option value="0">0</option>
																																		<option value="1">1</option>
																																		<option value="2">2</option>
																																		<option  value="3">3</option>
																																		<option value="4">4</option>
																																	</select></td>
																																	<td>
																																		<select name="c2[]">
																																			<option value="0">0</option>
																																			<option value="1">1</option>
																																			<option value="2">2</option>
																																			<option  value="3">3</option>
																																			<option value="4">4</option>
																																		</select></td>
																																		<td>
																																			<select name="c2[]">
																																				<option value="0">0</option>
																																				<option value="1">1</option>
																																				<option value="2">2</option>
																																				<option  value="3">3</option>
																																				<option value="4">4</option>
																																			</select></td>
																																			<td>
																																				<select name="c2[]">
																																					<option value="0">0</option>
																																					<option value="1">1</option>
																																					<option value="2">2</option>
																																					<option  value="3">3</option>
																																					<option value="4">4</option>
																																				</select></td>
																																				<td>
																																					<select name="c2[]">
																																						<option value="0">0</option>
																																						<option value="1">1</option>
																																						<option value="2">2</option>
																																						<option  value="3">3</option>
																																						<option value="4">4</option>
																																					</select></td>
																																					<td>
																																						<select name="c2[]">
																																							<option value="0">0</option>
																																							<option value="1">1</option>
																																							<option value="2">2</option>
																																							<option  value="3">3</option>
																																							<option value="4">4</option>
																																						</select></td>
																																						<tr colspan="3">
																																							<td class="left">Ability to think creatively and initiate change</td>
																																							<td>
																																								<select name="c3[]">
																																									<option value="0">0</option>
																																									<option value="1">1</option>
																																									<option value="2">2</option>
																																									<option  value="3">3</option>
																																									<option value="4">4</option>
																																								</select></td>
																																								<td>
																																									<select name="c3[]">
																																										<option value="0">0</option>
																																										<option value="1">1</option>
																																										<option value="2">2</option>
																																										<option  value="3">3</option>
																																										<option value="4">4</option>
																																									</select></td>
																																									<td>
																																										<select name="c3[]">
																																											<option value="0">0</option>
																																											<option value="1">1</option>
																																											<option value="2">2</option>
																																											<option  value="3">3</option>
																																											<option value="4">4</option>
																																										</select></td>
																																										<td>
																																											<select name="c3[]">
																																												<option value="0">0</option>
																																												<option value="1">1</option>
																																												<option value="2">2</option>
																																												<option  value="3">3</option>
																																												<option value="4">4</option>
																																											</select></td>
																																											<td>
																																												<select name="c3[]">
																																													<option value="0">0</option>
																																													<option value="1">1</option>
																																													<option value="2">2</option>
																																													<option  value="3">3</option>
																																													<option value="4">4</option>
																																												</select></td>
																																												<td>
																																													<select name="c3[]">
																																														<option value="0">0</option>
																																														<option value="1">1</option>
																																														<option value="2">2</option>
																																														<option  value="3">3</option>
																																														<option value="4">4</option>
																																													</select></td>
																																													<td>
																																														<select name="c3[]">
																																															<option value="0">0</option>
																																															<option value="1">1</option>
																																															<option value="2">2</option>
																																															<option  value="3">3</option>
																																															<option value="4">4</option>
																																														</select></td>
																																														<td>
																																															<select name="c3[]">
																																																<option value="0">0</option>
																																																<option value="1">1</option>
																																																<option value="2">2</option>
																																																<option  value="3">3</option>
																																																<option value="4">4</option>
																																															</select></td>
																																															<td>
																																																<select name="c3[]">
																																																	<option value="0">0</option>
																																																	<option value="1">1</option>
																																																	<option value="2">2</option>
																																																	<option  value="3">3</option>
																																																	<option value="4">4</option>
																																																</select></td>
																																																<td>
																																																	<select name="c3[]">
																																																		<option value="0">0</option>
																																																		<option value="1">1</option>
																																																		<option value="2">2</option>
																																																		<option  value="3">3</option>
																																																		<option value="4">4</option>
																																																	</select></td>
																																																	<td>
																																																		<select name="c3[]">
																																																			<option value="0">0</option>
																																																			<option value="1">1</option>
																																																			<option value="2">2</option>
																																																			<option  value="3">3</option>
																																																			<option value="4">4</option>
																																																		</select></td>
																																																		<td>
																																																			<select name="c3[]">
																																																				<option value="0">0</option>
																																																				<option value="1">1</option>
																																																				<option value="2">2</option>
																																																				<option  value="3">3</option>
																																																				<option value="4">4</option>
																																																			</select></td>
																																																		</tr>
																																																		<tr colspan="3">
																																																			<td class="left">Ability to integrate disciplinary boundaries
																																																			</td>
																																																			<td>
																																																				<select name="c4[]">
																																																					<option value="0">0</option>
																																																					<option value="1">1</option>
																																																					<option value="2">2</option>
																																																					<option  value="3">3</option>
																																																					<option value="4">4</option>
																																																				</select></td>
																																																				<td>
																																																					<select name="c4[]">
																																																						<option value="0">0</option>
																																																						<option value="1">1</option>
																																																						<option value="2">2</option>
																																																						<option  value="3">3</option>
																																																						<option value="4">4</option>
																																																					</select></td>
																																																					<td>
																																																						<select name="c4[]">
																																																							<option value="0">0</option>
																																																							<option value="1">1</option>
																																																							<option value="2">2</option>
																																																							<option  value="3">3</option>
																																																							<option value="4">4</option>
																																																						</select></td>
																																																						<td>
																																																							<select name="c4[]">
																																																								<option value="0">0</option>
																																																								<option value="1">1</option>
																																																								<option value="2">2</option>
																																																								<option  value="3">3</option>
																																																								<option value="4">4</option>
																																																							</select></td>
																																																							<td>
																																																								<select name="c4[]">
																																																									<option value="0">0</option>
																																																									<option value="1">1</option>
																																																									<option value="2">2</option>
																																																									<option  value="3">3</option>
																																																									<option value="4">4</option>
																																																								</select></td>
																																																								<td>
																																																									<select name="c4[]">
																																																										<option value="0">0</option>
																																																										<option value="1">1</option>
																																																										<option value="2">2</option>
																																																										<option  value="3">3</option>
																																																										<option value="4">4</option>
																																																									</select></td>
																																																									<td>
																																																										<select name="c4[]">
																																																											<option value="0">0</option>
																																																											<option value="1">1</option>
																																																											<option value="2">2</option>
																																																											<option  value="3">3</option>
																																																											<option value="4">4</option>
																																																										</select></td>
																																																										<td>
																																																											<select name="c4[]">
																																																												<option value="0">0</option>
																																																												<option value="1">1</option>
																																																												<option value="2">2</option>
																																																												<option  value="3">3</option>
																																																												<option value="4">4</option>
																																																											</select></td>
																																																											<td>
																																																												<select name="c4[]">
																																																													<option value="0">0</option>
																																																													<option value="1">1</option>
																																																													<option value="2">2</option>
																																																													<option  value="3">3</option>
																																																													<option value="4">4</option>
																																																												</select></td>
																																																												<td>
																																																													<select name="c4[]">
																																																														<option value="0">0</option>
																																																														<option value="1">1</option>
																																																														<option value="2">2</option>
																																																														<option  value="3">3</option>
																																																														<option value="4">4</option>
																																																													</select></td>
																																																													<td>
																																																														<select name="c4[]">
																																																															<option value="0">0</option>
																																																															<option value="1">1</option>
																																																															<option value="2">2</option>
																																																															<option  value="3">3</option>
																																																															<option value="4">4</option>
																																																														</select></td>
																																																														<td>
																																																															<select name="c4[]">
																																																																<option value="0">0</option>
																																																																<option value="1">1</option>
																																																																<option value="2">2</option>
																																																																<option  value="3">3</option>
																																																																<option value="4">4</option>
																																																															</select></td>
																																																														</tr>
																																																														<tr colspan="3">
																																																															<td class="left">ability to identify, evaluate and use data from a variety of resources and  formats    </td>
																																																															<td>
																																																																<select name="c5[]">
																																																																	<option value="0">0</option>
																																																																	<option value="1">1</option>
																																																																	<option value="2">2</option>
																																																																	<option  value="3">3</option>
																																																																	<option value="4">4</option>
																																																																</select></td>
																																																																<td>
																																																																	<select name="c5[]">
																																																																		<option value="0">0</option>
																																																																		<option value="1">1</option>
																																																																		<option value="2">2</option>
																																																																		<option  value="3">3</option>
																																																																		<option value="4">4</option>
																																																																	</select></td>
																																																																	<td>
																																																																		<select name="c5[]">
																																																																			<option value="0">0</option>
																																																																			<option value="1">1</option>
																																																																			<option value="2">2</option>
																																																																			<option  value="3">3</option>
																																																																			<option value="4">4</option>
																																																																		</select></td>
																																																																		<td>
																																																																			<select name="c5[]">
																																																																				<option value="0">0</option>
																																																																				<option value="1">1</option>
																																																																				<option value="2">2</option>
																																																																				<option  value="3">3</option>
																																																																				<option value="4">4</option>
																																																																			</select></td>
																																																																			<td>
																																																																				<select name="c5[]">
																																																																					<option value="0">0</option>
																																																																					<option value="1">1</option>
																																																																					<option value="2">2</option>
																																																																					<option  value="3">3</option>
																																																																					<option value="4">4</option>
																																																																				</select></td>
																																																																				<td>
																																																																					<select name="c5[]">
																																																																						<option value="0">0</option>
																																																																						<option value="1">1</option>
																																																																						<option value="2">2</option>
																																																																						<option  value="3">3</option>
																																																																						<option value="4">4</option>
																																																																					</select></td>
																																																																					<td>
																																																																						<select name="c5[]">
																																																																							<option value="0">0</option>
																																																																							<option value="1">1</option>
																																																																							<option value="2">2</option>
																																																																							<option  value="3">3</option>
																																																																							<option value="4">4</option>
																																																																						</select></td>
																																																																						<td>
																																																																							<select name="c5[]">
																																																																								<option value="0">0</option>
																																																																								<option value="1">1</option>
																																																																								<option value="2">2</option>
																																																																								<option  value="3">3</option>
																																																																								<option value="4">4</option>
																																																																							</select></td>
																																																																							<td>
																																																																								<select name="c5[]">
																																																																									<option value="0">0</option>
																																																																									<option value="1">1</option>
																																																																									<option value="2">2</option>
																																																																									<option  value="3">3</option>
																																																																									<option value="4">4</option>
																																																																								</select>
																																																																								<td>
																																																																									<select name="c5[]">
																																																																										<option value="0">0</option>
																																																																										<option value="1">1</option>
																																																																										<option value="2">2</option>
																																																																										<option  value="3">3</option>
																																																																										<option value="4">4</option>
																																																																									</select></td>
																																																																									<td>
																																																																										<select name="c5[]">
																																																																											<option value="0">0</option>
																																																																											<option value="1">1</option>
																																																																											<option value="2">2</option>
																																																																											<option  value="3">3</option>
																																																																											<option value="4">4</option>
																																																																										</select></td>
																																																																										<td>
																																																																											<select name="c5[]">
																																																																												<option value="0">0</option>
																																																																												<option value="1">1</option>
																																																																												<option value="2">2</option>
																																																																												<option  value="3">3</option>
																																																																												<option value="4">4</option>
																																																																											</select></td>
																																																																										</tr>
																																																																										<tr colspan="3">
																																																																											<td class="left">Ability to select and useappropriate technology
																																																																											</td>
																																																																											<td>
																																																																												<select name="c6[]">
																																																																													<option value="0">0</option>
																																																																													<option value="1">1</option>
																																																																													<option value="2">2</option>
																																																																													<option  value="3">3</option>
																																																																													<option value="4">4</option>
																																																																												</select></td>
																																																																												<td>
																																																																													<select name="c6[]">
																																																																														<option value="0">0</option>
																																																																														<option value="1">1</option>
																																																																														<option value="2">2</option>
																																																																														<option  value="3">3</option>
																																																																														<option value="4">4</option>
																																																																													</select></td>
																																																																													<td>
																																																																														<select name="c6[]">
																																																																															<option value="0">0</option>
																																																																															<option value="1">1</option>
																																																																															<option value="2">2</option>
																																																																															<option  value="3">3</option>
																																																																															<option value="4">4</option>
																																																																														</select></td>
																																																																														<td>
																																																																															<select name="c6[]">
																																																																																<option value="0">0</option>
																																																																																<option value="1">1</option>
																																																																																<option value="2">2</option>
																																																																																<option  value="3">3</option>
																																																																																<option value="4">4</option>
																																																																															</select></td>
																																																																															<td>
																																																																																<select name="c6[]">
																																																																																	<option value="0">0</option>
																																																																																	<option value="1">1</option>
																																																																																	<option value="2">2</option>
																																																																																	<option  value="3">3</option>
																																																																																	<option value="4">4</option>
																																																																																</select></td>
																																																																																<td>
																																																																																	<select name="c6[]">
																																																																																		<option value="0">0</option>
																																																																																		<option value="1">1</option>
																																																																																		<option value="2">2</option>
																																																																																		<option  value="3">3</option>
																																																																																		<option value="4">4</option>
																																																																																	</select></td>
																																																																																	<td>
																																																																																		<select name="c6[]">
																																																																																			<option value="0">0</option>
																																																																																			<option value="1">1</option>
																																																																																			<option value="2">2</option>
																																																																																			<option  value="3">3</option>
																																																																																			<option value="4">4</option>
																																																																																		</select></td>
																																																																																		<td>
																																																																																			<select name="c6[]">
																																																																																				<option value="0">0</option>
																																																																																				<option value="1">1</option>
																																																																																				<option value="2">2</option>
																																																																																				<option  value="3">3</option>
																																																																																				<option value="4">4</option>
																																																																																			</select></td>
																																																																																			<td>
																																																																																				<select name="c6[]">
																																																																																					<option value="0">0</option>
																																																																																					<option value="1">1</option>
																																																																																					<option value="2">2</option>
																																																																																					<option  value="3">3</option>
																																																																																					<option value="4">4</option>
																																																																																				</select></td>
																																																																																				<td>
																																																																																					<select name="c6[]">
																																																																																						<option value="0">0</option>
																																																																																						<option value="1">1</option>
																																																																																						<option value="2">2</option>
																																																																																						<option  value="3">3</option>
																																																																																						<option value="4">4</option>
																																																																																					</select></td>
																																																																																					<td>
																																																																																						<select name="c6[]">
																																																																																							<option value="0">0</option>
																																																																																							<option value="1">1</option>
																																																																																							<option value="2">2</option>
																																																																																							<option  value="3">3</option>
																																																																																							<option value="4">4</option>
																																																																																						</select></td>
																																																																																						<td>
																																																																																							<select name="c6[]">
																																																																																								<option value="0">0</option>
																																																																																								<option value="1">1</option>
																																																																																								<option value="2">2</option>
																																																																																								<option  value="3">3</option>
																																																																																								<option value="4">4</option>
																																																																																							</select></td>
																																																																																						</tr>
																																																																																						<tr colspan="3">
																																																																																							<td class="left">ability to find, interpret,evaluate, use and createimages and visual media
																																																																																							</td>
																																																																																							<td>
																																																																																								<select name="c7[]">
																																																																																									<option value="0">0</option>
																																																																																									<option value="1">1</option>
																																																																																									<option value="2">2</option>
																																																																																									<option  value="3">3</option>
																																																																																									<option value="4">4</option>
																																																																																								</select></td>
																																																																																								<td>
																																																																																									<select name="c7[]">
																																																																																										<option value="0">0</option>
																																																																																										<option value="1">1</option>
																																																																																										<option value="2">2</option>
																																																																																										<option  value="3">3</option>
																																																																																										<option value="4">4</option>
																																																																																									</select></td>
																																																																																									<td>
																																																																																										<select name="c7[]">
																																																																																											<option value="0">0</option>
																																																																																											<option value="1">1</option>
																																																																																											<option value="2">2</option>
																																																																																											<option  value="3">3</option>
																																																																																											<option value="4">4</option>
																																																																																										</select></td>
																																																																																										<td>
																																																																																											<select name="c7[]">
																																																																																												<option value="0">0</option>
																																																																																												<option value="1">1</option>
																																																																																												<option value="2">2</option>
																																																																																												<option  value="3">3</option>
																																																																																												<option value="4">4</option>
																																																																																											</select></td>
																																																																																											<td>
																																																																																												<select name="c7[]">
																																																																																													<option value="0">0</option>
																																																																																													<option value="1">1</option>
																																																																																													<option value="2">2</option>
																																																																																													<option  value="3">3</option>
																																																																																													<option value="4">4</option>
																																																																																												</select></td>
																																																																																												<td>
																																																																																													<select name="c7[]">
																																																																																														<option value="0">0</option>
																																																																																														<option value="1">1</option>
																																																																																														<option value="2">2</option>
																																																																																														<option  value="3">3</option>
																																																																																														<option value="4">4</option>
																																																																																													</select></td>
																																																																																													<td>
																																																																																														<select name="c7[]">
																																																																																															<option value="0">0</option>
																																																																																															<option value="1">1</option>
																																																																																															<option value="2">2</option>
																																																																																															<option  value="3">3</option>
																																																																																															<option value="4">4</option>
																																																																																														</select></td>
																																																																																														<td>
																																																																																															<select name="c7[]">
																																																																																																<option value="0">0</option>
																																																																																																<option value="1">1</option>
																																																																																																<option value="2">2</option>
																																																																																																<option  value="3">3</option>
																																																																																																<option value="4">4</option>
																																																																																															</select></td>
																																																																																															<td>
																																																																																																<select name="c7[]">
																																																																																																	<option value="0">0</option>
																																																																																																	<option value="1">1</option>
																																																																																																	<option value="2">2</option>
																																																																																																	<option  value="3">3</option>
																																																																																																	<option value="4">4</option>
																																																																																																</select>
																																																																																																<td>
																																																																																																	<select name="c7[]">
																																																																																																		<option value="0">0</option>
																																																																																																		<option value="1">1</option>
																																																																																																		<option value="2">2</option>
																																																																																																		<option  value="3">3</option>
																																																																																																		<option value="4">4</option>
																																																																																																	</select></td>
																																																																																																	<td>
																																																																																																		<select name="c7[]">
																																																																																																			<option value="0">0</option>
																																																																																																			<option value="1">1</option>
																																																																																																			<option value="2">2</option>
																																																																																																			<option  value="3">3</option>
																																																																																																			<option value="4">4</option>
																																																																																																		</select></td>
																																																																																																		<td>
																																																																																																			<select name="c7[]">
																																																																																																				<option value="0">0</option>
																																																																																																				<option value="1">1</option>
																																																																																																				<option value="2">2</option>
																																																																																																				<option  value="3">3</option>
																																																																																																				<option value="4">4</option>
																																																																																																			</select></td>
																																																																																																		</tr>
																																																																																																	</table>
																																																																																																	</div>																																<!-- //column 8 detail information table -->
											';
					
				}
				
				?>
				
							
																																																																																																	<p class="black">12 : The extent to which the academic programme at JSSATEN helped you develope communication capabilities :</p>
																																																																																																	<table class="table table-responsive table-bordered">
																																																																																																		<tr>
																																																																																																			<th></th>
																																																																																																			<th>To a great extent</th>
																																																																																																			<th>To a moderate extent</th>
																																																																																																			<th>To a slight extent</th>
																																																																																																			<th>To a very little extent</th>
																																																																																																			<th>Not at all</th>
																																																																																																			<th> N/A</th>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Oral Communication</td>
																																																																																																			<td><input type="radio" name="communication1" value="great" required></td>
																																																																																																			<td><input type="radio" name="communication1" value="moderate"></td>
																																																																																																			<td><input type="radio" name="communication1" value="slight"></td>
																																																																																																			<td><input type="radio" name="communication1" value="little"></td>
																																																																																																			<td><input type="radio" name="communication1" value="not"></td>
																																																																																																			<td><input type="radio" name="communication1" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Written Communication</td>
																																																																																																			<td><input type="radio" name="communication2" value="great" required></td>
																																																																																																			<td><input type="radio" name="communication2" value="moderate"></td>
																																																																																																			<td><input type="radio" name="communication2" value="slight"></td>
																																																																																																			<td><input type="radio" name="communication2" value="little"></td>
																																																																																																			<td><input type="radio" name="communication2" value="not"></td>
																																																																																																			<td><input type="radio" name="communication2" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Extract key infomation from complex texts</td>
																																																																																																			<td><input type="radio" name="communication3" value="great" required></td>
																																																																																																			<td><input type="radio" name="communication3" value="moderate"></td>
																																																																																																			<td><input type="radio" name="communication3" value="slight"></td>
																																																																																																			<td><input type="radio" name="communication3" value="little"></td>
																																																																																																			<td><input type="radio" name="communication3" value="not"></td>
																																																																																																			<td><input type="radio" name="communication3" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Interdisciplinary knowledge in a variety of cultural contexts</td>
																																																																																																			<td><input type="radio" name="communication4" value="great" required></td>
																																																																																																			<td><input type="radio" name="communication4" value="moderate"></td>
																																																																																																			<td><input type="radio" name="communication4" value="slight"></td>
																																																																																																			<td><input type="radio" name="communication4" value="little"></td>
																																																																																																			<td><input type="radio" name="communication4" value="not"></td>
																																																																																																			<td><input type="radio" name="communication4" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		
																																																																																																	</table>
																																																																																																	<!--/ block 9 -->
																																																																																																	
																																																																																																	<!-- block 10 -->
																																																																																																	<p class="black">13 :The extent to which the academic programme at JSSATEN helped you develop global perspective:</p>
																																																																																																	<table class="table table-responsive table-bordered">
																																																																																																		<tr>
																																																																																																			<th></th>
																																																																																																			<th>To a great extent</th>
																																																																																																			<th>To a moderate extent</th>
																																																																																																			<th>To a slight extent</th>
																																																																																																			<th>To a very little extent</th>
																																																																																																			<th>Not at all</th>
																																																																																																			<th> N/A</th>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Ability to integrate different interdisciplinary materials :</td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="great" required></td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="moderate"></td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="slight"></td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="little"></td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="not"></td>
																																																																																																			<td><input type="radio" name="global_perspective1" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Ability to engage with  local and global communities to make a difference in civic life :</td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="great" required></td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="moderate"></td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="slight"></td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="little"></td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="not"></td>
																																																																																																			<td><input type="radio" name="global_perspective2" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Ability to demonstrate intercultural knowledge, and to interact effectively in a variety of cultural contexts :</td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="great" required></td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="moderate"></td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="slight"></td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="little"></td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="not"></td>
																																																																																																			<td><input type="radio" name="global_perspective3" value="na"></td>
																																																																																																		</tr>
																																																																																																	</table>
																																																																																																	<!--/ block 10 -->
																																																																																																	
																																																																																																	<!-- block 11 -->
																																																																																																	<p class="black">14 :The extent to which the academic programme at JSSATEN contributed to your: </p>
																																																																																																	<table class="table table-responsive table-bordered">
																																																																																																		<tr>
																																																																																																			<th></th>
																																																																																																			<th>To a great extent</th>
																																																																																																			<th>To a moderate extent</th>
																																																																																																			<th>To a slight extent</th>
																																																																																																			<th>To a very little extent</th>
																																																																																																			<th>Not at all</th>
																																																																																																			<th> N/A</th>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Personality Development :</td>
																																																																																																			<td><input type="radio" name="personality_dev" value="great" required></td>
																																																																																																			<td><input type="radio" name="personality_dev" value="moderate"></td>
																																																																																																			<td><input type="radio" name="personality_dev" value="slight"></td>
																																																																																																			<td><input type="radio" name="personality_dev" value="little"></td>
																																																																																																			<td><input type="radio" name="personality_dev" value="not"></td>
																																																																																																			<td><input type="radio" name="personality_dev" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Academic Development:</td>
																																																																																																			<td><input type="radio" name="academic_dev" value="great" required></td>
																																																																																																			<td><input type="radio" name="academic_dev" value="moderate"></td>
																																																																																																			<td><input type="radio" name="academic_dev" value="slight"></td>
																																																																																																			<td><input type="radio" name="academic_dev" value="little"></td>
																																																																																																			<td><input type="radio" name="academic_dev" value="not"></td>
																																																																																																			<td><input type="radio" name="academic_dev" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Professional Development :</td>
																																																																																																			<td><input type="radio" name="professional_dev" value="great" required></td>
																																																																																																			<td><input type="radio" name="professional_dev" value="moderate"></td>
																																																																																																			<td><input type="radio" name="professional_dev" value="slight"></td>
																																																																																																			<td><input type="radio" name="professional_dev" value="little"></td>
																																																																																																			<td><input type="radio" name="professional_dev" value="not"></td>
																																																																																																			<td><input type="radio" name="professional_dev" value="na"></td>
																																																																																																		</tr>
																																																																																																		
																																																																																																		<tr>
																																																																																																			<td class="left">Meet All my expectations :</td>
																																																																																																			<td><input type="radio" name="expectations" value="great" required></td>
																																																																																																			<td><input type="radio" name="expectations" value="moderate"></td>
																																																																																																			<td><input type="radio" name="expectations" value="slight"></td>
																																																																																																			<td><input type="radio" name="expectations" value="little"></td>
																																																																																																			<td><input type="radio" name="expectations" value="not"></td>
																																																																																																			<td><input type="radio" name="expectations" value="na"></td>
																																																																																																		</tr>
																																																																																																	</table>
																																																																																																	<!--/ block 11 -->
																																																																																																	
																																																																																																	
																																																																																																	<div class="radio">
																																																																																																		<p class="black">15 : Overall, how satisfied with the quality of the [B .Tech. (Electronics & Communication Engineering)] are you?</p>
																																																																																																		<label><input type="radio" name="satisfaction" value="extremely satisfied" required>Extremely Satisfied</label>
																																																																																																		<label><input type="radio" name="satisfaction" value="Moderately Satisfied">Moderately Satisfied</label>
																																																																																																		<label><input type="radio" name="satisfaction" value="somewhat Satisfied">Somewhat Satisfied</label>
																																																																																																		<label><input type="radio" name="satisfaction" value="Somewhat dissatisfied">Somewhat dissatisfied</label>
																																																																																																		<label><input type="radio" name="satisfaction" value="Moderately dissatisfied">Moderately dissatisfied</label>
																																																																																																		<label><input type="radio" name="satisfaction" value="Very Much dissatisfied">Very Much dissatisfied</label>
																																																																																																	</div>
																																																																																																	
																																																																																																	<!-- / Part 2 -->
																																																																																																	
																																																																																																	<!-- Part 3 -->
																																																																																																	
																															<br />
<p class="black">C. Your Feedback (descriptive-few lines): </p>
<hr />																																<div class="form-group">
																																																																																																		<label>16 : In general, what learning experiences or aspects of the academic programme at JSSATEN have been <b>MOST BENEFICIAL</b> to you? (Max Length: 1000 characters)</label>
																																																																																																		<textarea class="form-control ckeditor" rows="5" name="comment13" maxlength="1000" required></textarea>
																																																																																																	</div>
																																																																																																	<div class="form-group">
																																																																																																		<label>17 : In general, what learning experiences or aspects of the academic programme at JSSATEN have been <b>LEAST BENEFICIAL</b> to you? (Max Length: 1000 characters)</label>
																																																																																																		<textarea class="form-control ckeditor" rows="5" name="comment14" maxlength="1000" required></textarea>
																																																																																																	</div>
																																																																																																	<div class="form-group">
																																																																																																		<label>18 : If you were to improve the academic programme at JSSATEN in your discipline, what would be your top three recommendations? (Max Length: 1000 characters)</label>
																																																																																																		<textarea class="form-control ckeditor" rows="5" name="comment15" maxlength="1000" required></textarea>
																																																																																																	</div>
																																																																																																	<div class="form-group">
																																																																																																		<label>19 : Please provide any further comments about the academic programme at JSSATEN in your discipline that you feel may benefit this curriculum review process, bridging the gaps with the industry/higher education.  (Max Length: 1000 characters)</label>
																																																																																																		<textarea class="form-control ckeditor" rows="5" name="comment16" maxlength="1000" required></textarea>
																																																																																																	</div>
																																																																																																	<p class="black" style="text-align:center;font-style:italic;">THANK YOU FOR SPARING YOUR VALUABLE TIME.</p>
																																																																																																	
																																																																																																	<!-- Part 3 -->
																																																																																																	<br>
																																																																																																	<button type="submit" class="btn btn-primary btn-block " style="font-family: 'Exo 2', sans-serif;
																																																																																																	font-size: 25px;">Submit</button>
																																																																																																	<br>
																																																																																																	<br>
																																																																																																</form>
																																																																																															</div>
																																																																																														</body>
																																																																																													</html>