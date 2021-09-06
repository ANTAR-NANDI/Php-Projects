<?php
session_start();

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
                  <a class="nav-link" href="../User/request.php" >Request for Blood</a>
                </li>
                  <li class="nav-item">
                  <a class="nav-link" href="?sign=out">Sign Out</a>
                </li>

              </ul>
              
            </div>
          </nav>






  <?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    }
      include '../Db/connection.php';
 //     $email=$_SESSION['$email'];
     // $sql="SELECT * FROM signup WHERE signup.id=$id";
      $sql="SELECT Name,Gender,Image,Age,Email,blood_group,District,Mobile,Eligibility FROM signup,blood_group
       WHERE signup.Blood=blood_group.id and signup.id=$id";
     // echo "$sql";
      $result = $conn->query($sql);
      while ($row=$result->fetch_assoc()) {
        $data = $row;
      }
      extract($data);



  ?>
  <div class="container">
    <div class="card">
      
       <div class="card-body text-center">
        <h5 class="card-title">Your Profile</h5><hr>
             <div class="row">
               <div class="col-md-4"></div>
                <div class="col-md-4">  <img src="../uploaded_images/<?php echo $Image ?>" width="120px" height="110px"><br> </div>
             </div>
         <hr>
          <div class="row">
               <div class="col-md-4"><h3>Name : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Name ?></h3> </div>
             </div>
         <hr>
           <div class="row">
               <div class="col-md-4"><h3>Gender : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Gender ?></h3> </div>
             </div>
         <hr>
             <div class="row">
               <div class="col-md-4"><h3>Age : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Age ?></h3> </div>
             </div>
         <hr>
          <div class="row">
               <div class="col-md-4"><h3>Email : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Email ?></h3> </div>
             </div>
         <hr>
        
          <div class="row">
               <div class="col-md-4"><h3>Blood Group : </h3></div>
                <div class="col-md-4"> <h3><?php echo $blood_group ?></h3> </div>
             </div>
         <hr>
           <div class="row">
               <div class="col-md-4"><h3>District : </h3></div>
                <div class="col-md-4"> <h3><?php echo $District ?></h3> </div>
             </div>
         <hr>
          <div class="row">
               <div class="col-md-4"><h3>Contact : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Mobile ?></h3> </div>
             </div>
         <hr>
          <div class="row">
               <div class="col-md-4"><h3>Eligibility : </h3></div>
                <div class="col-md-4"> <h3><?php echo $Eligibility ?></h3> </div>
             </div>
         



               
      
    </div>
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
