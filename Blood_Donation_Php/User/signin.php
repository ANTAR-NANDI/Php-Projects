<?php include_once('../include/include.php');?>
<div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="text-center" style="color: navy"><marquee>Sign In</marquee></h3>
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
           <td style="border: 1px solid green"><a href="signin.php">Log In</a></td>
             
          </tr>
           <td><a href="forgot.php">Forgot Password</a></td>
             
             
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title" style="color: green">Log In</h5><hr>
            
                      <form action="process_sign.php" method="POST">

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

                        <button class="btn btn-primary" name="submit" type="submit" value="submit">Log In</button>
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
        <div class="row">
          <div class="col-md-4">
            <?php  echo "Date :" . date("Y/m/d"); ?>

          </div>



          <div class="col-md-4">
           <footer>
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://http://www.blooddonorsbd.com">bloododnorsbd.com</a>
  </div>
  <!-- Copyright -->

</footer>

          </div>


           <div class="col-md-2">
            
    
          </div>
             <div class="col-md-2">
             <?php  echo "Date :" . date("Y/m/d"); ?>
    
          </div>

        </div>
        
</div>
</div>
  <!-- Copyright -->

</footer>

  </body>
</html>

