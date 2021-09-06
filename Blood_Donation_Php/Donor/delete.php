
<?php
    
     include("../Db/connection.php");
    
   if(isset($_GET['request_id']))
     $request_id= $_GET['request_id'];
     
    
      
       echo "$request_id";
     
      $sql="delete from request where request_id=$request_id";
     // echo "$sql";
      $result=$conn->query($sql);
      if($sql)
      {
        echo "<script>alert('updated')</script>";
        header("Location:edit_request.php");

      }
    








?>