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


/*  Delete some rows from the allcountry table  */
$count = $pdo->exec("DELETE FROM student WHERE id = $id");
/* Return number of rows */

if($count){
    echo 'Row deleted!<br>';
}


?>

