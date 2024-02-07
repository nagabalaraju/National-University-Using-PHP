<?php 
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);


if(isset($_GET['stuid']))
{
	$username=$_GET['stuid'];
	$sql="delete from user where ID='$username'";
	$result=mysqli_query($data,$sql);
	if($result)
	{
		header("location:view_student.php");
	}
}
?>