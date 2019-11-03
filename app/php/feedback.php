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

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'db3');
$q="insert into feed(name,email,subject,message) values('$name','$email','$sub','$msg')";
$out=mysqli_query($con,$q);
if($out)
{
	?>
	<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
            <script>
            Swal.fire(        
            {
              imageUrl: 'http://www.pngall.com/wp-content/uploads/3/Customer-Feedback-PNG.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'FEEDBACK DETAIL',
              text:"FEEDBACK SUBMITTED",
              confirmButtonText: 'DONE',
              type:'success',
              
            }
            )
            
            setTimeout(revert,3000);

            function revert()
            {
            	document.getElementById('feed').action="http://localhost/app/html/homepage.html";
				document.getElementById('feed').submit();
              
            }
          </script>
		
	
	<?php
}

else
{
	?>
	<script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
            <script>
            Swal.fire(        
            {
              imageUrl: 'http://www.pngall.com/wp-content/uploads/3/Customer-Feedback-PNG.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'FEEDBACK DETAIL',
              text:"FEEDBACK COULD NOT BE  SUBMITTED",
              confirmButtonText: 'TRY AGAIN',
              type:'error',
              
            }
            )
            
            setTimeout(revert,3000);

            function revert()
            {
            	document.getElementById('feed').action="http://localhost/app/html/homepage.html";
				document.getElementById('feed').submit();
              
            }
          </script>
		

<?php

}
?>
</body>
</html>