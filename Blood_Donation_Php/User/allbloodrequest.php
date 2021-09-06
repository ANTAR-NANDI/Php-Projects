<?php include '../include/include.php';?>

        
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
                          <pre class="text-uppercase" style="color: blue">
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
<br>


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