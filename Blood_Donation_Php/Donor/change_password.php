
<?php
   session_start();
   if($_SESSION['login_status']!="loged in" and ! isset($_SESSION['email']) )
    header("Location:../User/signin.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
  $_SESSION['login_status']="loged out";
  unset($_SESSION['email']);
   header("Location:../User/signin.php");    
   }
?>




<!doctype html>
<html lang="en">
  <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <title>Blood Donation System</title>

          <!-- Bootstrap core CSS -->
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
               <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
              


          <!----Bootstrap css end-->
  </head>

  <body>
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="../Img/logo.png" width="58px" height="45px">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="   navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="../User/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../User/alldonorslist.php">All Donor List</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Donors by Group
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../User/donorsbygroup.php">A+</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">B+</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">A-</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">O+</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">AB+</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">AB-</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">O-</a>
                    <a class="dropdown-item" href="../User/donorsbygroup.php">B-</a>
                    
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../User/district.php">Donors by District</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="../User/allbloodrequest.php">All Blood Request List</a>
                </li>
               
                
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    About Blood
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../User/whydonateblood.php">Why Donate Blood</a>
                    <a class="dropdown-item" href="#../User/eligibility.php">Eligibity to Donate Blood</a>
                    <a class="dropdown-item" href="../User/tips.php">Tips for Successful Donation</a>
                    <a class="dropdown-item" href="../User/tips.php">What happened to donate blood</a>
                   
                    
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../User/request.php" >Request for Blood</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="?sign=out">Sign Out</a>
                </li>

              </ul>
              
            </div>
          </nav>





 <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center">Change Password</h3>
      </div>
        <div class="card-body">
         
           <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color: blue">Donors Area</h5>
       <h4>Welcome </h4><?php 
       $name=$_SESSION['name'];

         echo "<h2>$name</h2>";
        ?>
        <br>
        <table style="border: 1px solid green">
          <tr>
            <td style="border: 2px solid #e6e6e6"><a href="home.php">View Profile</a></td>
          </tr>
          <br>
           <td style="border: 2px solid #e6e6e6"><a href="editprofile.php">Edit  Profile</a></td>
             
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="change_password.php">Change Password</a></td>
             
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="change_image.php">Change Profile Photo</a></td>
             
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="addadonation.php">Add a Donation</a></td>
             
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="donationhistory.php">Donation History</a></td>
             
          </tr>
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="edit_request.php">Edit Request</a></td>
             
          </tr>
           <td style="border: 2px solid #e6e6e6"><a href="privacy.php">Privacy Option</a></td>
             
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Change Password</h5>
        <form method="POST" action="change_password.php">
                     <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-4 col-form-label">Enter Old Password</label>
                          <div class="col-sm-6">
                            <input type="password" name="old_pass" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                        

                         <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-4 col-form-label">Enter New Password</label>
                          <div class="col-sm-6">
                            <input type="password" name="new_pass" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>

                         <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-4 col-form-label">Re-Enter Password</label>
                          <div class="col-sm-6">
                            <input type="password" name="re_pass" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>

                        <button class="btn btn-primary" name="submit" type="submit" value="submit">Change Password</button>
       </form>
                       
                   
      </div>

    </div>


   <?php
     if(isset($_POST['submit']))
     {
      global $pass;
  
    $old_pass=$_POST['old_pass'];
  $new_pass=$_POST['new_pass'];
  $re_pass=$_POST['re_pass'];
  $email=$_SESSION['email'];
  
     include("../Db/connection.php"); 
   
  $sql="select Passsword from signup where Email='$email' and Passsword='$old_pass'";
          $r= $conn -> query($sql);
           // $pass="";
            while($row=$r->fetch_assoc()) 
             
            {    
              $pass=$row['Passsword'];
            }


          // $result = mysql_query($sql);
         //  while($row=mysql_fetch_assoc($result)){ 
            // $pass=$row['Password'];
          //}



          if($new_pass!=$re_pass){
            echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Password Not Matched!</h4>
</div>';
          }
          else if($old_pass==$pass) 
          {
           $sql="UPDATE signup set Passsword='$new_pass' where Email='$email' and Passsword='$old_pass';";
          $r= $conn -> query($sql);
          

                        if($r)
                        {
                                       echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">succhess</h4>
              </div>';
                        }
                        else
                        {

                          echo '<div  class="alert alert-success" role="alert">
                <h4 class="alert-heading"  >New Password Mitmatched!</h4>
              </div>';
                        }
                        }
          else
          {        
            echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Old Password Not Matched!</h4>
</div>';
          }
     }
?>












































  </div>
</div> 
           
        </div>
    </div>
</div>






































  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="container">
 <div class="card">
      <div class="card-body">
        <footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://http://www.blooddonorsbd.com">bloododnorsbd.com</a>
  </div>
  <!-- Copyright -->

</footer>
</div>
</div>
  <!-- Copyright -->

</footer>
  </body>
</html>
