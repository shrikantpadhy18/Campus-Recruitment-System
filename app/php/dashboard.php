<?php
  session_start();
  if ( !isset($_SESSION['cid'])) {
    # code...
    header('location:http://localhost/app/html/companylogin.html');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>


  <link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>   

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

 <!-- Compiled and minified CSS -->
     <!-- Compiled and minified CSS -->

  <title>
    company section
  </title>
  <style type="text/css">
    .header {
   padding: 60px;
    text-align: center;
    background: #1abc9c;
    color: white;
    font-size: 30px;
}
form
{
  border:1px dotted red;
  background-image: url('https://www.thoughtco.com/thmb/dz3u4mqCKJkJTghjJI8tcxGO2Og=/768x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-583676186-58a1fe0a3df78c47586a758d.jpg');
  border-radius: 13%;
  scroll-behavior: smooth;
  width: 400px;
 position: absolute;
 bottom: 5%;
 left: 39%;
 color: red;
 
 font-style: italic;
 font-size: 22px;

}
.table
{
  position: absolute;
  left: 5%;
  bottom: 20%;
  width: 300px;
  background-image: url('https://www.sbsgroup.com.sg/wp-content/uploads/Register-Cleaning-Company-in-Singapore.jpg');
}
.table2
{
  position: absolute;
  right:5%;
  bottom: 17%;
  width: 400px;
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8-fVge5bSj9wQ9B91Kw08dlCMd-3qtacLYY23NJakBEcKeBt9jw');
}

.table3
{
  position: absolute;
  left:75%;
  bottom: 60%;
  width: 300px;
  background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8-fVge5bSj9wQ9B91Kw08dlCMd-3qtacLYY23NJakBEcKeBt9jw');
  border-radius: 24%;
  padding: 15px
}

</style>

</head>
<body style="background-image: url('https://jooinn.com/images/company-3.jpg');">
<header style="background-color: #006db0;" class="header">
    <img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
    <h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
      
   
   <a style="right:5px;background-color: orange;" href="http://localhost//app/php/logoutcp.php" class="btn btn-primary" >LOGOUT</a>
  </header>
  <center><h6>COMPANY VIEW</h6></center><br>


 
   
   
  <script>
    function destry()
    {
      session_destroy(); 
    }
  </script>
   <div id="overla" onclick="off()">
        <h6 style="font-size: 25px;z-index: 1;cursor: pointer;" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white' " id="text"><b><u style="font-size: 75px"></u></b><br>
  <?php
    $rowss=0;
    $result=0;
    if(isset($_POST['submit3'])){
   
    $search1=$_POST['search1'];
    $search2=$_POST['search2'];
  
    $con=mysqli_connect('localhost:3308','root');
    mysqli_select_db($con,'db3');
    $q="select * from studprofile where cgpi>=$search1 and designation='$search2'";
    $result=mysqli_query($con,$q);
  }
    if($result)
    {
      $rowss=mysqli_num_rows($result);
    }

    if($rowss>0)
        {
          ?>
          <table border="9px" bgcolor="#006db0">
            <tr>
              <th>
                ROLL-NUMBER
              </th>
              <th>
                STUDENT-NAME
              </th>

              <th>
                USER-NAME
              </th>
              <th>
                H.S.C PERCENTAGE
              </th>
              <th>
                S.S.C PERCENTAGE
              </th>

              <th>
                CGPI-OBTAINED
              </th>

              <th>
                SKILLS
              </th>
              <th>
                PROGRAMMING_LANGUAGE
              </th>

              <th>
               CONTACT_NO
              </th>
              <th>
                EMAIL ID
              </th>
              <th>
                DESIGNATION
              </th>
            </tr>

          <?php
          for($i=1;$i<=$rowss;$i++)
          {
            $out=mysqli_fetch_array($result);
            ?>
            <tr>
              <td align="center">
                <?php echo $out['roll']; ?>

              </td>
              <td align="center">
                <?php echo $out['stname']; ?>
              </td>

              <td align="center">
                <?php echo $out['uname']; ?>
              </td>
              <td align="center">
                <?php echo $out['hsc']; ?>
              </td>
              <td align="center">
                <?php echo $out['ssc'];  ?>
              </td>
              <td align="center">
                <?php echo $out['cgpi']; ?>
              </td>
              <td align="center">
                <?php echo $out['skills']; ?>
              </td>
              <td align="center">
                <?php echo $out['program']; ?>
              </td>
              <td align="center">
                <?php echo $out['contact']; ?>
              </td>
              <td align="center">
                <?php echo $out['email']; ?>
              </td>
              <td align="center">
                <?php echo $out['designation']; ?>
              </td>
            </tr>
            
            <?php

          }
        }
        
        ?>
    </table>
    </h6>
    </div>

<table class="table" border="2px">
   <form method="POST" action="http://localhost/app/php/dashboard.php">
  <tr><td>  CGPI:<input type="search" name="search1" placeholder="enter cgpi needed" style="padding-top: 10px;margin-top: 20px"><br></td></tr>
  <tr><td>  ROLE:<input type="search" name="search2" placeholder="DESIGNATION" style="padding-top: 10px;margin-top: 20px"><br></td></tr>
   <tr><td> <center><input type="submit" name="submit3" value="STUDENT DETAILS" class="btn btn-primary" onclick="on()" style="padding-top: 10px;margin-top: 20px"></center></td></tr>
  
  </form>
</table>

  <script type="text/javascript">
  function on() {
  document.getElementById("overla").style.display = "block";
}

function off() {
  document.getElementById("overla").style.display = "none";
}
 
</script>

 

  <?php
  $y=$_SESSION['cid'];
  ?>

<form method="POST" action="http://localhost/app/php/dashboard.php">
  company name:<input type="text" name="cname" value=<?php echo "$y";?> readonly> 
  skills required:<input type="text" name="skill" placeholder="skills needed" required><br>
  cgpi required:<input style="margin-top: 20px" type="number" placeholder="cgpi needed" name="cgpi" required><br>
  ssc percentage:<input style="margin-top: 20px" type="number" name="ssc" placeholder="ssc %" required><br>
  hsc percentage:<input style="margin-top: 20px" type="number" name="hsc" placeholder="hsc %" required><br>
  package:<input style="margin-top: 20px" type="text" name="package" placeholder="package" required><br>
  <center><input type="submit" name="submit2" value="SET CREDENTIALS" class="btn btn-primary" onclick="fun()"></center>


</form>

<table border="2px;" class="table2">
<form action="http://localhost/app/php/testmail.php" method="POST">

  <tr>
    <td>
     EMAIL ID: <input type="text" name="email" placeholder="enter mail">
    </td>
  </tr>
  <tr>
    <td>
    MESSAGE:<input type="text" name="mssg" placeholder="message">
    </td>
  </tr>
  <tr>
    <td>
      <center><input class="btn btn-primary" type="submit" value="send"></center>
    </td>
  </tr>
</form>
</table>

<script type="text/javascript">
  

  function fun()
  {
    <?php
      $name=$_POST['cname'];
      $skill=$_POST['skill'];
      $cgpi=$_POST['cgpi'];
      $ssc=$_POST['ssc'];
      $hsc=$_POST['hsc'];
      $package=$_POST['package'];    
      $con=mysqli_connect('localhost:3308','root');
      mysqli_select_db($con,'db3');
      $q="insert into companyrequirements(cgpi,skillsneeded,ssc,hsc,package,name) values($cgpi,'$skill',$ssc,$hsc,'$package','$y')";
      $out=mysqli_query($con,$q);
      if($out)
      {
        ?>
        alert("CREDENTIALS HAS BEEN ADDED SUCCESSFULLY");
        <?php
      }
      else
      {
        ?>
        alert("SMOETHING WENT WRONG,TRY AGAIN");
        <?php
      }
    ?>
  }
  </script>



  <form action="http://localhost/app/php/searchresume.php" method="POST" class="table3">
    <table >
      <tr>
        <td>
           ENTER ROLL NO:<input type="search" name="search" required>
        </td>
      </tr>
      <tr>
        <td>
        <center>  <input type="submit" name="submit" value="FINDRESUME"></center>
        </td>
      </tr>
    </table>
  
  </form>
   <div class="footer">
  <p>"knowledge is power"</p>
</div>


</body>
</html>










   