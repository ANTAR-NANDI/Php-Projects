<?php include '../include/include.php';?>

   


<!--------Slider Start---->



<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../Img/slide1.jpg"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Img/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../Img/slide3.jpg" alt="Third slide">
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="container">
<div class="card">
  <div class="card-header">
    <h3>Donors by Group</h3>
  </div>
  

<div class="card-body">
      <div class="row">
<?php
$i=0;
    include("../Db/connection.php");
    $sql="SELECT COUNT(blood_group) as b, blood_group,blood_group.id FROM signup,blood_group WHERE signup.Blood=blood_group.id GROUP BY blood_group";
    $r = $conn->query($sql);
    while($row=mysqli_fetch_array($r)){
        $blood_group= $row['blood_group'];
        $count = $row['b'];
        $id=$row['id'];

    ?> 
         <div class="col-md-3 mt-3">
            <button type="button"  class="btn btn-warning btn-lg"><a href="donorsbygroup.php?blood=<?php  echo $id;   ?>"><?php echo "$blood_group"."[$count]" ?></a>
            </button>
         </div>
    <?php 
      
    }
 ?>
 </div>
 
  </div>
             
 <div class="container">
    <div class="card">
      <div class="card-header">
        <h3>Our Latest Members</h3>
      </div>
        <div class="card-body">
         
            
            <div class="container">                                                                                   
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr style="background-color: #e6e6e6">
        <th>Name</th>
        <th>Blood_Group</th>
        <th>Age</th>
        <th>District</th>
        <th>Contact</th>
        <th>View Profile</th>
      </tr>
    </thead>
     <?php  
    include("../Db/connection.php");
               // $sql="SELECT DISTINCT Name,Email,Blood,Gender,District,Age,Mobile,Eligibility from signup;";
      $sql="
select Name,blood_group,District,Age,Mobile,signup.id from signup,blood_group WHERE signup.Blood=blood_group.id order by signup.id DESC LIMIT 6;";
    $r = $conn->query($sql);

  while($row=mysqli_fetch_array($r)){
              $name= $row['Name'];
               
              $blood= $row['blood_group'];
              $age= $row['Age'];
              $district= $row['District'];
              $mobile= $row['Mobile'];
              $id=$row['id'];
              

        
   
 ?> 
 




    <tbody>
      <tr>
        <td><?php echo $name; ?></td>
         <td><?php echo $blood; ?></td>
          <td><?php echo $age; ?></td>
           <td><?php echo $district; ?></td>
            <td><?php echo $mobile; ?></td>
          
            
             <td><a href="../User_Profile/view_profile.php?id=<?php echo $id?>">View Profile</a></td>
            <!--  <a class="dropdown-item" href="donorsbygroup.php?blood=1">A+</a> -->
       
      </tr>
     
    </tbody>
    <?php 
      
    }
 ?>
   
  </table>
  </div>
</div>
        </div>
    </div>
</div>

 <div class="container">
    <div class="card">
            <div class="card-header">
              <h3>Latest Blood Request</h3>
            </div>
        <div class="card-body">
         
           <div class="row">
                   <?php
    include("../Db/connection.php");
                $sql="SELECT Name,Requested_Blood,Amount,Patient_Location,District,Date,More_Message,Contact FROM request;";
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
 ?> 

                    <div class="col-md-4 mt-3">
                      <div class="card">
                        <div class="card-body">
                          <pre class="text-uppercase"  style="color: blue">
Blood Group: <?php echo $Requested_Blood; ?><?php print("\n"); ?>
Amount: <?php echo $Amount; ?> <?php print("\n"); ?>
Donation Date: <?php echo $Date; ?>(yyyy/mm/dd)<?php print("\n"); ?>
Request from (Name): <?php echo $name; ?><?php print("\n"); ?>
Patient's Location: <?php echo $Patient_Location; ?><?php print("\n"); ?>
District: <?php echo $district; ?><?php print("\n"); ?>
Contact Number: <?php echo $Contact; ?><?php print("\n"); ?>
More Message: <?php echo $More_Message; ?>

<br>
                          </pre>
                        </div>
                      </div>
                    </div>
                     <?php 
      
    }
 ?>

</div>
</div>





















<!------------------------------------------------------------------------- Footer ----------------------------------------------------------------------------->


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
  <!-- Footer Links -->

</div>



  </body>
</html>

