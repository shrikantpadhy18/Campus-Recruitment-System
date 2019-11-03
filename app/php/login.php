

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   
  <link rel="stylesheet" type="text/css" href="http://localhost/app/css/login.css"/>   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">      
  <!-- Latest compiled and minified CSS -->
  <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <style type="text/css">
   a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
input[type="submit"]
{
  border:none;
  outline: none;
  height: 40px;
  background: blue;
  color: #fff;
  font-size: 18px;
  border-radius: 20px;
}
a:hover, a:active  {
  background-color: blue;
}
 </style>

	<title></title>
	
</head>
<body >
	<header style="background-color: white;" id="jumbo" >
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<center><h1><b style="font-style: italic;transform: translate(-50%, -50%);color: black">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a class="fa fa-arrow-circle-left" href="http://localhost/app/html/homepage.html">BACK</a></center>
	</header>
	<br>
	<br>
	<hr>

<div class="tabular">
  
<table class="table" style="box-shadow: 0 8px 6px -6px black;">
  <form  action="http://localhost/app/php/actionpage.php" method="POST">
    <tr><td><div class="imgcontainer">
      
      <img src="http://localhost/app/images/img_avatar.png" alt="Avatar" class="avatar" >
    </div></td></tr>

    
      
     <tr><td> <label for="uname"><b>Username </b><i class="glyphicon glyphicon-user"></i></label>
      <input type="text" placeholder="Enter Username" name="uname" required></td></tr>

      <tr><td><label for="psw1"><b>Password  <i class="fa fa-lock"></i> </b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required></td></tr>
      <tr><td><label for="roll"><b>Enter Roll No</b></label>
      <input type="text" placeholder="Enter Roll No" name="roll" required></td></tr>
        
      <tr><td><button type="submit">Login</button></td></tr>      
       
      <tr><td><a href="#display">change password</a></td></tr>
    </div>
  </form>
</table>

<table id="display" class="table" border="2px">
<form   action="http://localhost/app/php/login.php" method="POST">
 <span><center ><h1><u><b>CHANGE PASSWORD</b></u></h1></center></span><br>
  USERNAME
  <input type="text" name="uname" placeholder="Username" required>
  ROLL:
  <input type="text" name="roll" placeholder="Roll" required>
  OLD PASSWORD
  <input type="text" name="opsw" placeholder="Old Password" required>
  NEW PASSWORD
  <input type="text" name="npsw" placeholder="New Password" required>

  <center><button type="submit" name="change" >CHANGE</button></center>




<br><br><br>
<hr>
<br>
<br>
<hr>
<br>
<br>
<hr>








</form>
</table>
</div>
  
    
      <?php
      if(isset($_POST['change']))
      {
          $rowno=0;
      session_start();
      $uname=$_POST['uname'];
      $roll=$_POST['roll'];
      $opsw=$_POST['opsw'];
      $npsw=$_POST['npsw'];
      $con=mysqli_connect('localhost','root');
      $z="select * from register1 where password='opsw' and username='$uname' and roll='$roll'";
      $result2=mysqli_query($con,$z);
      $rowno=mysqli_num_rows($result2);
      $q="update register1 set password='$npsw' where username='$uname' and roll='$roll' and password='$opsw' ";
      mysqli_select_db($con,'db3');
      $result=mysqli_query($con,$q);

      if($result and $rowno)
      {
        ?>
          <form id="reverse" action="#">

          <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
            <script>
            Swal.fire(        
            {
              imageUrl: 'https://cdn.dribbble.com/users/913766/screenshots/3606021/update.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'ACCOUNT UPDATION DETAIL',
              text:"YOUR ACCOUNT HAS SUCCESSFULLY BEEN UPDATED",
              confirmButtonText: 'OKAY',
              type:'success',
              
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
      else
      {
        ?>
        <form id="reverse" action="#">

          <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
            <script>
            Swal.fire(        
            {
              imageUrl: 'https://cdn.dribbble.com/users/913766/screenshots/3606021/update.png',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'<h1>ACCOUNT UPDATION DETAIL</h1>',
              text:"YOUR ACCOUNT UPDATION HAS FAILED!!",
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
    }
      ?>
   

  
<div class="footer">
  <p>"FORGOT PASSWORD?"</p>
  <form method="POST" id="fpassword" action="http://localhost/app/php/forgot.php" >
  Username:<input size="4" style="border-radius: 15%;" type="text" name="username" required>
  Roll:<input style="border-radius: 15%;" type="text" name="rollno" required>   


  <input type="submit" name="submitfor" value="submit">
  </form>
  
</div>

  
</body>
</html>