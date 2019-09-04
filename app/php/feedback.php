<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="feed" action="#">
		
	</form>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['message'];

$con=mysqli_connect('localhost:3308','root');
mysqli_select_db($con,'db3');
$q="insert into feed(name,email,subject,message) values('$name','$email','$sub','$msg')";
$out=mysqli_query($con,$q);
if($out)
{
	?>
	<script type="text/javascript">
		alert("response submitted successfully");
		document.getElementById('feed').action="http://localhost/app/html/homepage.html";
		document.getElementById('feed').submit();
	</script>
	<?php
}

else
{
	?>
	<script type="text/javascript">
		alert("response could not be submitted");
		document.getElementById('feed').action="http://localhost/app/html/homepage.html";
		document.getElementById('feed').submit();
	</script>

<?php

}
?>
</body>
</html>