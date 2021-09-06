<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>ADMIN PANEL</title> 
<link rel="stylesheet" href="who_can_give_blood.css">
</head>
<body>
<div class="header">
	<img src="images/logo.png">
	<h1>Blood Donation</h1>
	<div class="sign">
		<a href="login.php">Log in</a>
		<img src="images/sign_logo.png">
	</div>
	<div class="search">
		<!--<input type="submit" value="Search" name="search"></label>-->
			
			<form action="who_can_give_blood.php" method="post">
			<input type="text" name="blood" placeholder="Search Blood Here"><br>
			<input type="submit" name="submit" value="submit" >
		</form>
	</div>
</div>
	<div class="nav-bar">
		 <ul>
		 	<li><a href="index.php">Home</a></li>
<!-- DropDown Who can Give Blood start
		 	
			-->
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

<!-- Dropdown3 start -->
		 	<li class="dropdown3">
		 		<a class="dropbtn3" href="contact.php">Contact US</a>
               
		 	</li>
<!-- Dropdown3 End -->

		 	<li><a href="#">About Us</a></li>
		 </ul>
	</div>
	
	   	  <?php
   if(isset($_POST['submit'])){
	   $blood_group=$_POST['blood'];
	   include("connection.php");
       $sql="select name,contact,adress from donor_registration where blood_group='$blood_group';";
	   $result=$conn->query($sql);
	   echo "<table align:'center' border='4'style='border-collapse:collapse;'>";
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
	
	  <div class="body">
	       <h3>Can I Give Blood ?</h3>
		   <br>
		   <div class="para">
		        Sometimes it is not possible for you to give blood, or we may have to ask 
		   you to wait for a period of time before donating again. To save donors from wasted 
		   time and wasted journeys, this page addresses some of the most common questions about eligibility.
		   </div>
		   
		   <br>
		   
		   <div class="para">
		        If you have an existing medical condition, or have a question about
				your eligibility to give blood, you should check the health & eligibility and travel
				section before you book an appointment. Remember, if you ever need to cancel a donation 
				appointment we ask that you give us 3 days' notice so that we can offer your appointment to another donor. You can easily cancel or 
				reschedule your existing appointments by signing in to your online account or using the NHSGiveBlood app.
		   </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I donate if I feel ill, have a chesty cough, a cold sore or am coming down with a cold?</h4>
			If you are feeling under the weather with any of these things it’s best that you wait until you feel better
			before you give blood. Use our health & eligibility section to find out more.
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I donate blood if I am taking antibiotics or have an infection</h4>
			You must be completely healed or recovered from any infection for at least 14 days before you give blood. If you are taking antibiotics you may need to wait a period of time after your last tablet. Please
			follow our advice about donating after an infection. Please also see our advice about donating after antibiotics
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I donate if I am pregnant, or have recently been pregnant?</h4>
			During your pregnancy, you are not able to give blood. If you had a blood transfusion during your pregnancy or at delivery then you will 
			not be able to become a blood donor. Please follow our advice about giving blood during and after pregnancy.
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I give blood if I am receiving medical treatment or taking medication?</h4>
			We’ll need to check that you can donate. Whether or not you can donate will depend on the medication you are receiving as well as the condition for which you are being treated. 
			Please search for your condition or medication in our health & eligibility section.
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I give blood if I have been to the dentist or received dental treatment?</h4>
			   Simple fillings and check ups are usually ok after 24 hours. However, some treatments will mean a longer deferral. 
			   Please follow our advice about giving blood after dental treatment.
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I give blood if I have been travelling outside the UK?</h4>
			Travel to some parts of the world can affect your ability to donate blood. Search for your destination in our
			travel section to see if you can donate now or have to wait for a period of time.
           </div>
		   
		   <br>
		   
		   <div class="para">
		    <h4>Can I give blood if I have a heart condition?</h4>
			   We will need to have more information to know if you can give blood. It will depend 
			   on your specific heart condition. Please see our advice for giving blood with a heart condition. 
           </div>
		   
		   <br>
		   
		  <div class="para">
		    <h4>Can I donate if I have got a tattoo or a body piercing?</h4>
			  If you had this done recently you may have to wait before you can donate again. Please follow 
			  our advice about giving blood after a tattoo or getting your body pierced. 
           </div>
		   
		   <br>
		   <div class="para">
		    <h4>Can I give blood if I have had cancer?</h4>
			    Our advice depends on the type of cancer. Please search for the relevant
				cancer in our health & eligibility section.
           </div>
		   <br>
		   
		   <hr>
		  
	  </div>




	</body>
</html>



