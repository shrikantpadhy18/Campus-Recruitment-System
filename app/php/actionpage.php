<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>         

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>LOGIN</title>
</head>
<body>
		<?php
		
		$result=0;
		$num=0;
			$uname=$_POST['uname'];
			$psw=$_POST['psw1'];
			$roll=$_POST['roll'];
			$_SESSION['susername']=$uname;
			$_SESSION['roll']=$roll;

			echo $_SESSION['roll'];
			$con=mysqli_connect('localhost:3308','root');
			mysqli_select_db($con,'db3');
			$q="select * from register1 where username='$uname' and roll='$roll' and password='$psw'";
			$result=mysqli_query($con,$q);
			if($result){
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
						document.getElementById('reverse').action='http://localhost/app/php/login.php';
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
						document.getElementById('ahead').action='http://localhost/app/php/studentview1.php';

						document.getElementById('ahead').submit();
					}
					</script>
				</form>

				<?php
				
			}

		?>
</body>
</html>