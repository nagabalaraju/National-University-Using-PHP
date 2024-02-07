<?php 
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="select * from pro";
$result=mysqli_query($data,$sql);
?>
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
			<a href=" ">ADMISSION PAGE</a>
			<div class="logout">
				<a href="logout_admin.php" class="btn btn-primary">BACK</a>
			</div>

</header>

<aside>
	<ul>
		<li>
			<a href=" ">VIEW BROKERS DATA</a>
		</li>
		
	</ul>
</aside>
<div class="content" style="margin-right:250px;">
<center>
	<h1 style="color:red">BROKERS AND PROPERTIES  DATA </h1>
	<br>
	<table border="3px" style="margin-right:250px;">
	<tr>
		<th style="padding:30px; font-size:15px; text-align:center;">USERNAME</th>
		<th style="padding:30px; font-size:15px; text-align:center;">PHONE</th>
		<th style="padding:30px; font-size:15px; text-align:center;">EMAIL</th>
		<th style="padding:30px; font-size:15px; text-align:center;">PASSWORD</th>
		<th style="padding:30px; font-size:15px; text-align:center;">DELETE</th>
	</tr>
	<?php 
	while($info=$result->fetch_assoc())
	{
		?>
		<tr>
			<td style=" padding-top:5px; padding-bottom:5px; text-align:center; background-color:skyblue; "><?php echo "{$info["OWNER NAME"]}";?></td>
			<td  style=" padding-top:5px ; padding-bottom:5px; text-align:center; background-color:skyblue; "><?php echo "{$info["CONTACT"]}";?></td>
			<td style="  padding-top:5px:; padding-bottom:5px;text-align:center; background-color:skyblue; "><?php echo "{$info["USER TYPE"]}";?></td>
			<td style=" padding-top:5px ; padding-bottom:5px; text-align:center; background-color:skyblue; " ><?php echo "{$info["CITY"]}";?></td>
			<td style=" padding-top:5px ; padding-bottom:5px; text-align:center; background-color:skyblue; " ><?php echo "<a onclick=\"javascript:return confirm('ARE YOU SURE TO DELETE THIS');\"  href='delete.php?stuid={$info['ID']}'>Delete</a>";?></td>
		</tr>
		<?php 
	}

	?>
</table>
</center>
</div>

	</body>
	</html>