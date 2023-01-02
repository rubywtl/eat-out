
<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<header>
	<title>Eatout</title>
</header>

<body>
	<link rel="stylesheet" href="profilestyle.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	
	<nav>
		<div class="logo">
			<h3>Eatout<h3>
		</div>
		<ul  class="nav-links">
			<li><a href="home.php">home</a></li>
			<li><a href="calorie.php">choose</a></li>
			<li><a href="about.html">about</a></li>
			<li><a href="profile.php">account</a></li>
		</ul>
	</nav>
	
	<div class="sidenav">
	<a href="settings.php">settings</a>
	<a href="saved.php">list</a>
	</div>

	<div class="main">
	<h3>saved</h3>
	<p>
	<?php
	require("conn.php");
	$sql_query="SELECT * FROM history";
	$result=mysqli_query($db,$sql_query);
	?>
	</p>
	</div>
	<button class='savedbutton'>save</button>
	
</body>

</html>
