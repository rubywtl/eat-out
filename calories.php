<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');

	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$workload=$_POST["workload"];
	$calorie=0;


	if($gender==1){
		if(($age>=19)&&($age<=30)){
			if($workload==0){
				echo "開始搜尋";
				$_SESSION['calorie']=1850;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==1){
				echo "開始搜尋";
				$_SESSION['calorie']=2400;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==2){
				echo "開始搜尋";
				$_SESSION['calorie']=2700;
				header('refresh:1 ; url=sort.php');
				}
			else{
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
				}
		}
		else if(($age>=31)&&($age<=50)){
			if($workload==0){
				echo "開始搜尋";
				$_SESSION['calorie']=1800;
				header('refresh:1 ; url=sort.php');}
			else if($workload==1){
				echo "開始搜尋";
				$_SESSION['calorie']=2400;
				header('refresh:1 ; url=sort.php');}
			else if($workload==2){
				echo "開始搜尋";
				$_SESSION['calorie']=2650;
				header('refresh:1 ; url=sort.php');}
			else{
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
				}
		}
		else if(($age>=51)&&($age<=70)){
			if($workload==0){
				echo "開始搜尋";
				$_SESSION['calorie']=1700;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==1){
				echo "開始搜尋";
				$_SESSION['calorie']=1850;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==2){
				echo "開始搜尋";
				$_SESSION['calorie']=2500;
				header('refresh:1 ; url=sort.php');
				}
			else{
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
				}
		}
		else if($age>=71){
			if($workload==0){
				echo "開始搜尋";
				$_SESSION['calorie']=1650;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==1){
				echo "開始搜尋";
				$_SESSION['calorie']=2150;
				header('refresh:1 ; url=sort.php');
				}
			else if($workload==2){
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
			}
			else{
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
				}
		}
		else{
			echo"資料錯誤 請重新輸入";
			header('refresh:3 ; url=calorie.html');
		}
	}
	else{
			if(($age>=19)&&($age<=30)){
				if($workload==0){
					echo "開始搜尋";
				$_SESSION['calorie']=1500;
				header('refresh:1 ; url=sort.php');
					}
				else if($workload==1){
					echo "開始搜尋";
					$_SESSION['calorie']=1950;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==2){
					echo "開始搜尋";
					$_SESSION['calorie']=2150;
					header('refresh:1 ; url=sort.php');
				}
				else{
					echo"資料錯誤 請重新輸入";
					header('refresh:3 ; url=calorie.html');
				}
			}
			else if(($age>=31)&&($age<=50)){
				if($workload==0){
					echo "開始搜尋";
					$_SESSION['calorie']=1450;
					header('refresh:1 ; url=sort.html');
					}
				else if($workload==1){
					echo "開始搜尋";
					$_SESSION['calorie']=1900;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==2){
					echo "開始搜尋";
					$_SESSION['calorie']=2100;
					header('refresh:1 ; url=sort.php');
					}
				else{
					echo"資料錯誤 請重新輸入";
					header('refresh:3 ; url=calorie.html');}
			}
			else if(($age>=51)&&($age<=70)){
				if($workload==0){
					echo "開始搜尋";
					$_SESSION['calorie']=1400;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==1){
					echo "開始搜尋";
					$_SESSION['calorie']=1800;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==2){
					echo "開始搜尋";
					$_SESSION['calorie']=2000;
					header('refresh:1 ; url=sort.php');
					}
				else{
					echo"資料錯誤 請重新輸入";
					header('refresh:3 ; url=calorie.html');}
			}
			else if($age>=71){
				if($workload==0){
					echo "開始搜尋";
					$_SESSION['calorie']=1300;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==1){
					echo "開始搜尋";
					$_SESSION['calorie']=1700;
					header('refresh:1 ; url=sort.php');
					}
				else if($workload==2){
					echo"資料錯誤 請重新輸入";
					header('refresh:3 ; url=calorie.html');
				}
				else{
					echo"資料錯誤 請重新輸入";
					header('refresh:3 ; url=calorie.html');}
			}
			else{
				echo"資料錯誤 請重新輸入";
				header('refresh:3 ; url=calorie.html');
			}
	}

?>