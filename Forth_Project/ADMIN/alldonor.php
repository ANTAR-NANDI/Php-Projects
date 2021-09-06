<?php
   session_start();
    if(isset($_GET['sign']) && $_GET['sign']=='out')
	{
		session_destroy();
		header('Location:../index.php');
	}
   
   if(!isset($_SESSION['admin_login']) and $_SESSION['admin_login']!=1) {
	//$_SESSION['admin_login_status']="loged out";
	//unset($_SESSION['id']);
      
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
			<form action="change_pass.php" method="post">
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
	
	
	
	</body>
	</html>
	
<?php
   
	   include("../connection.php");
       $sql="SELECT donor_id,COUNT(donor_id) as tot_id FROM stock GROUP by donor_id";
	   $result=$conn->query($sql);
	   echo "<div class='po'><table align:'center' border='4' style='border-collapse:collapse;'></div>";
	   echo "<tr><th>id</th><th>total</th></tr>";
	   while($row=$result->fetch_assoc())
	   {
		   $donor_id=$row['donor_id'];
		   $tot_id=$row['tot_id'];
		   echo "<tr><td>$donor_id</td><td>$tot_id</td></tr>";
	   }
	   echo "</table>";
?>
	
