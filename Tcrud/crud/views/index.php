




<!DOCTYPE html>
<html>
<head>
    <title>Simple CRUD Application - READ Operation</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

    <link rel="stylesheet" href="styles.css" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php



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


$data = $pdo->query("SELECT * FROM  student")->fetchAll();

?>
<div class="container">
    <div class="row">
        <h2>Read Operation in CRUD applicaiton</h2>
        <table class="table ">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Phone</th>
                <th>Extras</th>

            </tr>
            </thead>
            <tbody>
            <?php

            foreach ($data as $row) {
              ?>

            <tr>
                <th ><?php echo $row['id']?></th>
                <td><?php echo $row['name']?> </td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <td>

                    <a href="edit.php?id=<?php echo $row['id']?>">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>


                    <a href="delete.php?id=<?php echo $row['id']?>" id="<?php $row['id']?>">
                        <span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                </td>
            </tr>

        <?php    } ?>


            </tbody>
        </table>
    </div>
</div>

</body>
</html>