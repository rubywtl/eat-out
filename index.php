<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<header>
	<title>Eatout</title>
</header>

<body>
	<link rel="stylesheet" href="indexstyle.css">
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
			<li><a href="about.html">blog</a></li>
			<li><a onclick="openForm()">account</a></li>
		</ul>
		<?php
		session_start();
		$_SESSION['login']=0;
		$_SESSION['id']=0;
		if($_SESSION['login']==0){?>
		<div class='form-popup' id='myForm'>
			<form method='post' action='server.php' class='form-container'>
				<h1>Login</h1>
				<div class='input-group'>
					<label>Username</label>
					<input type='text' name='username'required >
				</div>
				<div class='input-group'>
					<label>Password</label>
					<input type='password' name='password' required>
				</div>	
				<div class='input-group'>
					<button type='submit' class='btn' name='login_user'>Login</button>
				</div>
				<a href="register.php">create account </a>
				<button type='button' class='btn cancel' onclick='closeForm()'>Close</button>
			</form>
		</div>
	</nav>
	<?php
	}	?>
	<script>
	function openForm() {
		document.getElementById("myForm").style.display = "block";
	}
	
	function closeForm(){
		document.getElementById("myForm").style.display = "none";
		window.location.href = "index.php";
	}
	</script>
	
	<img src="indexpic.jpg" >
</body>

</html>