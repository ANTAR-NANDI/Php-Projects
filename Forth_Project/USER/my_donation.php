<?php
   session_start();
    if(isset($_GET['sign']) && $_GET['sign']=='out')
	{
		//session_unset();
		session_destroy();
		header('Location:../index.php');
	}
   if(!isset($_SESSION['user_login']) and $_SESSION['user_login']!=1) {
      
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
		<label><input type="text" name="search"><br>
			<input type="submit" name="submit"></label>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="home.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="donate_blood.php">Donate Blood</a>
                  


		 	</li>
	<!-- Dropdown Who can Give Blood END -->

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="my_donation.php">My Donation</a>
                 

		 	</li>
			<li class="dropdown2">
		 		<a class="dropbtn2" href="change_pass.php">Reset Password</a>
                 

		 	</li>
<!-- Dropdown2 END -->

<!-- Dropdown3 start -->
		 	<li class="dropdown3">
		 		<a class="dropbtn3" href="../contact.php">Contact US</a>
               
		 	</li>
<!-- Dropdown3 End -->

		 	<li><a href="#">About Us</a></li>
		 	<!--<li><a href="?sign=out">Logout</a></li>-->
		 </ul>
	</div>
  </body>
</html>

<?php
  
	   include("../connection.php");
       $sql="select patient_name,patient_number,donation_date,donation_place from donate_blood;";
	   $result=$conn->query($sql);
	   echo "<div class='po'><table align:'center' border='4' style='border-collapse:collapse;'></div>";
	   echo "<tr><th>Patient Name</th><th>Patient Number</th><th>Donation Date</th><th>PLACE</th></tr>";
	   while($row=$result->fetch_assoc())
	   {
		   $patient_name=$row['patient_name'];
		   $patient_number=$row['patient_number'];
		   $donation_date=$row['donation_date'];
		   $donation_place=$row['donation_place'];
		    
		   echo "<tr><td>$patient_name</td><td>$patient_number</td><td>$donation_date</td><td> $donation_place</td></tr>";
	   }
	   echo "</table>";
?>

















