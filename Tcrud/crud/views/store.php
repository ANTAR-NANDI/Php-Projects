<pre>
    <?php
///**
// * Created by PhpStorm.
// * User: PHP
// * Date: 7/2/2019
// * Time: 3:25 PM
// */
//
////MySQL connection details.
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'bitm';
$name = $_POST["fname"];
$email = $_POST["email"];
$phone =$_POST["phone"];
//Custom PDO options.
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);

//Create our INSERT SQL query.
$sql = "INSERT INTO `student` (`name`, `email`,`phone`) VALUES (:name, :email,:phone)";


//Prepare our statement.
$statement = $pdo->prepare($sql);


//Bind our values to our parameters (we called them :make and :model).
$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);
$statement->bindValue(':phone', $phone);


//Execute the statement and insert our values.
$inserted = $statement->execute();


//Because PDOStatement::execute returns a TRUE or FALSE value,
//we can easily check to see if our insert was successful.
if($inserted){
    echo 'Row inserted!<br>';
}


//
//var_dump($_POST);?>
<!--</pre>-->