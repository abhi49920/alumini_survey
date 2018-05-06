<?php
session_start();

$name=$_POST['name'];
$organization=$_POST['orgname'];
$department=$_POST['department'];

$_SESSION['name']=$name;
$_SESSION['organization']=$organization;
$_SESSION['department']=$department;

header('location:enquiry.php');

?>