 <?php
session_start();
 ?>
 <html>
 <head>
<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>  
  <link rel="stylesheet" type="text/css" href="http://localhost/app/css/companyregister.css"/> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>
    Student Details
  </title>
  <style type="text/css">
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
  width: 92px;
}
label,th,td
{
  color:black;
}
td,th
{
  padding: 20px;
}
th
{
  background-color: black;
  color: white;
}
  </style>
 </head>
 <body>

 <div id="overla" ondblclick="off()" style="overflow-x:auto;">
        <p style="font-size: 25px;z-index: 1;cursor: pointer;" id="text"><b><u style="font-size: 25px"></u></b><br>

          <center><h1 >STUDENT DETAILS <i class="glyphicon glyphicon-user"></i></h1></center>
          <hr>

  <?php
    $rowss=0;
    $result=0;
    $em=-1;
  
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,'db3');
    $q="select * from studprofile ";
    $result=mysqli_query($con,$q);
  
    if($result)
    {
      $rowss=mysqli_num_rows($result);
    }

    if($rowss>0)
        {
          ?>
          <table  bgcolor="white">
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
               
                <hr>
                <form action="" method="post">
                  <input readonly type="email" name="email" value="<?php echo $out['email']; ?>"></input>
                  <input readonly type="text" name="roll" value="<?php echo $out['roll']; ?>"></input>
                <input type="submit" value="deleteRecord" name="del">

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
    </table>

    <?php
    if(isset($_POST['del']))
    {
      
      $roll=$_POST['roll'];
      $email=$_POST['email'];
      $msg="Your Profile Has Been Deleted By Admin,Kindly Meet Admin For Any Query";
      $to="$email";
      $subject="Response From  Admin" ;
      $message="'$msg'";
      $head="From:prashantpadhy21@gmail.com";
      $result1=0;


          $con1=mysqli_connect('localhost','root');
          mysqli_select_db($con1,'db3');
          $check ="select * from studprofile where roll='$roll' ";
          $status=mysqli_query($con,$check);
          $row=mysqli_num_rows($status);
          if($row){
          $q1="delete from studprofile where roll='$roll' ";
          $result1=mysqli_query($con1,$q1);
        
         }
          if ($result1) {
            
            if(mail($to,$subject,$message,$head))
              {?>
        
                  <script>
                   alert("Profile Has Been Deleted");
                  </script>
             <?php
       
              }
            
          }
          else
          {
            ?>
            <script type="text/javascript">
            alert('Profile could not be deleted');
             </script>
          <?php
          }
         ?>
          
       
<?php
      
     }


    ?>
    <hr>

  <center>  <a class="fa fa-arrow-circle-left" href="http://localhost/app/php/companyregister.php">BACK</a></center>

</body>