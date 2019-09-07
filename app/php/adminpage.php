<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		ADMIN PORTAL
	</title>
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
					alert("YOUR CREDENTIALS DON'T MATCH ANY EXISTING RECORD!");
					revert();

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
						alert("YOU ARE SUCCESSFULLY LOGGED IN!!");
						ahead();

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