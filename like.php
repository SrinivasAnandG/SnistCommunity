<?php
session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	include 'files.php';
	$object=new Files;
	$conn=$object->connection();
	$post_id=mysqli_real_escape_string($conn,$_GET['post_id']);
	$result=$object->like($conn,$post_id,$_SESSION['user_id']);
	echo '<script>window.location.href = "view_post.php?post_id='.$post_id.'";</script>';
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>