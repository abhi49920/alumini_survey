<?php

//error_reporting(0);
$con=mysqli_connect("localhost","root","","jss_enquiry");
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}


$name=$_POST['name'];
$email=$_POST['email'];
$passing_year=$POST['passing_year'];
$overall_standing=$_POST['overall_standing'];
$carrier_status=$_POST['carrier_status'];
$work_nature=$_POST['work_nature'];
$employment=$_POST['employment'];
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

$sql="INSERT INTO  enquiry (name_alumnus,email_alumnus,year_alumnus,standing_alumnus,carrier_status_alumnus,nature_of_work,employment,PEO1,PEO2,PEO3,PEO4,PEO5,communication1,communication2,communication3,communication4,global_perspective1,global_perspective2,global_perspective3,personality,academic,professional,meet_all_my,satisfied_with_quality,most_beneficial_aspects,least_beneficial_aspects,recommendations,comments)
 values ('$name', '$email','$passing_year','$overall_standing','$carrier_status','$work_nature','$employment','$peo1','$peo2','$peo3','$peo4','$peo5','$communication1','$communication2','$communication3','$communication4','$global_perspective1','$global_perspective2','$global_perspective3','$personality','$academic','$professional','$meet_all_my','$satisfaction','$comment13','$comment14','$comment15','$comment16')";

$insert=mysqli_query($con, $sql);

if($insert)
{
header('location:enquiry.php');
}
else{
header('location:my-blog.php');
}


?>