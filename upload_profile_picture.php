
<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
{
	if(getimagesize($_FILES['profile_picture']['tmp_name'])==false)
	{
		echo '<script>window.location.href = "linkbroke.php";</script>';
	}
	else
	{
		$image = addslashes($_FILES['profile_picture']['tmp_name']);
        $name  = addslashes($_FILES['profile_picture']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        //saveimage($name,$image);
        $uploaddir = 'profile_pictures/'; //this is your local directory
        $uploadfile = $uploaddir . basename($_FILES['profile_picture']['name']);
        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadfile);
        $query="update users set profile_pic='$uploadfile' where user_id='$user_id'";
		$execute=mysqli_query($conn,$query);
		echo '<script>window.location.href = "homepage.php";</script>';
	}
}
else
{
	echo '<script>window.location.href = "linkbroke.php";</script>';
}
?>