<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
{
	echo '<script>window.location.href = "homepage.php";</script>';
}
else
{
	echo '<script>window.location.href = "loginValid.php";</script>';
}
?>