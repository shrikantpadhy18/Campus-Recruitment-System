<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>         

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style type="text/css">
	.card
	{
		position: fixed;
		right: 0%;
		bottom:0%;
	}
	.header
	{
		position: fixed;
	}
	</style>
	<title></title>
</head>
<body style="background-color: aliceblue;">
	<header class="header">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			
			<a href="http://localhost/app/html/homepage.html">Back</a>
	</header>
	<br>
	<br>
	<br><br>
	<hr>
	<div >
	<img style="position: fixed;" src="http://localhost/app/images/university_image.jpg">
	
	
	<?php
	
	$con=mysqli_connect("localhost","root");
	$name=$_POST['name'];
	$username=$_POST['uname'];
	$password=$_POST['psw'];
	$email=$_POST['email'];
	$roll=$_POST['roll'];
	$branch=$_POST['branch'];
	$contact=$_POST['contact'];
	


	
	if(! $con)
	{
		 echo "SERVER IS DOWN TRY AGAIN";

	}
	else
	{
		

		 
		 ?>
		 	<br>

		 <?php

			$rows=0;
			mysqli_select_db($con,"db3");
			$existchecker="select * from register1 where roll='$roll'";
			$d=mysqli_query($con,$existchecker);
			
			if($d){
			$rows=mysqli_num_rows($d);
			}
			$q="insert into register1 (roll,name,number,branch,username,password,email) values ('$roll','$name',$contact,'$branch','$username','$password','$email')";
		
			$c=mysqli_query($con,$q);
			
			if ($c and $rows==0) {
				
				?>
					<script type="text/javascript">
						alert("YOUR ACCOUNT CREATION IS SUCCESFULLY DONE");
					</script>
					
					
					<div style="background-color: rgb(211,211,211,1);" class="card">
					  <div class="card-body">
					    <h4 class="card-title">SELECT VIEW</h4>
					    <p class="card-text">SELECT AMONG THE FOLOWING OPTIONS.</p>
					    <ol>
					    <li><a  class="btn btn-primary" href="http://localhost/app/php/login.php">GO TO LOGINPAGE</a></li><hr>
						<li><a  class="btn btn-primary" href="http://localhost/app/html/homepage.html">CLICK HERE TO GO BACK TO YOUR HOMEPAGE</a></li>
						</ol>
					    
					  </div>
					</div>
				
				<?php
			}
			else if ($rows>0) {
				?>

				<div style="background-color: rgb(211,211,211,1);" class="card">
					  <div class="card-body">
					  	<marquee><p onmouseover="this.style.color='orange'" onmouseout="this.style.color='blue' " style="color: blue;">"YOU HAVE ALREADY REGISTERED"</p></marquee>
					    <h4 class="card-title">SELECT VIEW</h4>
					    <p class="card-text">SELECT AMONG THE FOLOWING OPTIONS.</p>
					    <a  class="btn btn-primary" href="http://localhost/app/php/login.php">CLICK HERE TO GO BACK TO LOGINPAGE</a>
					  </div>
					</div>
				
				<?php
			}
			else
			{

				?>


				<div style="background-color: rgb(211,211,211,1);" class="card">
					  <div class="card-body">
					  	<marquee><p onmouseover="this.style.color='orange'" onmouseout="this.style.color='blue' " style="color: blue;">"OOPS!YOUR ACCOUNT COULDN'T BE CREATED TRY AGAIN"</p></marquee>
					    <h4 class="card-title">SELECT VIEW</h4>
					    <label class="center" for="back">
						<p>CLICK HERE TO GO TO HOMEPAGE </p>
						</label>
						<a  class="btn btn-primary" name="back" href="http://localhost/app/html/homepage.html"></a>
					  </div>
					</div>
				
				
				

				<?php
			}
		}			
	?>
</div>
</body>
</html>

