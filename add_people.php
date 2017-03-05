<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$group_id=mysqli_real_escape_string($conn,$_GET['group_id']);
$user=mysqli_real_escape_string($conn,$_POST['user_id']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$query2="select * from group_members where group_id='$group_id' and user_id='$user'";
	$execute2=mysqli_query($conn,$query2);
	$row=$object->getUserDetails($conn,$user);
	if($execute2&&$row&&(mysqli_num_rows($execute2)==0))
	{
		$query="insert into group_members values('$group_id','$user')";
		$execute=mysqli_query($conn,$query);
		if($execute)
		{	
			echo '<script>window.location.href = "view_group.php?group_id='.$group_id.'";</script>';
		}
		else
		{	
			echo '<script>window.location.href = "linkbroke.php";</script>';
		}
	}
	else
	{
		echo '<script>window.location.href = "view_group.php?group_id='.$group_id.'";</script>';
	}
}
else
{
	
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>