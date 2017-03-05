<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF_8">
	<meta lang="en_US">
	<title>logout</title>
</head>
<body>
	<?php

	if(isset($_SESSION['username']))
	{
		session_destroy();
		echo '<script>window.location.href = "index.php";</script>';
	}
	else
	{
		echo '<script>window.location.href = "linkbroke.php";</script>';
	}
	?>
</body>
</html>