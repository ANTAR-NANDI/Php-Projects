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
		<label><input type="text" name="search"><br>
			<input type="submit" name=""></label>
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
		 		<a class="dropbtn3" href="#">Contact US</a>
               
		 	</li>
<!-- Dropdown3 End -->

		 	<li><a href="../about.php">About Us</a></li>
			<!--<li><a href="?sign=out">Logout</a></li>-->
			<li><a href="drop.php">drop</a></li>
		 </ul>
	</div>







<form action="drop.php" method="post" name="drop">
<table align="center">
<tr><td width="200px">user:</td><td>
<select name="admin">

<?php
 include("../connection.php");
 $sql="select id from donor_registration";
 
 //<!--$r=mysqli_query($sql);-->
  $r=$conn->query($sql);
 
 
 if($r->num_rows>0)
 {
    
    while($row=$r->fetch_assoc())
    {
        $id=$row['id'];
        echo "<option value='$id'>$id</option>";
    }
 }
 
 
?>

<tr><td width="200px"></td><td><input name="add" type="submit" value="Add"/></td></tr>

</table>
</form>
