<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Blood Doantion Management</title> 
<link rel="stylesheet" href="signup.css">
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
		
			<!--<input type="submit" value="Search" name="search"></label>-->
			
			<form action="signup.php" method="post">
			<input type="text" name="blood" placeholder="Search Blood Here"><br>
			<input type="submit" name="submit1" value="submit" >
		</form>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="index.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="who_can_give_blood.php">Who can Give Blood</a>
                  <div class="dropdown1-content">
                  	<a href="who_can_give_blood.php">"Can I give Blood</a>
                  	<a href="#">Health& Eligibility</a>
                  	<a href="#">Donors& Disability</a>

                  </div>


		 	</li>
	<!-- Dropdown Who can Give Blood END

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="#">The donation Process</a>
				 -->
                  

		 	</li>
<!-- Dropdown2 END -->

<!-- Dropdown3 start -->
		 	<li class="dropdown3">
		 		<a class="dropbtn3" href="signup.php">Register as Donor</a>
                
		 	</li>
<!-- Dropdown3 End -->

		 	<li><a href="contact.php">Contact US</a></li>
		 	<li><a href="#">About Us</a></li>
		 </ul>
	</div>



<form class="box" action="signup.php" method="post">

<h3>Donor Sign_up </h3>
<input type="text" name="name" placeholder="Name">
<input type="text" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button style="border-radius:30px">Blood Group : </button>
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
<input type="text" name="contact" placeholder="contact">
<input type="text" name="adress" placeholder="adress">
<input type="submit" name="submit" value="Register">
</form>

</body>
</html>



<?php
if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$blood=$_POST['blood'];
	$contact=$_POST['contact'];
	$add=$_POST['adress'];
	include("connection.php");
	$sql="insert into donor_registration (name,email,password,blood_group,contact,adress) VALUES('$name','$email','$pass','$blood',$contact,'$add')";

	
	$r=$conn->query($sql);
	if($r)
	{
		echo "<div style='background-color:#383dd6;color:white;margin-left:20px;margin-top:50px;width:250px;font-size:20px;height:70px'>Successfully Registered!</div>";
		
	}
	else{
		echo "<div style='background-color:red;color:white;'>CONNECTION ERROR!!</div>";
	}
}
?>

<!-- <?php
   if(isset($_POST['submit1'])){
	  $blood_group=$_POST['blood'];
	   include("connection.php");
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
     
  
  
?> -->