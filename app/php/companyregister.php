<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		company_account 
	</title>
	<style type="text/css">
		.header {
 	 padding: 60px;
  	text-align: center;
  	background: #1abc9c;
  	color: white;
  	font-size: 30px;
}
</style>

</head>
<body>
<header style="background-color: #006db0;" class="header">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="./homepage.html">Back</a>
	</header>

	
	
	<div id="id01" class="modal">
		<section style="background-image: url('http://localhost/app/images/texture1.jpeg');">
<form id="form" class="modal-content animate" method="POST" action="http://localhost/app/php/delete.php">
	<div style="font-size: 29px">
		<center><b><u>ADMIN VIEW</u><b></center>
	</div>
		<br>
	<label for="cid">SET COMPANY ID</label>
	<input type="text" name="cid" placeholder="enter company id" required>
	<br>
	<label for="psw">SET COMPANY PASSWORD</label>
	<input type="password" name="psw" placeholder="enter password" required>
	<br>
	<center>
		
	<input id="create" type="submit" value="create" name="create" onclick="creation()">
	<input id="delete" type="submit" value="delete" name="delete" onclick="deletion()">

	<script type="text/javascript">
		function creation()
		{
			document.getElementById('form').action="http://localhost/app/php/entry.php";
			document.getElementById('form').submit();
		}
		function deletion()
		{
			document.getElementById('form').action="http://localhost/app/php/delete.php";
			document.getElementById('form').submit();
		}
	</script>
	
	</center>
	<br>
</form>


<?php
session_start();
$result=0;
$num=0;
$con=mysqli_connect('localhost:3308','root');
mysqli_select_db($con,'db3');
$q="select * from company";
$result=mysqli_query($con,$q);
if($result)
{
	$num=mysqli_num_rows($result);
}
if($num)
{
	?>

	
		<table border="2px">
			<tr>
				<th>
					COMPANY ID
				</th>
				<th>
					COMPANY PASSWORD
				</th>
			</tr>

			<?php
	for($i=1;$i<=$num;$i++)
	{
		$row=mysqli_fetch_array($result);
		?>

			<tr>
				<td>
					<?php
					echo $row['cid'];
					?>
				</td>
				<td>
					<?php
					echo $row['password'];
					?>
				</td>
			</tr>

		
	</form>
		<?php
	}
}
?>


</section>

</div>
<br>
<br>
<br>
<div class="footer">
  <p>"knowledge is power"</p>
</div>
</body>
</html>