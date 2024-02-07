<?php


session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
	die("connection error");
}
if(isset($_POST["register"]))
{
	$name=$_POST["NAME"];
	$email=$_POST["EMAIL"];
	$phone=$_POST["PHONE"];
	$msg=$_POST["MESSAGE"];
	$sql="insert into admission (NAME,EMAIL,PHONE,MESSAGE) values ('$name','$email','$phone','$msg')";
	$result=mysqli_query($data,$sql);
	if($result)
	{
		echo "<script type='text/javascript'> alert('APPLIED SUCCESSFULLY ');
		</script>";
	}


	else
	{
		echo "apply failed";
	}

			

	}	

?>

	
