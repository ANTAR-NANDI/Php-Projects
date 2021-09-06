<?php include '../include/include.php';?>
<div class="container">
<div class="card">
  <div class="card-header">
    <h3 style="color: green">All Donors List</h3>
    <h3 style="color: green;float: right"><a class="nav-link" href="signup.php" >Click to be a Donor</a></h3> 

  </div>
  
  <div class="card-body">
      <div class="table-responsive">          
  <table class="table">
    <thead style="background-color: #e6e6e6">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>District</th>
        <th>Contact</th>
          <th>Gender</th>
         <th>Donor Status</th>
        <th>Profile</th>
      </tr>
    </thead>
<tbody>
  

    <?php
       

    include("../Db/connection.php");
    if(isset($_GET['view'])){
    $view = $_GET['view'];
    }
   //echo "$view";
     $sql="SELECT Mobile,id, Name, Email, Blood, Gender, District, Age, Eligibility FROM signup WHERE District='$view'";
   //echo "$sql";
    $r = $conn->query($sql);
  while($row=mysqli_fetch_array($r)){
              $name= $row['Name'];
               $email= $row['Email'];
             $id= $row['id'];

              $age= $row['Age'];
              $district= $row['District'];
             $mobile= $row['Mobile'];
              $gender= $row['Gender'];
              $eligibility= $row['Eligibility'];
              
 ?> 





    
     
      <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $email; ?></td>
         <td><?php echo $age; ?></td>
          <td><?php echo $district; ?></td>
           <td><?php echo $mobile; ?></td>
            <td><?php echo $gender; ?></td>
            <td>
              <?php
            if($eligibility=="Yes")

             echo '<img src="../Img/right.jpg" width="60px" height="45px"/>';
             else
              echo '<img src="../Img/wrong.png" width="60px" height="45px"/>';
           ?>
           </td>   
             <td><a href="../User_Profile/view_profile.php?id=<?php echo $id;?>">View Profile</a></td>
      </tr>
  
     <?php 
      
    }
 ?>

   </tbody>
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