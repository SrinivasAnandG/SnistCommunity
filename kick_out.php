<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$group_id=mysqli_real_escape_string($conn,$_GET['group_id']);
$id=mysqli_real_escape_string($conn,$_GET['id']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$query="delete from group_members where group_id='$group_id' and user_id='$id'";
	$execute=mysqli_query($conn,$query);
	if($execute)
	{
	echo '<script>window.location.href = "group_details.php?group_id='.$group_id.'";</script>';
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