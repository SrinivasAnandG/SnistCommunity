<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$group_id=mysqli_real_escape_string($conn,$_GET['group_id']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$query="delete from groups where group_admin_id='$user_id' and group_id='$group_id'";
	$execute=mysqli_query($conn,$query);
	$query2="delete from group_members where group_id='$group_id'";
	$execute2=mysqli_query($conn,$query2);
	$query3="delete from group_messages where group_id='$group_id'";
	$execute3=mysqli_query($conn,$query3);
	if($execute&&$execute3&&$execute2)
	{
	echo '<script>window.location.href = "groups.php";</script>';
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