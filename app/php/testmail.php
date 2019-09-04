
<!DOCTYPE html>
<html>
<head>
	<title>mail</title>
</head>
<body>
<form id="form" action="#">
	
</form>
</body>
</html>


<?php
$email=$_POST['email'];
$msg=$_POST['mssg'];
$to="$email";
$subject="Response From Website";
$message="'$msg'";
$head="From:prashantpadhy21@gmail.com";
if(mail($to,$subject,$message,$head))
{
	?>
	<script type="text/javascript">
		alert("mail sent successfully");
		document.getElementById('form').action="http://localhost/app/php/dashboard.php";
		document.getElementById('form').submit();
	</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("oops! mail couldn't be sent,try again");
		document.getElementById('form').action="http://localhost/app/php/dashboard.php";
		document.getElementById('form').submit();
	</script>
	<?php
}
?>
