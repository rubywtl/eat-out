<?php include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="registerstyle.css">
</head>

	
<body>
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
	
  <div class="header">
  	Register
  </div>
 
	<script>
	function openForm() {
		document.getElementById("myForm").style.display = "block";
	}
	
	function closeForm(){
		document.getElementById("myForm").style.display = "none";
		window.location.href = "home.php";
	}
	</script>
	
  <form method="post" action="server.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		 <a href="index.php">Already a member?</a>
  	</p>
  </form>
</body>
</html>
