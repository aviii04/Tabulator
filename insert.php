<?php
 $con=mysqli_connect('localhost','root',"");
 if(!$con)
 {
	 echo 'Not connected to server';
 }
 if(!mysqli_select_db($con,'intern'))
 {
	 echo 'Database not selected';
 }
 
 $id=$_POST['ID'];
 $g_val=$_POST['g_val'];
 
 $query="insert into income values('$id','$g_val')";
    if(!mysqli_query($con,$query))
		echo 'Not inserted';
	else
		echo'Inserted';
	
	header("refresh:1; url=InsertPg.php");
?>