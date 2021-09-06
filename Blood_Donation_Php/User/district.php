<?php include '../include/include.php';?>

<div class="container">
<div class="card">
  <div class="card-header">
    <h3 style="color: green"> 
  
Click on your District to see the Blood Donors List</h3>
          

  </div>
  <div class="card-body">
      <div class="row">
<?php
    
    include("../Db/connection.php");
    $sql="SELECT COUNT(District) as c, District FROM signup GROUP BY District;";
    $r = $conn->query($sql);
    while($row=mysqli_fetch_array($r)){
        $district= $row['District'];
        $count = $row['c'];
               
    ?> 
 

  
         <div class="col-md-3" style="margin-bottom: 4px">
            <button type="button" class="btn btn-light btn-lg btn-block" name="dis"><a href="view_district.php?view=<?php  echo $district;    ?>"><?php echo "$district"."[$count]" ?></a>
            </button>

         </div>
        
      


   
    <?php 
      
    }
    
 ?>
 </div>
  </div>
  </table>


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
</div>


</body>
</html>
