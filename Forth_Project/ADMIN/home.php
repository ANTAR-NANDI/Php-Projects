<?php
   session_start();
    if(isset($_GET['sign']) && $_GET['sign']=='out')
	{
		session_destroy();
		header('Location:../index.php');
	}
   
   if(!isset($_SESSION['admin_login']) and $_SESSION['admin_login']!=1) {
	//$_SESSION['admin_login_status']="loged out";
	unset($_SESSION['id']);
      
   header("Location:../index.php");    
   }
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ADMIN PANEL</title> 
<link rel="stylesheet" href="home.css">
</head>
<body>
<div class="header">
	<img src="images/logo.png">
	<h1>Blood Donation</h1>
	<div class="sign">
		<a href="?sign=out">Logout</a>
		<img src="images/sign_logo.png">
		
	</div>
	<div class="search">
		<!--<label><input type="text" name="search"><br>
			<input type="submit" name=""></label>-->
			<form action="home.php" method="post">
			<input type="text" name="blood" placeholder="Search Blood Here"><br>
			<input type="submit" name="submit" value="submit" >
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="home.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="alldonor.php">All Donors</a>
                  


		 	</li>
	<!-- Dropdown Who can Give Blood END -->

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="#">Today's History</a>
                 

		 	</li>
<!-- Dropdown2 END -->

<!-- Dropdown3 start -->
		 	<li class="dropdown3">
		 		<a class="dropbtn3" href="contact.php">Contact US</a>
               
		 	</li>
<!-- Dropdown3 End -->

		 	<li><a href="#">About Us</a></li>
			<li><a href="change_pass.php">Reset Password</a></li>
			
			<li><a href="drop.php">drop</a></li>
		 </ul>
	</div>
	
	
	
<?php
   if(isset($_POST['submit'])){
	  $blood_group=$_POST['blood'];
	   include("../connection.php");
       $sql="select name,contact,adress from donor_registration where blood_group='$blood_group';";
	   $result=$conn->query($sql);
	   echo "<div class='po'><table align:'center' border='4' style='border-collapse:collapse;'></div>";
	   echo "<tr><th>Name</th><th>Contact</th><th>Address</th></tr>";
	   while($row=$result->fetch_assoc())
	   {
		   $name=$row['name'];
		   $contact=$row['contact'];
		    $adress=$row['adress'];
		   echo "<tr><td>$name</td><td>$contact</td><td>$adress</td></tr>";
	   }
	   echo "</table>";
   }
     
  
  
?>
	</body>
	</html>
