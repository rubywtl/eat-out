<html>
<head>
	<link rel="stylesheet" href="sortstyle.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>


<body>
	<nav>
		<div class="logo">
			<h3>Eatout<h3>
		</div>
		<ul  class="nav-links">
			<li><a href="index.php">home</a></li>
			<li><a href="calorie.html">choose</a></li>
			<li><a href="about.html">about</a></li>
			<li><a href="profile.html">account</a></li>
		</ul>
	</nav>
	
	<h5>建議食物組合</h5>
	<?php
		session_start();
		require("conn.php");
		$sql_query="SELECT*FROM food ORDER BY RAND()";
		$cnt=0;
		$cal=0;
		$price=0;
		$index=0;
		
		$result=mysqli_query($db,$sql_query);
		
		echo"<table class='styled-table table-hover'>
			<thead>
			<tr>
			<td>Products</td>
			<td>Calories</td>
			<td>Price</td>
			</tr>
			</thead>
			<tbody>";
		
		
		while(($row=mysqli_fetch_assoc($result))&&($cnt<5)){
			if($row['type']=='0') {
				$cal+=$row['kcal'];
				$price+=$row['price'];
				if(($cal<=$_SESSION['calorie'])/3){
					echo "<tr>
					<td>
						<form>
						<input type='button' value='+' onclick='setColor(".$index.")'id='btn".$index."'>
						</form></td>
					<td>".$row['product']."</td>
					<td>".$cal."</td>
					<td>".$price."</td>
					</tr>";
				$cnt+=1;
				}
			$price=0;
			$cal=0;
			$index++;}
		}
		
		$b=0;
		$cnt=0;
		$product1=' ';
		$product2=' ';
		while(($row=mysqli_fetch_assoc($result))&&($cnt<5)){
			$index=0;
			if($row['type']=='1'){
				$cal+=$row['kcal'];
				$price+=$row['price'];
				$product1=$row['product'];
				$b=1;
			}
			
			while(($row=mysqli_fetch_assoc($result))&&($b==1)){
				if($row['type']=='2'){
					$cal+=$row['kcal'];
					$price+=$row['price'];
					$product2= $row['product'];
					$b=2;
					
				if(($cal<=($_SESSION['calorie'])/3)&&($b!=0)){
					echo "<tr>
					<td>
					<form>
					<input type='button' value='+' onclick='setColor(".$index.")'id='btn".$index."'>
					</form></td>
				<td>".$product1." + ".$product2."</td>
				<td>".$cal."</td>
				<td>".$price."</td>
				</tr>";
				$cnt+=1;}
			$b=0;
			$price=0;
			$cal=0;
			$cnt++;
		}
			}
			
		}
			
	?>
	<form>
	<input type="button" value="refresh" href="calorie.html">
	</form>
		
</body>
</html>