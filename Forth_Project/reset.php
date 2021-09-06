
<!DOCTYPE html>
<html>
<head>
	<title>reset</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h3>old password : </h3>
<input type="text" name="old" placeholder="Name"><br>
<h3>new password : </h3>
<input type="text" name="new" placeholder="Email"><br>
<h3>retype new  password : </h3>
<input type="password" name="renew" placeholder="Password"><br>
<form action="reset.php" method="post">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>



<?php
   session_start();
   if($_SESSION['customer_login_status']!="loged in" and ! isset($_SESSION['user_id']) )
    header("Location:../login.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['customer_login_status']="loged out";
	unset($_SESSION['user_id']);
   header("Location:../login.php");    
   }
?>

<?php
if(isset($_POST['submit'])){
	         $old=$_POST['old'];
			 $new=$_POST['new'];
			 $renew=$_POST['renew'];
			 include("connection.php");
			 if($new!=$renew)
			 {
				 echo "Password doesnt mattched!!!!!";
			 }
			 else
			 {
				$sql="Update donor_registration set password='$new' 
				where id='user_id' and password='$old'"; 
				$r=$conn->query($sql);
					if($r)
					{
						echo "<div style='background-color:green;color:white;width:150px;height:100px'>Successfully Registered!</div>";
						
					}
					else{
						echo "<div style='background-color:red;color:white;'>CONNECTION ERROR!!</div>";
					}
			 }
}
			 
?>


