<?php include '../include/include.php';?>
<div class="container">
<div class="card">
  <div class="card-header">
    <h3 style="color: green">All Donors List</h3>
    <h3 style="color: green;float: right"><a class="nav-link" href="signup.php">Click to be a Donor</a></h3> 

  </div>
  
  <div class="card-body">
      <div class="table-responsive">          
  <table class="table">
    <thead style="background-color: #e6e6e6">
      <tr>
        
        <th>Name</th>
        <th>Blood Group</th>
        <th>Age</th>
        <th>District</th>
        <th>Contact</th>
         <th>Donor Status</th>
        <th>Profile</th>
      </tr>
    </thead>    
 <?php  
    include("../Db/connection.php");
               $sql="SELECT Eligibility from signup;";
      $sql="select Name,Email,Blood,Gender,District,Age,Mobile,Eligibility,blood_group,signup.id from signup,blood_group WHERE signup.Blood=blood_group.id;";
    $r = $conn->query($sql);
  while($row=mysqli_fetch_array($r)){
              $name= $row['Name'];
               $email= $row['Email'];
              $blood= $row['blood_group'];
              $age= $row['Age'];
              $district= $row['District'];
              $mobile= $row['Mobile'];
              $gender= $row['Gender'];
              $eligibility= $row['Eligibility'];
                $id=$row['id'];

        
   
 ?> 
 




    <tbody>
      <tr>
        <td><?php echo $name; ?></td>
         <td><?php echo $blood; ?></td>
          <td><?php echo $age; ?></td>
           <td><?php echo $district; ?></td>
            <td><?php echo $mobile; ?></td>

            <td>
              <?php
            if($eligibility=="Yes")

             echo '<img src="../Img/right.jpg" width="60px" height="40px"/>';
             else
              echo '<img src="../Img/wrong.png" width="60px" height="40px"/>';
           ?>
           </td>   
              <td><a href="../User_Profile/view_profile.php?id=<?php echo $id?>">View Profile</a></td>
       
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



</div>
</body>
</html>