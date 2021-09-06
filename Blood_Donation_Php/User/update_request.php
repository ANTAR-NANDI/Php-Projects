<?php include '../include/include.php';?>
<div class="container">
<form method="POST" action="request.php" class="needs-validation" novalidate>
  <div class="card">
      <div class="card-body">
           
            <div class="row mb-3">
                  
                     <label for="staticEmail" class="col-md-2 col-form-label">Your Name*</label>

   
                   <div class="col-md-4">
                       <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                     </div>

                      

                     
           </div>

















        



 <div class="row mb-3">
                  
            <label for="staticEmail" class="col-md-2 col-form-label">Requested Blood*</label>
             <div class="col-md-4">
                           
                 <div class="form-group">
                  
                            <select class="form-control" id="sel1" name="blood">
                                  <option>A+</option>
                                  <option>B+</option>
                                  <option>AB+</option>
                                  <option>AB-</option>
                                  <option>A-</option>
                                  <option>B-</option>
                                  <option>O+</option>
                                  <option>o-</option>
                            </select>
                  </div>

             </div>






                     
   </div>
      <div class="row mb-3">
                  
                     <label for="staticEmail" class="col-md-2 col-form-label">Amount(Blood)*</label>

   
             <div class="col-md-4">
                 <input type="mobile" name="amount" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                  </div>

                     
     </div>
    
    <div class="row mb-3">
                  
                     <label for="staticEmail" class="col-md-2 col-form-label">Patient Location*</label>

   
             <div class="col-md-4">
                  <input type="text" name="location" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                  </div>

                     
     </div>
     <div class="row mb-3">
                  
            <label for="staticEmail" class="col-md-2 col-form-label">District*</label>
             <div class="col-md-4">
                           
                 <div class="form-group">
                  
                            <select class="form-control" id="sel1" name="district">
                                  <option>Chittagong</option>
                                  <option>Dhaka</option>
                                  <option>Comilla</option>
                                  <option>Rajshahi</option>
                                  <option>Bogra</option>
                                  <option>Magura</option>
                                  <option>Shylet</option>
                                  <option>Jessore</option>
                                  <option>Chittagong</option>
                                  <option>Dhaka</option>
                                  <option>Comilla</option>
                                  <option>Rajshahi</option>
                                  <option>Bogra</option>
                                  <option>Magura</option>
                                  <option>Shylet</option>
                                  <option>Jessore</option>
                                 <option>Chittagong</option>
                                  <option>Dhaka</option>
                                  <option>Comilla</option>
                                  <option>Rajshahi</option>
                                  <option>Bogra</option>
                                  <option>Magura</option>
                                  <option>Shylet</option>
                                  <option>Jessore</option>
                            </select>
                  </div>

             </div>
  



                     
   </div>

           <div class="row mb-3">
                   <label for="example-datetime-local-input" class="col-2 col-form-label">Date</label>
                <div class="col-4">
                       <input class="form-control" name="date" type="date" value="d" id="example-datetime-local-input" >
                </div>
          </div>

          <div class="row mb-3">
                  
                     <label for="staticEmail" class="col-md-2 col-form-label">More Massage*</label>
             <div class="col-md-4">
                  <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                     
            </div>
             


       <div class="row mb-3">
                    <label for="staticEmail" class="col-md-2 col-form-label">Contact*</label>

   
             <div class="col-md-4">
                 <input type="mobile" name="contact" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                  </div>

                           <div class="col-md-4">
                            <?php
     if(isset($_POST['submit']))
     {


    $name=$_POST['name'];
  $contact=$_POST['contact'];
  $blood=$_POST['blood'];
  $amount=$_POST['amount'];
 
  $district=$_POST['district'];
  $location=$_POST['location'];
  $message=$_POST['message'];
  $date=$_POST['date'];
  $edit_code=$_POST['edit'];
     include("../Db/connection.php");     
   $sql="insert into request values
    ('$name',' $blood','$amount','$location','$district','$date','$message',$contact,$edit_code)";
   $r = $conn->query($sql);
  //echo "$r";
    if($r)
            {

               echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Successfull!</h4>
 
  <hr>
  <h3 class="mb-0">You have Registered As a Donor</h3>
</div>';
             
        }
            else
            {
                echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">UnSuccessfull!</h4>
</div>';
            }
     }



?>
                         

                          </div>
            </div>


<div class="row">
    <div class="col-md-4 mb-4">
    </div>
     <div class="col-md-4 mb-4">
       <button class="btn btn-primary" type="submit" name="submit">Update Request</button>
    </div>
    <div class="col-md-4 mb-4">   
</div>
</div>
      </div>
  </div>
 </div>
</form>




































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