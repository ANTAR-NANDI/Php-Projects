

<?php

 include("../Database/connection.php");
if(isset($_POST['uploadfilesub']))
{
	$filename=$_FILES['uploadfile']['name'];
	$filetmpname=$_FILES['uploadfile']['tmp_name'];
	$folder='Img/';
  $a=$folder.$filename;
	move_uploaded_file($filetmpname,$a);
 
$sql="INSERT INTO `signup`(`pic`) VALUES ('$filename')";
  $qry=mysqli_query($conn,$sql);
  if($qry)
  {
    echo "<h2>Thanks for Uploading Your Image</h2>";
   // echo "$filename";
  }

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>image upload</title>
</head>
<body>
      <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile">
        <input type="submit" name="uploadfilesub" value="upload">
      </form>
</body>
</html>

