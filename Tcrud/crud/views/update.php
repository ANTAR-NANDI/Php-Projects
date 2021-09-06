<?php
$id = $_GET['id'];
//echo $id;
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'bitm';

$name = $_POST["fname"];
$email = $_POST["email"];
$phone =$_POST["phone"];

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

//Connect to MySQL and instantiate our PDO object.
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass, $options);
//$stmt = $pdo->prepare("SELECT * FROM student WHERE id=:id");
//$stmt->execute(['id' => $id]);
////$row= $stmt->fetch();
//$row = $stmt->fetch();
//echo $row['name']."<br />\n";
$data = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'id' => $id,
];
$sql = "UPDATE student SET name=:name, email=:email, phone=:phone WHERE id=:id";
$stmt= $pdo->prepare($sql);
$updated = $stmt->execute($data);
if($updated){
    echo 'Row updated!<br>';
}


?>

