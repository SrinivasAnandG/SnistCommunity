<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$name=mysqli_real_escape_string($conn,$_POST['group_name']);
if(isset($_SESSION['username'])&&isset($_SESSION['user_id']))
{
	$query="insert into groups values(null,'$name','$user_id',null)";
	$execute=mysqli_query($conn,$query);
	if($execute)
	{
		$query2="select * from groups where group_admin_id='$user_id' and group_name='$name' order by date desc";
		$execute2=mysqli_query($conn,$query2);
		if($execute2)
		{
			$row=mysqli_fetch_row($execute2);
			$group_id=$row[0];
			$query3="insert into group_members values('$group_id','$user_id')";
			$execute3=mysqli_query($conn,$query3);
			if($execute3)
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

			echo '<script>window.location.href = "linkbroke.php";</script>';
		}
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