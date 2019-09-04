<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$result=0;
	$cid=$_POST['cid'];
	$psw=$_POST['psw'];
	$_SESSION['cid']=$cid;
	$q="select * from company where cid='$cid' and password='$psw'";
	$con=mysqli_connect('localhost:3308','root');
	mysqli_select_db($con,'db3');
	$num=0;
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
						document.getElementById('reverse').action='http://localhost/app/html/companylogin.html';
						document.getElementById('reverse').submit();
					}
				</script>
				</form>

				<?php




			}
			else if($num>0)
			{
				?>
				<form id="ahead" action="#">
					<script type="text/javascript">
						alert("YOU ARE SUCCESSFULLY LOGGED IN!!");
						ahead();

					function ahead()
					{
						document.getElementById('ahead').action='http://localhost/app/php/dashboard.php';
						document.getElementById('ahead').submit();
					}
					</script>
				</form>

				<?php

			}

		?>

</body>
</html>