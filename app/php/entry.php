<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
session_start();
$cid=$_POST['cid'];
$psw=$_POST['psw'];
$con=mysqli_connect('localhost:3308','root');
mysqli_select_db($con,'db3');
$q="insert into company(cid,password) values('$cid','$psw')";
$outcome=mysqli_query($con,$q);
if($outcome and $cid!=NULL and $psw!=NULL)
{
	?>
	<form action="http://localhost/app/php/companyregister.php" id="success">
	
	</form>
	<script type="text/javascript">
		alert("COMPANY ID HAS SUCCESSFULLY BEEN CREATED");
		back();

		function back()
		{
			document.getElementById('success').submit();
		}
	</script>



	<?php

}

else
{
	?>
	<form action="http://localhost/app/php/companyregister.php" id="failure">
	
	</form>
	<script type="text/javascript">
		alert("COMPANY ID COULD NOT BE CREATED,TRY AGAIN!!");
		back();

		function back()
		{
			document.getElementById('failure').submit();
		}
	</script>



	<?php
}

?>
</body>
</html>