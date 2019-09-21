<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		ADMIN PORTAL
	</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.css">      
  <!-- Latest compiled and minified CSS -->
  <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body>
<?php

$result=0;
$num=0;
$aid=$_POST['aid'];
$password=$_POST['psw'];
$con=mysqli_connect('localhost:3308','root');
mysqli_select_db($con,'db3');




$q="select * from adminDetail where adminid='$aid' and password='$password'";
$result=mysqli_query($con,$q);
if($result)
{
$num=mysqli_num_rows($result);
}

if($num==0)
			{
				?>	
				<form id="reverse" action="#">

					<script type="text/javascript">
						Swal.fire(				
						{
							title:'LOGIN DETAILS OF ADMIN',
							text:"YOUR CREDENTIALS DONT MATCH ANY EXISTING RECORD",
							confirmButtonText: 'TRY AGAIN',
							type:'error',
							
						}
						)
						
						setTimeout(revert,3000);
					
					

					function revert()
					{
						document.getElementById('reverse').action='http://localhost/app/html/adminlogin.html';
						document.getElementById('reverse').submit();
					}
				</script>
				</form>

				<?php


			}
			else if($num>0)
			{
				$_SESSION['aid']=$aid;
				?>
				<form id="ahead" action="#">
					<script type="text/javascript">
						Swal.fire(
						{
						title:'LOGIN DETAILS FOR ADMIN',
						text:"YOUR ARE SUCCESSFULLY LOGGED IN",
						confirmButtonText: 'PROCEED',
						type:'success',
						
						}
						)
						
						
						setTimeout(ahead,3000);
					function ahead()
					{
						document.getElementById('ahead').action='http://localhost/app/php/companyregister.php';
						document.getElementById('ahead').submit();
					}
					</script>
				</form>

				<?php

			}

		?>
			
</body>
</html>