<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">      
  <!-- Latest compiled and minified CSS -->

	<title></title>
	<style type="text/css">
		.header {
 	 padding: 60px;
  	text-align: center;
  	background: #1abc9c;
  	color: white;
  	font-size: 30px;
}
	</style>
</head>
<body>
	<header style="background-color: #006db0;" class="header">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<a href="http://localhost/app/html/homepage.html">Back</a>
	</header>
	<br>
	<br>
	<hr>

<div id="id01" class="modal">
  <section style="background-image: url('http://localhost/app/images/texture1.jpeg');">
  
  <form class="modal-content animate" action="http://localhost/app/php/actionpage.php" method="POST">
    <div class="imgcontainer">
      
      <img src="http://localhost/app/images/img_avatar.png" alt="Avatar" class="avatar" >
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw1"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw1" required>

      <label for="roll"><b>Enter Roll No</b></label>
      <input type="text" placeholder="Enter Roll No" name="roll" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
       
      <a href="#display">change password</a>
    </div>
  </form>
</section>


<form id="display" class="modal-content animate"  action="http://localhost/app/php/login.php" method="POST">
 <span><center ><h1><u><b>CHANGE PASSWORD</b></u></h1></center></span><br>
  USERNAME:
  <input type="text" name="uname">
  ROLL:
  <input type="text" name="roll">
  OLD PASSWORD:
  <input type="text" name="opsw">
  NEW PASSWORD:
  <input type="text" name="npsw">

  <center><input onclick="changer()" type="submit" name="submit" value="submit"></center>
  
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
        alert("UPDATION DONE CAREFULLY");
        <?php
      }
      else
      {
        ?>
        alert("UPDATION FAILED,TRY AGAIN");
        <?php
      }
      ?>
    }
    
  </script>
</form>

</div>
 <div class="footer">
  <p>"FORGOT PASSWORD?"</p>
  <form method="GET" id="fpassword" action="http://localhost/app/php/forgot.php" >
  Username:<input size="4" style="border-radius: 15%;" type="text" name="username">
  Roll:<input style="border-radius: 15%;" type="text" name="rollno">   


  <input type="submit" name="submit" value="submit">
  </form>
  
</div>

  
</body>
</html>