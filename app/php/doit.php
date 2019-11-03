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
					<form id="reverse" action="#">

					<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
						<script>
						Swal.fire(				
						{
							imageUrl: 'https://eastwesthealing.com/wp-content/uploads/2015/04/signup.png',
							  imageWidth: 400,
							  imageHeight: 100,
							  imageAlt: 'Custom image',
							  animation: true,
							title:'LOGIN DETAILS',
							text:"YOUR ACCOUNT CREATION IS SUCCESSFULLY DONE!",
							confirmButtonText: 'GO TO LOGIN',
							type:'success',
							
						}
						)
						
						setTimeout(revert,3000);

						function revert()
						{
							document.getElementById('reverse').action='http://localhost/app/php/login.php';
							document.getElementById('reverse').submit();
						}
					</script>
				</form>
				
				<?php
			}
			else if ($rows>0) {
				?>

				<form id="reverse" action="#">

					<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
						<script>
						Swal.fire(				
						{
							imageUrl: 'https://eastwesthealing.com/wp-content/uploads/2015/04/signup.png',
							  imageWidth: 400,
							  imageHeight: 100,
							  imageAlt: 'Custom image',
							  animation: true,
							title:'LOGIN DETAILS',
							text:"YOUR ACCOUNT ALREADY EXIST IN THIS WEBSITE",
							confirmButtonText: 'PROCEED WITH LOGIN',
							type:'info',
							
						}
						)
						
						setTimeout(revert,3000);

						function revert()
						{
							document.getElementById('reverse').action='http://localhost/app/php/login.php';
							document.getElementById('reverse').submit();
						}
					</script>
				</form>
				
				<?php
			}
			else
			{

				?>


				<form id="reverse" action="#">

					<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
						<script>
						Swal.fire(				
						{
							imageUrl: 'https://eastwesthealing.com/wp-content/uploads/2015/04/signup.png',
							  imageWidth: 400,
							  imageHeight: 100,
							  imageAlt: 'Custom image',
							  animation: true,
							title:'LOGIN DETAILS',
							text:"YOUR ACCOUNT COULDN;T BE CREATED!",
							confirmButtonText: 'TRY AGAIN',
							type:'error',
							
						}
						)
						
						setTimeout(revert,3000);

						function revert()
						{
							document.getElementById('reverse').action='http://localhost/app/php/login.php';
							document.getElementById('reverse').submit();
						}
					</script>
				</form>
				
				

				<?php
			}
		}			
	?>
</div>
</body>
</html>

