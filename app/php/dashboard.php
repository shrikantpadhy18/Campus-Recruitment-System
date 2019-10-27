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
.tabular{
  width: 900px;
  margin-left: 20%;
  background-color: white;

}
.table
{
  width: 600px;
  padding: 25px;
  margin-left: 20%;
  margin-top:20px;
  background-color: orange;
  border-radius: 2px;
  
}
@media screen and (max-width: 650px)
{
  
  #overla p
  {
    font-size: 15px;
  }
  #overla table
  {
    font-size: 10px;
    
    margin-left: 1%;
    font-size: 15px;
    padding: 0px;
  }
  .tabular{
     position: absolute;
  margin-left: 0%;
  width: 550px;
  left: 0px;
  background-color: white;
  display: block;

}
.tabular h1
{

  font-size: 16px;
  margin-left: 0%;
}
.table
{
  width: 450px;
 
  margin-left: 0px;
  margin-top:20px;
  background-color: orange;
  border-radius: 2px;
  display: block;
  overflow-x:auto;
  
}
}

</style>

</head>
<body  style="background-image: url('https://jooinn.com/images/company-3.jpg');">
<div style="background-color:#1aa4b8;" class="jumbotron jumbotron-fluid" id='jumbo'>
  <div class="container">
      <img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
      <h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
      <center><h2 ><b>CAMPUS RECRUITMENT DRIVE</h2> </center>
        <a style="right:5px;background-color: orange;" href="http://localhost/app/php/logoutcp.php" class="btn btn-primary" >LOGOUT</a>
  
  </div>
</div>
  <center><h6>COMPANY VIEW</h6></center><br>

 <div id="overla" ondblclick="off()" style="overflow-x:auto;">
        <p style="font-size: 25px;" onmouseover="this.style.color='yellow'" onmouseout="this.style.color='white' " id="text"><b><u style="font-size: 25px"></u></b><br>
      
  <?php
    $rowss=0;
    $result=0;
    if(isset($_POST['submit3'])){
   
    $search1=$_POST['search1'];
    $search2=$_POST['search2'];
  
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'db3');
    $q="select * from studprofile where cgpi>=$search1 and designation LIKE '%$search2%' ";
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
                <form action="http://localhost/app/php/searchresume.php" method="POST" >
                <input readonly type="text" name="search" value="<?php echo $out['roll']; ?>" ></input>
                <input type="submit" name="su" value="resume">
              </form>

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
                <form action="http://localhost/app/php/testmail.php" method="POST">
                  <input readonly type="email" name="email" value="<?php echo $out['email']; ?>"></input>
                  <input type="submit" name="sub" value="send mail">
                </form>
                
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
    </p>

    </div>
    

<div class="tabular">

<table class="table" border="2px">
  <h1>Retrieving student details</h1>
   <form method="POST" action="http://localhost/app/php/dashboard.php">
  <tr><td>  CGPI:<input type="search" name="search1" placeholder="enter cgpi needed" style="padding-top: 10px;margin-top: 20px"><br></td></tr>
  <tr><td>  ROLE:<input type="search" name="search2" placeholder="DESIGNATION" style="padding-top: 10px;margin-top: 20px"><br></td></tr>
   <tr><td> <center><input type="submit" name="submit3" value="STUDENT DETAILS" class="btn btn-primary" onclick="on()" style="padding-top: 10px;margin-top: 20px"></center></td></tr>
  
  </form>
</table>
  <hr>



 

  <?php
  $y=$_SESSION['cid'];
  ?>
<table class="table" border="2px">
  <h1>Filling Up Company Criteria</h1>
<form  method="POST" action="http://localhost/app/php/dashboard.php">
  <tr><td>company name:<input type="text" name="cname" value=<?php echo "$y";?> readonly></td></tr> 
  <tr><td>skills required:<input type="text" name="skill" placeholder="skills needed" required><td></tr>
  <tr><td>cgpi required:<input style="margin-top: 20px" type="number" placeholder="cgpi needed" name="cgpi" required></td></tr>
  <tr><td>ssc percentage:<input style="margin-top: 20px" type="number" name="ssc" placeholder="ssc %" required></td></tr>
  <tr><td>hsc percentage:<input style="margin-top: 20px" type="number" name="hsc" placeholder="hsc %" required></td></tr>
  <tr><td>package:<input style="margin-top: 20px" type="text" name="package" placeholder="package"  required></td></tr>
  <tr><td><center><input type="submit" name="submit2" value="SET CREDENTIALS" class="btn btn-primary" onclick="fun()" required></center></td></tr>
  <br>
  <hr>

</form>
</table>
<hr>


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
      $con=mysqli_connect('localhost','root');
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



  <hr>
    <hr>
</div>  
<hr>
  </form>
   <div class="footer">
  <p>"knowledge is power"</p>
</div>


</body>
</html>










   