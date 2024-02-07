<?php


session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if(isset($_POST["ADD_STUDENT"]))
{
	$usename=$_POST["NAME"];
	$usercontact=$_POST["CONTACT"];
    $useremail=$_POST["EMAIL"];
	$userexper=$_POST["EXPERIENCE"];
	$userprop=$_POST["PROPERTY"];
	$usercom=$_POST["COMMISION"];
	$usersta=$_POST["STATUS"];
	$usertype="broker";
	$check="select * from user where EMAIL='$useremail'";
	
	$check_sum=mysqli_query($data,$check);
	$row_count=mysqli_num_rows($check_sum);
	if($row_count==1)
	{
		echo "<script type='text/javascript'> alert('USERNAME ALREADY EXISTS TRY ANOTHER ONE');
		</script>";
		
	}
	else
	{
	$sql="insert into user(NAME,CONTACT,EMAIL,EXPERIENCE,PROPERTY,COMMISION,STATUS,USER TYPE) 
	VALUES('$usename','$usercontact','$useremail','$userexper','$userprop','$usercom','$usersta','$usertype')";
	$result=mysqli_query($data,$sql);
	if($result )
	{
		echo "<script type='text/javascript'> alert('DATA UPLOADED SUCCESSFULLY');
		</script>";

	}
	else{
		echo "UPLOAD FAILED";
	}
	}

}
?>