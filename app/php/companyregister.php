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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->




	
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

.tabular{
  width: 900px;
  margin-left: 20%;
  background-color: white;

}
.table
{
  width: 600px;
  padding: 25px;
  margin-left: 20%;
  margin-top:20px;
  background-image: url('http://www.sfdcpoint.com/wp-content/uploads/2019/01/Salesforce-Admin-Interview-questions.png');
  border-radius: 2px;
  
}
@media screen and (max-width: 650px)
{
  
  #overla p
  {
    font-size: 15px;
  }
  #overla table
  {
    font-size: 10px;
    
    margin-left: 1%;
    font-size: 15px;
    padding: 0px;
  }
  .tabular{
     position: absolute;
  margin-left: 0%;
  width: 550px;
  left: 0px;
  background-color: white;
  display: block;

}
.tabular h1
{

  font-size: 16px;
  margin-left: 0%;
}
.table
{
  width: 450px;
 
  margin-left: 0px;
  margin-top:20px;
  background-image: none;
  background-color: orange;
  border-radius: 2px;
  display: block;
  overflow-x:auto;
  
}
} 
</style>

</head>
<body style="background-image: url('http://www.royalresearch.asia/wp-content/uploads/2016/11/Admin-resized-2.jpg');">
<header style="background-color: #006db0;" class="header" id='jumbo'>
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="http://localhost/app/php/logout.php" >LOGOUT</a>

	</header>
<p style="text-align: right;color: yellow;font-size: 25px">Hello <?php echo $_SESSION['aid']; ?></p>
<a style="text-align: left;"  href="http://localhost/app/php/studentrecord.php">STUDENT DETAILS?</a>
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
			<table class="table">
	<form  style="height: 400px;font-size: 35px;"  id="form" class="modal-content animate" method="POST" action="http://localhost/app/php/delete.php">
	
		
	<tr><td><label for="cid">SET COMPANY ID</label>
	<input type="text" name="cid" placeholder="enter company id" required>
	</td></tr>
	<tr><td><label for="psw">SET COMPANY PASSWORD</label>
	<input type="password" name="psw" placeholder="enter password" required>
	</td></tr>
	<tr><td><center>
		
	<input class="btn-btn-primary" id="create" type="submit" value="create" name="create" onclick="creation()">
	<input class="btn-btn-primary" id="delete" type="submit" value="delete" name="delete" onclick="deletion()">
	</center></td></tr>
	</form>
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

	
		<table  border="2px" class="table">
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