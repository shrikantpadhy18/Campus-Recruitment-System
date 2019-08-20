<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
	$outcome=0;
	$result=0;
	$num=0;
	$cid=$_POST['cid'];
	$psw=$_POST['psw'];
	$con=mysqli_connect('localhost:3308','root');
	mysqli_select_db($con,'db3');

	$s="select * from company where cid='$cid' and password='$psw'";
	$result=mysqli_query($con,$s);
	if($result)
	{
		$num=mysqli_num_rows($result);
	}

	if($num>0){
	$q="delete from company where cid='$cid' and password='$psw'";
	}
	$outcome=mysqli_query($con,$q);
if($outcome)
{
	?>
	<form action="http://localhost/app/php/companyregister.php" id="success">
	
	</form>
	<script type="text/javascript">
		alert("GIVEN CREDENTIALS HAVE BEEN SUCCESSFULLY DELETED");
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
		alert("COMPANY CREDENTIALS COULD NOT BE DELETED,TRY AGAIN!!");
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