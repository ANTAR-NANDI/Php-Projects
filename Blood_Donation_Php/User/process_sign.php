<?php
session_start();
?>
<?php
            include("../Db/connection.php");
          if(isset($_POST['submit']))
          {
          	$email=$_POST['email'];
          	//$password=mysqli_real_escape_string($conn, $_POST['pass']);
            $password=$_POST['password'];
         //   echo "$email"."$password";
          
            $sql="select * from signup where Email='$email' and Passsword='$password'";            
             $r = $conn-> query($sql);

           
          
             if($r->num_rows>0){
 

                while ($row=$r->fetch_assoc()) {
            $name=$row['Name'];
            $id=$row['id'];
          }
                  $_SESSION['email']=$email;
                  $_SESSION['id']=$id;//filter
                  
                  $_SESSION['login_status']="loged in";//logout
                  
                  $_SESSION['name']=$name;//
                 header("Location:../Donor/home.php");
                  // echo "<pre>";
                  // print_r($_SESSION);
                  // echo "</pre>";
             }
             else
             {
             	echo "Wrong Password";
             }

          }






     ?>