<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->




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

table
{
  position: absolute;
  left: 5%;
  bottom: 20%;
  width: 300px;
  background-image: url('https://www.sbsgroup.com.sg/wp-content/uploads/Register-Cleaning-Company-in-Singapore.jpg');
  float: left;
}
</style>

</head>
<body style="background-image: url('http://www.royalresearch.asia/wp-content/uploads/2016/11/Admin-resized-2.jpg');">
<header style="background-color: #006db0;" class="header">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="http://localhost/app/html/homepage.html" onclick="<?php session_destroy();?>">LOGOUT</a>
	</header>

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
	
	
	


	
		<div style="font-size: 29px">
		<center><b><u>ADMIN VIEW</u><b></center>
	</div>
		
	<form  style="height: 400px;font-size: 35px;background-image: url('http://www.sfdcpoint.com/wp-content/uploads/2019/01/Salesforce-Admin-Interview-questions.png');"  id="form" class="modal-content animate" method="POST" action="http://localhost/app/php/delete.php">
	
		<br>
	<label for="cid">SET COMPANY ID</label>
	<input type="text" name="cid" placeholder="enter company id" required>
	<br>
	<label for="psw">SET COMPANY PASSWORD</label>
	<input type="password" name="psw" placeholder="enter password" required>
	<br>
	<center>
		
	<input class="btn-btn-primary" id="create" type="submit" value="create" name="create" onclick="creation()">
	<input class="btn-btn-primary" id="delete" type="submit" value="delete" name="delete" onclick="deletion()">
	</center>
	</form>
   
	<table style="position:absolute;top: 35%;height: 300px;background-image: url('https://img.freepik.com/free-photo/closeup-elegant-crumpled-white-silk-fabric-cloth-texture_50039-909.jpg?size=626&ext=jpg');">

		<?php
		$row=0;
			$con=mysqli_connect('localhost:3308','root');
			mysqli_select_db($con,'db3');
			$q="select * from feed";
			$result=mysqli_query($con,$q);
			if($result)
			{
				$row=mysqli_num_rows($result);

			}
			for($i=1;$i<=$row;$i++)
			{
			$out =mysqli_fetch_array($result);
			?>
				<tr><td><marquee direction="up" height=300><p>ID:<?php echo $i;?>,Name:<?php echo $out['name']; ?>,message=<?php echo $out['message']; ?>,email=<?php echo $out['email'] ?> </p> </marquee></td></tr>
			<?php
		}
		?>
</table>
	



<?php

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

	
		<table style="left: 80%;bottom: 50%" border="2px">

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

		<?php
	}
}
?>
</table>



<br>
<br>
<br>

	

<div class="footer">
  <p>"knowledge is power"</p>
 
</div>
</body>
</html>