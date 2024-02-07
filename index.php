<?php 
	error_reporting(0);
	session_start();
	session_destroy();
	


	if($_SESSION['message'])
	{
		$message=$_session['message'];
		echo "<script type='text/JavaScript'> alert('$message')</script>";
	}
?>






<!DOCTYPE html>
<html lang="len">
<head>
	<meta charset="UTF-8">
	<title>STUDENT MANAGEMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<label class="logo">NATIONAL UNIVERSITY</label>
		<ul>
			<li><a href=" ">HOME</a></li>
			<li><a href=" ">CONTACT US </a></li>
			<li><a href=" ">ADMISSION</a></li>
			
			<li><a href="login.php" class="btn btn-success">LOGIN</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text" >We Teach Students With Care</label>

		<img  class="main_img" src="school_management.jpg">

	</div>

	<div class="Container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="school2.jpg">
</div>
<div class="col-md-8">
	<h1>WELCOME TO NATIONAL UNIVERSITY</h1>
	<p>Welcome to the National University. We are a part of Shree Chanakya Education Society, which has a strong presence on the education map of Pune. The Trust has been associated with Management education since 1994. The University  segment has been operational since 2004.

Today we are a full fledged CBSE affiliated school with student strength 3821 and a total staff of 267 . We are committed to excellence in education from KG to PG.

University Timings:Afternoon Shift–11:20 am to 4:40 pm</p>
	</div>
</div>
</div>
<center>
	<h1 class="adm">OUR TEACHERS</h1>

</center>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img class="teacher" src="teacher3.jpg">
			<br>
<h3>Associate Professor</h3>
</div>
		<div class="col-md-4">
			<img class="teacher" src="teacher2.jpg">
			<br>
			<h3>Associate Professor</h3>
			
		</div>
		<div class="col-md-4">
			<img class="teacher" src="teacher1.jpg">
			<br>
			<h3>Associate Professor</h3>
			
			
		</div>
</div>
</div>
<center>
	<h1 class="adm">OUR COURSES</h1>

</center>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img class="teacher" src="graphic.jpg">
			<h3>Graphic Designer</h3>
			</div>
			<div class="col-md-4">
			<img class="teacher" src="Web.jpg">
			<h3>Web Developer</h3>
			</div>
			<div class="col-md-4">
			<img class="teacher" src="OIP (11).jpg">
			<h3>Data Science</h3>

</div>
		
</div>
</div>

<center>
<h1 class="adm">REGISTRATION FORM</h1></center>

<div align="center" class="admission_form">

<form action="data_check.php" method="POST">
	<div class="adm_int">
		<label class="label_text">NAME</label>
		<input class="input_deg" type="text" name="NAME"
</div>
<div  class="adm_int">
		<label class="label_text">EMAIL</label>
		<input class="input_deg" type="text" name="EMAIL"
</div>
<div  class="adm_int">
		<label class="label_text">PHONE</label>
		<input class="input_deg" type="text" name="PHONE"
</div>

<div  class="adm_int">
		<label class="label_text"  >MESSAGE</label>
		<textarea class="input_text"  name="MESSAGE" ></textarea>
	</div>
	<div  class="adm_int">
		<input  class=" btn btn-primary" name="register" type="SUBMIT"  id="submit" value="RESISTER">
		</div>


 </form>

</div>

<footer>
	<h3 class="footer_text">ALL @COPYRIGHT RESERVED BY BATHULA NAGA BALA RAJU </h3>
</footer>


	</body>
	</html>