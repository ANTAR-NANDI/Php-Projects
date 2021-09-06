<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Blood Doantion Management</title> 
<link rel="stylesheet" href="donate_blood.css">
</head>
<body>




<div class="header">
	<img src="images/logo.png">
	<h1>Blood Donation</h1>
	<div class="sign">
		<a href="login.php">Sign In</a>
		<img src="images/sign_logo.png">
	</div>
	<div class="search">
		<label><input type="text" name="search" placeholder="Search Blood Here"><br>
			<input type="submit" name=""></label>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="../index.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="donate_blood.php">Donate Blood</a>
                  


		 	</li>
	<!-- Dropdown Who can Give Blood END -->

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="reset.php">My Doanation</a>
                 

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

		 	<li><a href="../contact.php">About Us</a></li>
		 	<!--<li><a href="?sign=out">Logout</a></li>-->
		 </ul>
	</div>



<form class="box" action="donate_blood.php" method="post">

<h3>Donor Sign_up </h3>
<input type="text" name="donor_id" placeholder="Donor ID">
<!--<input type="text" name="donation_no" placeholder="Donation No">-->
<input type="text" name="patient_name" placeholder="patient_name">
<!--<button style="border-radius:30px">Blood Group : </button>
  <select id="select" name="blood">
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
			 <option value="AB-">AB-</option>
			  <option value="B-">B-</option>
			   <option value="A-">A-</option>
        </select>
		-->
<input type="text" name="patient_number" placeholder="Patient_Number">
<input type="date" name="donation_date" placeholder="Donation_Date">
<input type="text" name="donation_time" placeholder="Donation_Time">
<input type="text" name="donation_place" placeholder="Donation_Place">
<input type="submit" name="Register" value="Register">
</form>
</body>
</html>



<?php
if(isset($_POST['Register']))
{
	$donor_id=$_POST['donor_id'];
	$donation_no=$_POST['donation_no'];
	$patient_name=$_POST['patient_name'];
	$patient_number=$_POST['patient_number'];
	$donation_date=$_POST['donation_date'];
	$donation_time=$_POST['donation_time'];
	$donation_place=$_POST['donation_place'];
	
	include("connection.php");
    $sql="insert into donate_blood(donor_id,donation_no,patient_name,patient_number,donation_date,donation_time,donation_place)
	              VALUES($donor_id,$donation_no,'$patient_name',$patient_number,'$donation_date','$donation_time','$donation_place')";
	$r=$conn->query($sql);
	if($r)
	{
		echo "<div style='background-color:green;color:white;'>Successfully Registered!</div>";
		
	}
	else{
		echo "<div style='background-color:red;color:white;'>CONNECTION ERROR!!</div>";
	}
}
?>