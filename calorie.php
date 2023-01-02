<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
</head>
	
<body>
	<link rel="stylesheet" href="caloriestyle.css">
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
			<li><a onclick="openForm()">account</a></li>
		</ul>
		
		<?php
		session_start();
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
				<a href="register.php">Not yet a member? </a>
				<div class='input-group'>
					<button type='submit' class='btn' name='login_user'>Login</button>
				</div>
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
		window.location.href = "home.php";
	}
	</script>
	
	<form action="calories.php" method="post">
		<b>Age<br> <input type="number" name="age"><b><br>
		<b>Gender<b><br>
		<select name="gender">
			<option value="3">select</option>
			<option value="0">Female</option>
			<option value="1">Male</option>
		</select><br>
		<b>Workload<b><br>
		<select name="workload">
			<option value="3">select</option>
			<option value="0">Low</option>
			<option value="1">Medium</option>
			<option value="2">High</option>
		</select><br>
		<input type="submit">
	</form>
	
	
	
</p>

</body>
</html>