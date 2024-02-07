<!DOCTYPE html>
<html lang="len">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
				.content{
					
					margin-left: 30%;
				}
			</style>
	</head>
	<body>
		<header class="header">
			<a href=" ">ADMIN DASHBOARD</a>
			<div class="logout">
				<a href="logout_admin.php" class="btn btn-primary">BACK</a>
			</div>
<style type="text/css">
	label{
		display: inline-block;
		text-align: right;
		width: 100px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.div_deg{
		background-color: skyblue;
		width: 400px;
		padding-top: 70px;
		padding-bottom: 70px;
	}
</style>
</header>
<aside>
	<ul>
		
		<li>
			<a href="add_student.php">ADD PROPERTIES</a>
		</li>
		
	</ul>
</aside>
<div class="content">
<center>
	<h1 style="color:red">PROPERTY ADDING  FORM</h1>
	<br>
	<div class="div_deg" >
		<form action="studentdata_check.php" method="POST">
			<div >
				<label>OWNER NAME</label>
				<input type="text" name="NAME">
			</div>
			<div>
				<label>CONTACT</label>
				<input type="number" name="CONTACT">
			</div>
			<div>
				<label>ADRESS</label>
				<input type="text" name="EMAIL">
			</div>
			<div>
				<label>CITY</label>
				<input type="text" name="EXPERIENCE">
			</div>
			<div>
				<label>ZIP CODE</label>
				<input type="text" name="PROPERTY">
			</div>
			<div>
				<label>KIND OF PROPERTY</label>
				<input type="text" name="COMMISION">
			</div>
			<div>
				<label>AREA</label>
				<input type="int" name="STATUS">
			</div>
			<div>
				<label>TOTAL VALUATION</label>
				<input type="int" name="STATUS">
			</div>
			<div>
				
				<input type="SUBMIT" class="btn btn-primary" name="ADD_STUDENT" value="ADD BROKER">
			</div>
		</form>
	</div>
</center>
</div>

	</body>
	</html>