

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/mystyle.css"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">       

	<title></title>
	<style type="text/css">
		.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
  border-radius: 15%;
}
	</style>
</head>
<body style="background-image: url('https://www.goireland.in/images/companies.jpg');">
	<header style="background-color: #006db0;" class="header" id="jumbo">
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>

			<a href="http://localhost/app/html/homepage.html">Back</a>
	</header>

	<div id="id02" class="modal">
  
  <form name="register" class="modal-content animate" method="POST"  action="" onsubmit ="checkit()" id="formreg">
    <div class="imgcontainer">
      <img src="http://localhost/app/images/img_avatar.png" alt="Avatar" class="avatar" >
    </div>

    <div class="container">
      <label for="uname"><b>Set Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Set Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <ol>
        <li>password should be of minimum 8 and maximum 13 characters length</li>
        <li>password should contain one uppercase letter and one lower case letter</li>
        <li>password must have 1 special character</li>
        <li>password must have numeric values minimum :5 and naximum :10</li>
        <li>password should start from alphabet['CAPITAL LETTER']</li>
      </ol>
      <label id="gets1" style="color: red;visibility: hidden;">INVALID PASSWORD</label><br>
       

      <label for="name"><b>Your Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required>
      <label id="gets2" style="color: red;visibility: hidden;">INVALID NAME</label><br>
      
      <br>
      <label for="branch">select branch</label>
      <select id="branch" name="branch" value="branch">

        <option>CS</option>
        <option>IT</option>
        <option>EX</option>
        <option>EL</option>
        <option>IN</option>
      </select><br>

      <label for="roll"><b>Your Roll Number</b></label>
      <input type="text" placeholder="Enter Roll Number" name="roll" required>
      <label id="gets3" style="color: red;visibility: hidden;">INVALID ROLLNO</label><br>
       
      <label for="contact"><b>Your Contact Number</b></label>
      <input type="text" placeholder="Enter Contact Number" name="contact" required>
      <label id="gets4" style="color: red;visibility: hidden;">INVALID NUMBER</label><br>
       
      <label for="email"><b>Your Email Id</b></label>
      <input type="email" placeholder="Enter Email Id" name="email" required>
      <label id="gets5" style="color: red;visibility: hidden;">INVALID EMAIL</label><br>
       
        
      <button onclick="document.getElementById('id02').style.display='block' " type="submit">Register</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        <input type="reset" name="reset" value="reset">
      </label>

  <script type="text/javascript">
  function validation()
  {
    
    var number=document.forms["register"]["contact"].value;
    var email=document.forms["register"]["email"].value;
    var password=document.forms["register"]["psw"].value;
    var name=document.forms["register"]["name"].value;
    var roll=document.forms["register"]["roll"].value;
    var sub=document.forms['register']['branch'].value;

    regx=/^[7-9][0-9]{9}$/;
    regx1=/@gmail.com$/;
    regx2=/^[a-zA-z][!@#$%^&*()]{1,1}[a-z][0-9]{5,10}/;
    regx3=/[^0-9]$/;
    regx4=new RegExp("^[1][5-9]" +sub+"[0-9]{4}$");

    if(regx.test(number)==false)
    {
      document.getElementById('id02').style.display='block';
      document.getElementById('gets4').style.visibility='visible';
      
      number.focus();

      return false;
    }

     if(regx1.test(email)==false)
    {
      document.getElementById('id02').style.display='block';
      document.getElementById('gets5').style.visibility='visible';
      alert('invalid email');
      
      email.focus();
      return false;
    }
     if(regx2.test(password)==false)
    {
      document.getElementById('id02').style.display='block';
      document.getElementById('gets1').style.visibility='visible';
      alert('invalid password');
      
      password.focus();
      return false;
    }
     if(regx3.test(name)==false)
    {
      document.getElementById('id02').style.display='block';
      document.getElementById('gets2').style.visibility='visible';
      alert('invalid name');
      
      name.focus();
      return false;
    }
   if(regx4.test(roll)==false)
    {
      document.getElementById('id02').style.display='block';
      document.getElementById('gets3').style.visibility='visible';
      alert('sub'+sub);
      alert('invalid roll')
      
      
      roll.focus();
      return false;
    }
  
    return true;
  


  }
  function checkit()
  {
    var checker=validation();
    if(checker==true)
    {
      document.getElementById('formreg').action="http://localhost/app/php/doit.php";
      document.getElementById('formreg').submit();
    }
    else
    {
      document.getElementById('formreg').action="#";
    }
  }
</script>
 <div class="footer">
  <p>"knowledge is power"</p>
</div>

</body>
</html>