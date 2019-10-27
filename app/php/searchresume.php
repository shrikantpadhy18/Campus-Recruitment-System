

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$data=$_POST['search'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'db3');
	$q="select * from studprofile where roll='$data' ";
	$result=mysqli_query($con,$q);
	$out=mysqli_fetch_array($result);
	$std=$out['image'];

	$file = "$std"; 
	$filename = "$std"; 
  
// Header content type 
header('Content-type: application/pdf'); 
  
header('Content-Disposition: inline; filename="' . $filename . '"'); 
  
header('Content-Transfer-Encoding: binary'); 
  
header('Accept-Ranges: bytes'); 
  
// Read the file 
@readfile($file); 
	?>
	


</body>
</html>




