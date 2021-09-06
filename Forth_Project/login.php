<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title> 
<link rel="stylesheet" href="login.css">
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
		<label><input type="text" name="search"><br>
			<input type="submit" name=""></label>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="index.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="who_can_give_blood.php">Who can Give Blood</a>
                  <div class="dropdown1-content">
                  	<a href="who_can_give_blood.php">Can I give Blood</a>
                  	<a href="#">Health& Eligibility</a>
                  	<a href="#">Donors& Disability</a>

                  </div>


		 	</li>
	<!-- Dropdown Who can Give Blood END -->

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="signup.php">Register as a donor</a>
                  

		 	</li>
<!-- Dropdown2 END -->

<!-- Dropdown3 start -->
		 	<!--<li class="dropdown3">
		 		<a class="dropbtn3" href="donate_blood.php">Donate Blood</a>
               <!-- <div class="dropdown3-content">
                	<a href="#">Schedule an appointment</a>
                	<a href="#">Manage Existing Appointment</a>
                	<a href="#">view my Donation History</a>
                </div>
				
		 	</li>
			-->
<!-- Dropdown3 End -->

		 	<li><a href="contact.php">Contact US</a></li>
		 	<li><a href="#">About Us</a></li>
		 </ul>
	</div>

   <div class="diva">
   <form class="box" action="login.php" method="post">

<h1>Login</h1>
<input type="text" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<input type="submit" name="submit" value="login">


</form>
</div>
   
   <div class="footer">
       
   </div>
   

</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
	include("connection.php");
	$sql1="select email,password from donor_registration where email='$email' and password='$pass';";
	$sql2="select email,password from admin where email='$email' and password='$pass';";
	$r1=$conn->query($sql1);
	$r2=$conn->query($sql2);
	
	if($r1->num_rows > 0)
	{
		$_SESSION['user_login']=1;
		$_SESSION['email']=$email;
     //   $_SESSION['user_login_status']="loged in";
		header("Location: USER/home.php");
	}
	else if($r2->num_rows > 0)
	{
		$_SESSION['admin_login']=1;
			$_SESSION['email']=$email;
    //    $_SESSION['admin_login_status']="loged in";
		header("Location:ADMIN/home.php");
	}
	else{
		echo "Wrong Password!!";
	}
}
?>





