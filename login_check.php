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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["NAME"];
	$PASSWORD=$_POST["PASSWORD"];
	$sql="SELECT * FROM user WHERE NAME='".$name."' and PASSWORD='".$PASSWORD."' ";
	$result=mysqli_query($data,$sql);
	$row=mysqli_fetch_array($result);

	if($row["USER TYPE"]=="student")
	{
		header("location:studenthome.php");
	}

	elseif($row["USER TYPE"]=="admin")
	{
		
		header("location:adminhome.php");
	}
	else{
		
		echo "USERNAME OR PASSWORD DOES NOT MATCH";
}
}