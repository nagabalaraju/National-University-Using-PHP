<!DOCTYPE html>
<html lang="len">
<head>
	<meta charset="UTF-8">
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="school2.jpg" class="body_deg">
	<center>
		<div class="form_deg">
			<center>
					<h1 class="title_design">LOGIN FORM</h1>
					
				</center>
			<form action="login_check.php" method="POST" class="login_form">

				<div>
					<label class="label_deg">NAME</label>
					<input type="text" name="NAME">
				</div>
				<div>
					<label class="label_deg">PASSWORD</label>
					<input type="PASSWORD" name="PASSWORD">
				</div>
				<div>
					
					<input class="btn btn-primary" type="SUBMIT" name="SUBMIT" value="LOGIN">
				</div>
				<div>
					
					<a href="logout_index.php" class="btn btn-primary" style="margin-top:15px ";>BACK</a>
				</div>
			</form>
		</div>
	</center>
	</body>
	</html>