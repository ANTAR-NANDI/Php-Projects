<?php
if(isset($_POST['sub']))
{
	     include("../Db/connection.php");  
	$edit_code=$_POST['edit'];
	//echo "$edit_code";
	$sql="SELECT * from request where Edit_Code=$edit_code;";
	echo "$sql";
	$result=$conn->query($sql);
	//echo $result;
	if($result->num_rows>0)
	{
		header("Location:update_request.php");
		// redirect("district.php");
		// die();
		//echo "yes";
		echo "$sql";
	}
	else {
		echo "no";
	}

}
?>