<?php
session_start();
if(!isset($_SESSION['aid']))
{
	header('location:http://localhost/app/html/adminlogin.html');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>  
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/companyregister.css"/>   
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		company_account 
	</title>
	<style type="text/css">
		a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a:hover, a:active  {
  background-color: red;
}
input[type="submit"]
{
  border:none;
  outline: none;
  height: 40px;
  background: blue;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}

 input[type="submit"]:hover
{
  cursor: pointer;
  background: #ffc107;
  color: #000;

}
input[type='text'],input[type='password']
{
	border-radius: 5px;
	padding: 12px;
}
label,th,td
{
	color: white;
}
	</style>
	

</head>
<body >
<header style="background:transparent;"  id="jumbo" style="height: 100px;border-radius: 1px;">
    <img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
    <center><h1><b style="font-style: italic;color: black">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
    	<a class="fa fa-power-off" href="http://localhost/app/php/logout.php" >LOGOUT</a>
  </header>
	
<p style="text-align: right;color:blue;font-size: 25px">Hello <?php echo $_SESSION['aid']; ?></p>
<a class="glyphicon glyphicon-user" style="text-align: left;"  href="http://localhost/app/php/studentrecord.php">STUDENT DETAILS?</a>
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
	
	
	


	
		<div class="tabular">

			<h1>Admin View</h1>
			<table class="table" style="box-shadow: 0 8px 6px -6px black;background-image: none;background-color:black;">
	<form  style="height: 400px;font-size: 35px;"  id="form"  method="POST" action="http://localhost/app/php/delete.php">
	
		
	<tr><td><label for="cid"><h2>SET COMPANY ID <i class='fas fa-industry'></i></h2></label>
	<input type="text" name="cid" placeholder="enter company id" required>
	</td></tr>
	<tr><td><label for="psw"><h2>SET COMPANY PASSWORD <i class="fa fa-lock"></i></h2></label>
	<input type="password" name="psw" placeholder="enter password" required>
	</td></tr>
	<tr><td><center>
		
	<input  id="create" type="submit" value="create" name="create" onclick="creation()">
	<input  id="delete" type="submit" value="delete" name="delete" onclick="deletion()">
	</center></td></tr>
	</form>
</table>
   
	

<?php

$result=0;
$num=0;
$con=mysqli_connect('localhost','root');
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

	
		<table  style="box-shadow: 0 8px 6px -6px black;background-image: none;background-color:black;" class="table">
			<h1>Company Detail</h1>
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



</div>

<br>
<br>
<br>

	

<div class="footer">
  <p>"knowledge is power"</p>

	


</div>
</body>
</html>