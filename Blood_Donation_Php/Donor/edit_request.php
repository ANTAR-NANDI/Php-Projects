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
                    <a class="dropdown-item" href="../User/eligibility.php">Eligibity to Donate Blood</a>
                    <a class="dropdown-item" href="../User/tips.php">Tips for Successful Donation</a>
                    <a class="dropdown-item" href="../User/tips.php">What happened to donate blood</a>
                   
                    
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="request.php" >Request for Blood</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="?sign=out">Sign Out</a>
                </li>

              </ul>
              
            </div>
          </nav>

</div>



 <div class="container">
    <div class="card">
            <div class="card-header">
              <h3 class="text-center">My Blood Request</h3>
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
                   <td style="border: 2px solid #e6e6e6"><a href="edit_request.php">Edit Request</a></td>
                     
                  </tr>
                  </tr>
                   <td style="border: 2px solid #e6e6e6"><a href="privacy.php">Privacy Option</a></td>
                     
                  </tr>
                </table>
      </div>
    </div>
  </div>
<div class="col-md-8">
 <?php
    include("../Db/connection.php");
        $id=$_SESSION['id'];
        // echo "$id";
        // exit();
                $sql="SELECT Name,request_id,Requested_Blood,Amount,Patient_Location,District,Date,More_Message,Contact FROM request where id=$id";
    $r = $conn->query($sql);
  while($row=mysqli_fetch_array($r)){
              $name= $row['Name'];
               $Requested_Blood= $row['Requested_Blood'];
              $Amount= $row['Amount'];
              $Patient_Location= $row['Patient_Location'];
              $district= $row['District'];
              $Date= $row['Date'];
              $More_Message= $row['More_Message'];
              $Contact= $row['Contact'];
              $request_id=$row['request_id'];
     // echo $request_id;

        
   
 ?> 
  
        

                    <div class="col-md-12 mt-3">
                      <div class="card">
                        <div class="card-body">
                          <pre class="text-uppercase">
Blood Group: <?php echo $Requested_Blood; ?><?php print("\n"); ?>
Amount: <?php echo $Amount; ?> <?php print("\n"); ?>
Donation Date: <?php echo $Date; ?>(yyyy/mm/dd)<?php print("\n"); ?>
Request from (Name): <?php echo $name; ?><?php print("\n"); ?>
Patient's Location: <?php echo $Patient_Location; ?><?php print("\n"); ?>
District: <?php echo $district; ?><?php print("\n"); ?>
Contact Number: <?php echo $Contact; ?><?php print("\n");?>
More Message: <?php echo $More_Message; ?><br>
<h4><a href="edit.php?request_id=<?php  echo $request_id;?>">Edit</a></h4><a  href="delete.php?request_id=<?php  echo $request_id;?>">Delete</a></h4>


                          </pre>
                        </div>
                      </div>
                    </div>
                     <?php 
      
    }
 ?>

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
