<?php
session_start();
?>
       
<!doctype html>
<html lang="en">
  <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="Css/owl.carousel.css" />
  <link rel="stylesheet" href="Css/owl.theme.default.css"/>
          <title>Blood Donation System</title>

          <!-- Bootstrap core CSS -->
               <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
               <link rel="stylesheet" href="../Css/style.css">
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
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="alldonorslist.php">All Donor List</a>
                </li>
                <li class="nav-item dropdown"  >
                  <a class="nav-link dropdown-toggle" href="#" name="blood" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
                    Donors by Group
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item" href="donorsbygroup.php?blood=1">A+</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=2" >B+</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=6">A-</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=4">O+</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=3">AB+</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=5">AB-</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=8">O-</a>
                    <a class="dropdown-item" href="donorsbygroup.php?blood=7">B-</a>
                    
                  </div>
                
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="district.php">Donors by District</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="allbloodrequest.php">All Blood Request List</a>
                </li>
               
                
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    About Blood
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="whydonateblood.php">Why Donate Blood</a>
                    <a class="dropdown-item" href="eligibility.php">Eligibity to Donate Blood</a>
                    <a class="dropdown-item" href="tips.php">Tips for Successful Donation</a>
                    <a class="dropdown-item" href="tips.php">What happened to donate blood</a>
                   
                    
                  </div>
                </li>
               <li class="nav-item">
                  <a class="nav-link" href="signin.php">Signin</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link" href="bank.php">Bank</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="../Donor/request.php?a=1" >r for b</a>
                </li>
              </ul>
              
            </div>
          </nav>
        </div>
      </div>




      


