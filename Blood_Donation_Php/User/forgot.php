<?php include '../include/include.php';?>
<div class="container">
    <div class="card">
      <div class="card-header">
         <h3 class="text-center" style="color: navy"><marquee>Forgot Password??</marquee></h3>
      </div>
        <div class="card-body">
         
           <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color: blue">Donors Area</h5>
        <table style="border: 1px solid green">
          <tr>
            <td><a href="signup.php">Want To be a Donor?</a></td>
          </tr>
          <br>
          <tr>
           <td  style="border: 1px solid green"><a href="signin.php">Log In</a></td>
             
          </tr>
           <td><a href="forgot.php">Forgot Password</a></td>
             
             
          </tr>
        </table>
      </div>
    </div>

       <?php
if(isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repass=$_POST['repass'];
 
  include("../Db/connection.php");
  $sql="SELECT * FROM signup WHERE Email='$email'";
  $result=$conn->query($sql);
   if($result->num_rows>0)
   {
            if($password!=$repass)
            {
              echo '<div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Password Mismatched!!!</h4></div>';
            }
            else
            {
              $sql1="update signup set Passsword='$repass' where email='$email';";
              $result1=$conn->query($sql1);
                               if($result1)
                               {
                                   echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Password Reset!!!</h4></div>';
                               }
              
            }
          }
       else
         {
          
          echo '<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Acc Dont exists!!!</h4></div>';

         }
   
}




?>











  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color: green">Forgot Password</h5><hr>
            
                      <form method="POST" action="forgot.php">

                         <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-6">
                           <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                          <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>
                         <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-2 col-form-label">Retype-Password</label>
                          <div class="col-sm-6">
                            <input type="password" name="repass" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>

                        <button class="btn btn-primary" type="submit" name="submit" value="submit">Change Password</button>
                      </form>
                       
                   
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
