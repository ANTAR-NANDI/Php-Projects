<html>
<head>
<title>data retrive</title>
  <link href="index.css" rel="stylesheet">
<head>
<body>
       <form action="submit.php" method="post">
			<input type="submit" name="submit" value="submit" >
		</form>
</body>
<?php
   if(isset($_POST['submit'])){
	   include("connection.php");
       $sql="select name,email,blood_group,contact,adress from donor_registration";
	   $result=$conn->query($sql);
	   echo "<table align:'center' border='4' style='border-collapse:collapse;'>";
	   echo "<tr><th>Name</th><th>Email</th><th>Blood_Group</th><th>Contact</th><th>Address</th></tr>";
	   while($row=$result->fetch_assoc())
	   {
		   $name=$row['name'];
		   $email=$row['email'];
		   $blood_group=$row['blood_group'];
		   $contact=$row['contact'];
		   $adress=$row['adress'];
		   echo "<tr><td>$name</td><td>$email</td><td>$blood_group</td><td>$contact</td><td>$adress</td></tr>";
	   }
	   echo "</table>";
   }
     
  
  
?>
</html>