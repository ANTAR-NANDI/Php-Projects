 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
     <div class="header">
	<img src="images/logo.png">
	<h1>Blood Donation</h1>
	<div class="sign">
		<a href="login.php">Sign in</a>
		<img src="images/sign_logo.png">
	</div>
	<div class="search">
		
			<!--<input type="submit" value="Search" name="search"></label>-->
			
			<form action="index.php" method="post">
			<input type="text" name="blood" placeholder="Search Blood Here"><br>
			<input type="submit" name="submit" value="submit" >
		</form>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="index.php">Home</a></li>
<!-- DropDown Who can Give Blood start-->
		 	<li class="dropdown1">
		 		<a class="dropbtn1" href="#">Who can Give Blood</a>
                  <div class="dropdown1-content">
                  	<a href="who_can_give_blood.php">Can I give Blood</a>
                  	<a href="#">Health& Eligibility</a>
                  	<a href="#">Donors& Disability</a>

                  </div>


		 	</li>
	<!-- Dropdown Who can Give Blood END -->

		 	<li class="dropdown2">
		 		<a class="dropbtn2" href="signup.php">Register as Donor</a>
                  

		 	</li>
<!-- Dropdown2 END -->

<!-- Dropdown3 start
		 	<li class="dropdown3">
		 		<a class="dropbtn3" href="donate_blood.php">Donate Blood</a>
				 -->
               
<!-- Dropdown3 End -->

		 	<li><a href="contact1.php">Contact US</a></li>
		 	<li><a href="#">About Us</a></li>
		 </ul>
	</div>



	<!-- Slider Start -->

<div class="slideshow-container">
	
	<!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/slide_1.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/slide_2.jpg">
  </div>
	
	<div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/slide_3.jpg">
  </div>

</div>

<!-- Slider End -->

</div>
   
<!--<div class="body1">
      <form action="submit.php" method="post">
			<input type="submit" name="submit" value="submit" >
		</form>
	
	-->
	<div class="po">
<?php
   if(isset($_POST['submit'])){
	  $blood_group=$_POST['blood'];
	   include("connection.php");
      $sql="select name,contact,adress,donation_date from donor_registration r,donate_blood d where blood_group='$blood_group' AND d.donor_id=r.id;";
	   $sql1="select name,contact,adress from donor_registration where blood_group='$blood_group';";
	   $r=$conn->query($sql1);
	   $result=$conn->query($sql);
	   echo "<div class='po'><table align:'center' border='4' style='border-collapse:collapse;'></div>";
	   echo "<tr><th>Name</th><th>Contact</th><th>Address</th></tr>";
	 if($result -> num_rows > 0)
	 {
		 
		 
     
	  while($row=$result->fetch_assoc())
	   {
		   $name=$row['name'];
		   $contact=$row['contact'];
		    $adress=$row['adress'];
			$donated=strtotime($row['donation_date']);
			$current=strtotime(date("d-m-Y"));
			$diff= floor(($current - $donated)/(60*60*24));
              if($diff>90)
                   $check="Yes";
              else
                    $check="No";	
            if($check!="No")				
		   echo "<tr><td>$name</td><td>$contact</td><td>$adress</td></tr>";
	   }
	 }
	 elseif($r-> num_rows > 0)
	 {
		 while($row=$r->fetch_assoc())
	   {
		   $name=$row['name'];
		   $contact=$row['contact'];
		    $adress=$row['adress'];
		   echo "<tr><td>$name</td><td>$contact</td><td>$adress</td></tr>";
	   }
	 }
		
	   echo "</table>";
   }
     
  
  
?>
</div>




<script type="text/javascript" src="myscript.js"></script>
</body>
</html>