
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   
  <link rel="stylesheet" type="text/css" href="http://localhost/app/css/login.css"/>   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.css">      
  <!-- Latest compiled and minified CSS -->
  <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<title></title>
	
</head>
<body style="background-image: url('https://www.itcompanyindia.in/img/en/It-Company.png');">
	<header style="background-image:url('https://static.oliveboard.in/wp-content/uploads/2017/09/Campus-Placement-Interview-Preparation-Guide.png') ;background-size: cover;height: 600px;" class="header" id="jumbo">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;transform: translate(-50%, -50%);color: black">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="http://localhost/app/html/homepage.html">Back</a>
	</header>
	<br>
	<br>
	<hr>

<div class="tabular">
  
<table class="table">
  <form  action="http://localhost/app/php/actionpage.php" method="POST">
    <tr><td><div class="imgcontainer">
      
      <img src="http://localhost/app/images/img_avatar.png" alt="Avatar" class="avatar" >
    </div></td></tr>

    
      
     <tr><td> <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required></td></tr>

      <tr><td><label for="psw1"><b>Password</b></label>
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
  USERNAME:
  <input type="text" name="uname">
  ROLL:
  <input type="text" name="roll">
  OLD PASSWORD:
  <input type="text" name="opsw">
  NEW PASSWORD:
  <input type="text" name="npsw">

  <center><button onclick="changer()" type="submit" name="submit" >CAHNGE</button></center>




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
  <script type="text/javascript">
    function changer()
    {
      <?php
      session_start();
      $uname=$_POST['uname'];
      $roll=$_POST['roll'];
      $opsw=$_POST['opsw'];
      $npsw=$_POST['npsw'];
      $con=mysqli_connect('localhost:3308','root');
      $q="update register1 set password='$npsw' where username='$uname' and roll='$roll' and password='$opsw' ";
      mysqli_select_db($con,'db3');
      $result=mysqli_query($con,$q);

      if($result)
      {
        ?>


        Swal.fire(
            {
            title:'ACCOUNT UPDATION DETAIL',
            text:"YOUR ACCOUNT UPDATION HAS BEEN SUCCESSFUL!",
            type:'success',
            
            }
            )
        setTimeout(set,3000);

        function set()
        {
          console.log("");
        }
       
        <?php
      }
      else
      {
        ?>
        Swal.fire(
            {
            title:'ACCOUNT UPDATION DETAIL',

            text:"YOUR ACCOUNT UPDATION HAS FAILED",
            type:'error',
            
            }

            )
         setTimeout(set,3000);

        function set()
        {
          console.log("");
        }
       
         
        <?php
      }
      ?>
    }
    
  </script>

  
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