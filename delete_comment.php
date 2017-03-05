<?php
session_start();
$post_id=$_GET['post_id'];
include 'files.php';
$object=new Files;
$conn=$object->connection();
$id=mysqli_real_escape_string($conn,$_GET['id']);
$user_id=$_SESSION['user_id'];
$date=mysqli_real_escape_string($conn,$_GET['date']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$query="delete from comments where post_id='$post_id' and user_id='$id' and date='$date'";
	$execute=mysqli_query($conn,$query);
	if($execute)
	{
	echo '<script>window.location.href = "view_post.php?post_id='.$post_id.'";</script>';
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