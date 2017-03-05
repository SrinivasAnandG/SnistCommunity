<?php
session_start();
include 'files.php';
$object=new Files;
$conn=$object->connection();
$user_id=$_SESSION['user_id'];
$my_id='15311A12D5';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charser="UTF-8">
	<meta lang="en-US">
	<title>welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style>
	footer
	{
		position:relative;
		bottom:0px;
		/*width: 100%;*/
		text-align: center;
		background-color: #003760;
		color: #BBBBBB;
		/*padding-right: 990px;*/
		border-radius: 8px;
		padding-bottom: 25px;
	}
	body
	{
		background-image: url("");
  	  	background-repeat: no-repeat;
    	background-position: left top;
    	background-attachment: fixed;
    	background-color: #BBBBBB;
	}
	input[type=TEXT]
	{
		border-radius: 5px;
		width:120px;
	}
	input[type=SUBMIT]
	{
		border-radius: 5px;
	}
	.navbar-custom 
	{
		background-color:#BBBBBB;
    	color: black;
  		border-radius:10px;
	}
  	.navbar
  	{ 
   	 	background-image: none;
	}
	.dropbtn
	{
    	background-color:#BBBBBB;
    	color: black;
    	padding: 6px;
    	font-size: 16px;
    	border: none;
	    cursor: pointer;
	    padding-right: 10px;
	    padding-left: 10px;
	    border-radius: 5px;
	}

	.dropdown 
	{
    	position: absolute;
    	right: 50px;
    	display: inline-block;
	}

	.dropdown-content 
	{
    	display: none;
    	position: absolute;
    	background-color: #f9f9f9;
    	min-width: 160px;
    	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    	z-index: 1;
	}

	.dropdown-content a 
	{
    	color: black;
    	padding: 12px 16px;
    	text-decoration: none;
    	display: block;
	}

	.dropdown-content a:hover {background-color: #BBBBBB;}

	.dropdown:hover .dropdown-content 
	{
    	display: block;
	}

	.dropdown:hover .dropbtn 
	{
    	background-color: #3e8e41;
	}

	</style>	
</head>
<body>
	<?php
		if(isset($_SESSION['user_id'])&&isset($_SESSION['username']))
		{
			$REGULAR='REGULAR';
			$CS='CS';
			$IT='IT';
			$MECH='MECH';
			$ECE='ECE';
			$EEE='EEE';
			$ECM='ECM';
			$BT='BT';
			$CIVIL='CIVIL';
			$CLUBS='CLUBS';
			$FESTS='FESTS';
			$WORKSHOPS='WORKSHOPS';
			$EVENTS='EVENTS';
			$OTHERS='OTHERS';
			echo '<div class="container-fluid">';
			//echo '<img class="img-thumbnail" alt="college_logo" src="logo.jpeg" height="130" width="70">';
			echo '<div class="row" style="background-color:#003760; padding-bottom:30px; border-radius:8px; color:#BBBBBB;">';
			echo '<div class="col-xs-2" style="font-size:300%; padding-top:35px;">';
			echo '<img class="img-responsive" alt="college_logo" src="logo.jpeg" height="320" width="420">';
			//echo '<h1 style="text-align:center;">SNIST FORUMS</h1>';
			echo '</div>';
			echo '<div class="col-xs-10" style="font-size:300%;">';
			echo '<h1 style="text-align:center; padding-right:75px; padding-top:13px;">COMMUNITY</h1>';
			echo '</div>';
			echo '</div>';
			echo '<div class="row">';
			echo '<div class="col-xs-8">';
			echo '<h3>Welcome, '.$_SESSION['username']."...!".'</h3>';
			echo '</div>';
			echo '<div class="col-xs-4" style="padding-top:25px;">';
			echo '<form action="search.php" method="post">';
			echo '<input type="text" name="search_value" placeholder="Search Anything..." required>';
			echo ' <input type="submit" value="Search">';
			echo '</form>';
			echo '</div>';
			echo '</div>';
			
			echo '<nav class="navbar navbar-default navbar-custom">';
  			echo '<div class="navbar-header">';
    		echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
      		echo '<span class="sr-only">Toggle navigation</span>';
      		echo '<span class="icon-bar"></span>';
      		echo '<span class="icon-bar"></span>';
      		echo '<span class="icon-bar"></span>';
    		echo '</button>';
    		echo '<a class="navbar-brand" href="homepage.php">Snist Community</a>';
  			echo '</div>';
  			echo '<div class="collapse navbar-collapse">';
    		echo '<ul class="nav navbar-nav">';
     		echo '<li class="active"><a href="homepage.php">Homepage</a></li>';
        	echo '<li><a href="compose.php">Compose</a></li>';
        	echo '<li><a href="groups.php">Groups</a></li>';
        	echo '<li><a href="create_group.php">Create</a></li>';
        	echo '<li><a href="mostviewed.php">Mostviewed</a></li>';
        	echo '<li><a href="profile.php">Profile</a></li>';
        	echo '<li><a href="logout.php">Logout</a></li>';
    		echo '</ul>';
  			echo '</div>';
			echo '</nav>';
			
			echo '<div class="dropdown">';
  			echo '<button class="dropbtn">Category</button>';
  			echo '<div class="dropdown-content">';
    		echo '<a href="homepage.php">REGULAR</a>';
    		echo '<a href="homepage_by_category.php?category='.$CS.'">CS</a>';
    		echo '<a href="homepage_by_category.php?category='.$IT.'">IT</a>';
    		echo '<a href="homepage_by_category.php?category='.$MECH.'">MECH</a>';
    		echo '<a href="homepage_by_category.php?category='.$ECE.'">ECE</a>';
    		echo '<a href="homepage_by_category.php?category='.$EEE.'">EEE</a>';
    		echo '<a href="homepage_by_category.php?category='.$ECM.'">ECM</a>';
    		echo '<a href="homepage_by_category.php?category='.$BT.'">BT</a>';
    		echo '<a href="homepage_by_category.php?category='.$CIVIL.'">CIVIL</a>';
    		echo '<a href="homepage_by_category.php?category='.$CLUBS.'">CLUBS</a>';
    		echo '<a href="homepage_by_category.php?category='.$FESTS.'">FESTS</a>';
    		echo '<a href="homepage_by_category.php?category='.$WORKSHOPS.'">WORKSHOPS</a>';
    		echo '<a href="homepage_by_category.php?category='.$EVENTS.'">EVENTS</a>';
    		echo '<a href="homepage_by_category.php?category='.$OTHERS.'">OTHERS</a>';
    		echo '</div>';
			echo '</div><br/>';
			$query="select * from posts order by date_added desc";
			$execute=mysqli_query($conn,$query);
			if($execute)
			{
				$query4="select * from posts where user_id='$user_id'";
				$execute3=mysqli_query($conn,$query4);
				if(mysqli_num_rows($execute3)==0)
				{
					//echo '<img src="sign.png" helght="100" width="200">';
					echo '<h4><img src="sign.png" helght="50" width="70">  You have not yet composed any post till now. Try to compose ..Now<h4>';
				}
				while($row=mysqli_fetch_row($execute))
				{
					$row2=$object->getUserDetails($conn,$row[1]);
					$likes=$object->getLikes($conn,$row[0]);
					echo '<br/>';
					echo '<div class="row">';
					if($row2[7]==null)
					{
						echo '<div class="col-xs-8" style="color:; background-color:#BBBBBB; font-size:100%;"><img height="50" class="img-circle" width="50" alt="picture" src="default_pp.png"><a href="view_profile.php?user_id='.$row[1].'">'.$row2[1].' '.$row2[2].'</a></div>';
					}
					else
					{
						echo '<div class="col-xs-8" style="color:; background-color:#BBBBBB; font-size:100%;"><img height="50" class="img-circle" width="50" alt="picture" src="data:image;base64,'.$row2[7].'"><a href="view_profile.php?user_id='.$row[1].'">'.$row2[1].' '.$row2[2].'</a></div>';
					}
					echo '<div class="col-xs-4" style="color:; background-color:#BBBBBB; font-size:100%;">'.$row[4].'<lable><img src="view.png" alt="default_view_pic" height="10" width="10"></lable>'." ".$row[5].'</div>';
					echo '</div>';
					echo '<div class="row" style="background-color:#ffffff; float:bottom; overflow:hidden; width:100%; border-radius:10px">';
					echo '<a href="view_post.php?post_id='.$row[0].'" style="color:#000000; background-color:#ffffff;"><div class="col-xs-12" style="padding-bottom:0px; padding-top:0px; border-radius:8px; font-size:150%;"><h3><h5>['.$row[6].']</h5>'.$row[2].'</h3></div></a>';
					//echo '<h5>'.$row[3].'</h5>';
					echo '</div><br/><br/>';
					//echo '<lable style="background-color:#ffffff;">'.$likes.' Likes</lable> <br/><br/>';
				}
			}
			else
			{
				echo '<script>window.location.href = "linkbroke.php";</script>';
			}
			echo '</div>';
			echo '<a href="author.php"><footer>Developed and Maintained by Srinivas Anand.G</footer></a>';
		}
		else
		{
			echo '<script>window.location.href = "linkbroke.php";</script>';
		}
	?>
</body>
</html>