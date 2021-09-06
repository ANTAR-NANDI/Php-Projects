<?php
include('../connection.php');
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
	<title>
		Change Password
	</title>
   <link rel="stylesheet" href="home.css">
	<style type="text/css">
		.edit_pass input{
                 margin: 10px;
    border-radius: 5px;
    border: 1px solid #7198ff;
    padding: 7px;
		}
		.edit_pass{
	padding: 15px;
    display: inline-block;
    background-color: #c3b49a;
    border: 3px solid #15d7e0;
	margin-left:406px;
	margin-top:20px;
    border-radius: 10px;
		}
	</style>
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

		 	<li><a href="#">About Us</a></li>
		 	<!--<li><a href="?sign=out">Logout</a></li>-->
		 </ul>
	</div>






      
    <div class="edit_pass">
       <form action="change_pass.php" method="post">
      	   Enter Old Password: <input type="text" name="pass"> <br>
      	   Enter New Password: <input type="text" name="new_pass"> <br>
      	   Re-Enter Password: <input type="text" name="re_pass"> <br>
      	   <input style="margin-left: 130px;" type="submit" value="Change Password" name="edit_pass">

      </form>	

    </div>
      
</body>
</html>

<?php
   if(isset($_POST['edit_pass']))
   {
          $old=$_POST['pass'];
          $new=$_POST['new_pass'];
          $re_pass=$_POST['re_pass'];
      
          $email=$_SESSION['email'];
         $sql="SELECT password FROM donor_registration WHERE email='$email';";
        // exit();
          $r= $conn -> query($sql);
            if($row=$r->fetch_assoc())
            {
             $pass=$row['password'];
            }
      // exit();
          if($pass!=$old)
            echo "Old Password Not Matched";
          elseif($new==$re_pass)
          {
           $sql="UPDATE donor_registration set password='$new' where email='$email' and password='$old' ;";
          $r= $conn -> query($sql);
          
		  if($r)
            echo "Successfully CHanged!";
          
          }
		  else
			  echo "New password Mismatch";
          
          
   }

?>