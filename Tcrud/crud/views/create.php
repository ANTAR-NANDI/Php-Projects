

<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD Application in OOP PHP - Create</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
    <div class="row">
        <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action ="store.php">
            <h2>Create Operation in CRUD Application</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label"> Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" id="name" placeholder="First Name" />
                    <input type="text" name="lname"  class="form-control" id="name" placeholder="Last Name" />
                </div>
            </div>


            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control" id="email" placeholder="E-Mail" />
                </div>
            </div>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control" id="phone" placeholder="Phone number" />
                </div>
            </div>




            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
        </form>
    </div>
</div>
</body>


<script>

</script>
</html>