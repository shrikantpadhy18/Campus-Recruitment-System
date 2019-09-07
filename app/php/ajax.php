<?php
$row=0;
$num=0;
$data=$_GET['user'];
$con=mysqli_connect('localhost:3308','root');
mysqli_select_db($con,'db3');
$q="select * from register1 where username='$data' ";
$result=mysqli_query($con,$q);
if($result)
{
	$num=mysqli_num_rows($result);
	
}
if($num)
{
	echo 0;
}
else
{
	echo 1;
}

?>