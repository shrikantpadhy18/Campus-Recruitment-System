<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form id="revert" action='#'>
		
	</form>
	<script type="text/javascript">
<?php
session_start();
    $row=0;
    $result=0;
    $out=0;
  $usr=$_POST['username'];
  $roll=$_POST['rollno'];
  $q="select * from register1 where roll='$roll' and username='$usr' ";
  $con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'db3');
  $result=mysqli_query($con,$q);
  
  if (mysqli_num_rows($result)==1) {
    $out=mysqli_fetch_array($result);
    print 'alert("YOUR password '.$out['password'].' is recovered")'; 

   ?>
   
   <?php
  }
  else
  {
    ?>
    alert("you gave invalid data");
    <?php
  }

  ?>
  
  document.getElementById('revert').action="http://localhost/app/php/login.php";
  document.getElementById('revert').submit();
  
  </script>
</body>
</html>