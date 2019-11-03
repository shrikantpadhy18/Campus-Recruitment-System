<?php 
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>  
	<link rel="stylesheet" type="text/css" href="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.css">     

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

			
			$con=mysqli_connect('localhost','root');
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

					<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
						<script>
						Swal.fire(				
						{
							imageUrl: 'http://vaeyecenter.com/storage/app/media/client/button.png',
							  imageWidth: 400,
							  imageHeight: 100,
							  imageAlt: 'Custom image',
							  animation: true,
							title:'LOGIN DETAILS',
							text:"YOUR CREDENTIALS DONT MATCH ANY EXISTING RECORD",
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
			else if($num>0)
			{
				?>
				<form id="ahead" action="#">
					<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
						<script>
						Swal.fire(
						{
							imageUrl: 'http://vaeyecenter.com/storage/app/media/client/button.png',
							  imageWidth: 400,
							  imageHeight: 100,
							  imageAlt: 'Custom image',
							  animation: true,
						title:'LOGIN DETAILS',
						text:"YOUR ARE SUCCESSFULLY LOGGED IN",
						confirmButtonText: 'PROCEED',
						type:'success',
						
						}
						)
						
						
						setTimeout(ahead,3000);

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