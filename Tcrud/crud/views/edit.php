
<?php
$id = $_GET['id'];
//echo $id;
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'bitm';

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);
$stmt = $pdo->prepare("SELECT * FROM student WHERE id=:id");
$stmt->execute(['id' => $id]);
//$row= $stmt->fetch();
$row = $stmt->fetch();
    //echo $row['name']."<br />\n";

?>





<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD Application - UPDATE Operation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <link rel="stylesheet" href="styles.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">


        <form method="post" class="form-horizontal col-md-6 col-md-offset-3" action="update.php?id=<?php echo $id?>">
            <h2>UPDATE Operation in CRUD Application</h2>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label"> Name</label>
                <div class="col-sm-10">
                    <input type="text" name="fname"  class="form-control" id="input1" placeholder="<?php echo $row['name']?>" />
                </div>
            </div>

            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">E-Mail</label>
                <div class="col-sm-10">
                    <input type="email" name="email"  class="form-control" id="input1" placeholder="<?php echo $row['email']?>" />
                </div>
            </div>
            <div class="form-group">
                <label for="input1" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                    <input type="text" name="phone"  class="form-control" id="input1" placeholder="<?php echo $row['phone']?>" />
                </div>
            </div>


            <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
        </form>
    </div>
</div>
</body>
</html>