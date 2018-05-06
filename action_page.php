<?php
session_start();
error_reporting(0);
include('include/connect.php'); 
$uniq_id=uniqid();
$name=$_POST['name'];
$work_organization=$_POST['work_organization'];
$email=$_POST['email'];
$department=$_SESSION['department'];
$passing_year=$_POST['passing_year'];
$overall_standing=$_POST['overall_standing'];
$carrier_status=$_POST['carrier_status'];

if($carrier_status=="attending_graduate_school"){
	 $carrier_status=$_POST['graduate_school'];
}
elseif($carrier_status=="others"){
	 $carrier_status=$_POST['carrier_status_other'];
}

$work_nature=implode(", ", $_POST['work_nature']);

if($work_nature=="others"){
	$current_nature_box=$_POST['current_nature_box'];
		$work_nature=$work_nature.$current_nature_box;
}

$employment=$_POST['employment'];

if($employment=="others"){
	$employment=$_POST['employment_box'];
}

$peo1=$_POST['peo1'];
$peo2=$_POST['peo2'];
$peo3=$_POST['peo3'];
$peo4=$_POST['peo4'];
$peo5=$_POST['peo5'];
$communication1=$_POST['communication1'];
$communication2=$_POST['communication2'];
$communication3=$_POST['communication3'];
$communication4=$_POST['communication4'];
$global_perspective1=$_POST['global_perspective1'];
$global_perspective2=$_POST['global_perspective2'];
$global_perspective3=$_POST['global_perspective3'];
$personality=$_POST['personality_dev'];
$academic=$_POST['academic_dev'];
$professional=$_POST['professional_dev'];
$meet_all_my=$_POST['expectations'];
$satisfaction=$_POST['satisfaction'];
$comment13=$_POST['comment13'];
$comment14=$_POST['comment14'];
$comment15=$_POST['comment15'];
$comment16=$_POST['comment16'];

echo $sql="INSERT INTO  enquiry (uniq_id,name_alumnus,work_organization,email_alumnus,department,year_alumnus,standing_alumnus,carrier_status_alumnus,nature_of_work,employment,PEO1,PEO2,PEO3,PEO4,PEO5,communication1,communication2,communication3,communication4,global_perspective1,global_perspective2,global_perspective3,personality,academic,professional,meet_all_my,satisfied_with_quality,most_beneficial_aspects,least_beneficial_aspects,recommendations,comments)
 values ('$uniq_id','$name','$work_organization', '$email','$department','$passing_year','$overall_standing','$carrier_status','$work_nature','$employment','$peo1','$peo2','$peo3','$peo4','$peo5','$communication1','$communication2','$communication3','$communication4','$global_perspective1','$global_perspective2','$global_perspective3','$personality','$academic','$professional','$meet_all_my','$satisfaction','$comment13','$comment14','$comment15','$comment16')";

$insert=mysqli_query($con, $sql);

if($insert)
{

// if department is b.tech 
if($department=="B.Tech" || $department=="Department of Management Studies"){
echo 'in btech';
$c1=implode(", ", $_POST['c1']);
$c2=implode(", ", $_POST['c2']);
$c3=implode(", ", $_POST['c3']);
$c4=implode(", ", $_POST['c4']);
$c5=implode(", ", $_POST['c5']);
$c6=implode(", ", $_POST['c6']);
$c7=implode(", ", $_POST['c7']);
$c8=implode(", ", $_POST['c8']);

$sql1="INSERT INTO btech(uniq_id,to_gather,to_identify_problems,to_think,to_integrate,to_identify,to_select,to_find,to_work) values ('$uniq_id','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8')";

$insert1=mysqli_query($con, $sql1);
if($insert1){
	header('location:thank-you.html');
}
}
elseif($department=="Department of Computer Application"){
$percentage=$_POST['percentage'];
$qualification=$_POST['qualification'];
$experience=$_POST['experience'];
$positions=$_POST['positions'];
$issues=$_POST['issues'];
$project=$_POST['project'];
$entrepreneur_project=$_POST['handled'];


echo $sql2="INSERT INTO mca(uniq_id,percentage,qualification,experience,position,project,issue,entrepreneur_project) values ('$uniq_id','$percentage','$qualification','$experience','$positions','$project','$issues','$entrepreneur_project')";

$insert2=mysqli_query($con, $sql2);
if($insert2){
	header('location:thank-you.html');
	session_unset();
	session_destroy();
	
}
}

}
else{
header('location:enquiry.php?error=not-submitted');
}


?>