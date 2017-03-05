<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$post_id=mysqli_real_escape_string($conn,$_GET['post_id']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id'])&&($user_id='15311A12D5'))
{
	$query="delete from posts where post_id='$post_id'";
	$execute=mysqli_query($conn,$query);
	$query2="delete from comments where post_id='$post_id'";
	$execute2=mysqli_query($conn,$query);
	$query3="delete from likes where post_id='$post_id'";
	$execute3=mysqli_query($conn,$query);
	if(($execute)&&($execute2)&&($execute3))
	{
		echo '<script>window.location.href = "homepage.php";</script>';
	}
	else
	{
		
		echo '<script>window.location.href = "linkbroke.php";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>