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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
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
.tabular{
  width: 900px;
  margin-left: 20%;
  background-color: white;

}
  a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
a:hover, a:active  {
  background-color: red;
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

 input[type="submit"]:hover
{
  cursor: pointer;
  background: #ffc107;
  color: #000;

}
input[type='text'],input[type='password']
{
  border-radius: 5px;
  padding: 12px;
}
.table
{
  width: 600px;
  padding: 25px;
  margin-left: 20%;
  margin-top:20px;
  background-color: white;
 background-color: white;
 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
  
}
@media screen and (max-width: 650px)
{
  
  #overla p
  {
    font-size: 15px;
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
td,th
{

  padding: 20px;
}
}

</style>

</head>
<body >
<header style="background:transparent;"  id="jumbo" style="height: 100px;border-radius: 1px;">
    <img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
    <center><h1><b style="font-style: italic;color: black">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
     <a class="fa fa-power-off"  href="http://localhost/app/php/logoutcp.php" >LOGOUT</a>
  </header>

  <center><h6>COMPANY VIEW</h6></center><br>

 <div id="overla" ondblclick="off()" style="overflow-x:auto;">
        <p style="font-size: 25px;" id="text"><b><u style="font-size: 25px"></u></b><br>
      
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
          <table style="background-color: white;-moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;">
            <tr>
              <th style="background-color: black;color: white;">
                ROLL-NUMBER
              </th>
              <th style="background-color: black;color: white;">
                STUDENT-NAME
              </th>

              <th style="background-color: black;color: white;">
                USER-NAME
              </th>
              <th style="background-color: black;color: white;">
                H.S.C PERCENTAGE
              </th>
              <th style="background-color: black;color: white;">
                S.S.C PERCENTAGE
              </th>

              <th style="background-color: black;color: white;">
                CGPI-OBTAINED
              </th>

              <th style="background-color: black;color: white;">
                SKILLS
              </th>
              <th style="background-color: black;color: white;">
                PROGRAMMING_LANGUAGE
              </th>

              <th style="background-color: black;color: white;">
               CONTACT_NO
              </th>
              <th style="background-color: black;color: white;">
                EMAIL ID
              </th>
              <th style="background-color: black;color: white;">
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
  <tr><td>COMPANY NAME<input type="text" name="cname" value=<?php echo "$y";?> readonly></td></tr> 
  <tr><td> REQUIRED SKILLS<input type="text" name="skill" placeholder="skills needed" required><td></tr>
  <tr><td> REQUIRED CGPI<input style="margin-top: 20px" type="number" placeholder="cgpi needed" name="cgpi" required></td></tr>
  <tr><td>SSC PERCENTAGE<input style="margin-top: 20px" type="number" name="ssc" placeholder="ssc %" required></td></tr>
  <tr><td>HSC PERCENTAGE<input style="margin-top: 20px" type="number" name="hsc" placeholder="hsc %" required></td></tr>
  <tr><td>PACKAGE<input style="margin-top: 20px" type="text" name="package" placeholder="package"  required></td></tr>
  <tr><td><center><input type="submit" name="submit2" value="SET CREDENTIALS"  required></center></td></tr>
  <br>
  <hr>

</form>
</table>
<hr>


<?php
  

 if(isset($_POST['submit2']))
  {
    
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

        

          <script src="http://localhost/app/sweetalert/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
            <script>
            Swal.fire(        
            {
              imageUrl: 'https://icon-library.net/images/criteria-icon/criteria-icon-22.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'ELIGIBILITY CRITERIA',
              text:"CREDENTIALS ADDED SUCCESSFULLY",
              confirmButtonText: 'DONE',
              type:'success',
              
            }
            )
            
            setTimeout(revert,3000);

            function revert()
            {
              
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
              imageUrl: 'https://icon-library.net/images/criteria-icon/criteria-icon-22.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: 'Custom image',
                animation: true,
              title:'ELIGIBILITY CRITERIA',
              text:"SOMETHING WENT WRONG",
              confirmButtonText: 'TRY AGAIN',
              type:'error',
              
            }
            )
            
            setTimeout(revert,3000);

            function revert()
            {
              
            }
          </script>
        <?php
      }
   
  }
  ?>



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










   