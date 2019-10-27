
<?php 
session_start();
if (!isset($_SESSION['roll'])) {
        # hcode...
    header('location:http://localhost/app/php/login.php');
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	  
	<link rel="stylesheet" type="text/css" href="http://localhost/app/css/sprofilecreate.css"/>   

	

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->


 <!-- Compiled and minified CSS -->
     <!-- Compiled and minified CSS -->

	<title>
		student section
	</title>
</head>
<body style="background-image: url('https://jooinn.com/images/company-3.jpg'); ">
<header  id='jumbo'>
		<img style="position: relative;left: 0px;width: 160px;height: 80px" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Rait_new_logo_png.png" align="left" alt="" class="rectangle responsive-img">
		<h1 style="text-align: center;"><b style="font-style: italic;">RAMRAO ADIK INSTITUTE OF TECHNOLOGY</h1>
			<center><a href="http://localhost/app/php/studentview1.php">back</a></center>

		</header>
			<?php

		$x=$_SESSION['roll'];
		$y=$_SESSION['susername'];
		?>
		 <p style="position: relative;text-align: right;font-size: 30px;color: red;"><?php echo "hello $x($y)";?></p>
		<?php
		$con=mysqli_connect("localhost","root");
		mysqli_select_db($con,"db3");
		$q="select * from register1 where roll='$x' and username='$y' ";
		$result=mysqli_query($con,$q);
		if($result)
		{
			$rows=mysqli_num_rows($result);
			$out=mysqli_fetch_array($result);
			$name=$out['name'];
			$email=$out['email'];
			$cno=$out['number'];
		}
	?>

	
<a href="http://localhost/app/php/logoutst.php" >LOGOUT</a>
	<p style="text-align: center; text-shadow: rgba(120,120,112,0.4);"><?php echo $name;?></p>
<div class="tabular">	
	<table  class="table">
	<form action="http://localhost/app/php/sprofilecreate.php" method="POST"  name="profile">
		
		<tr><td>YOUR NAME:
		<input type="text" name="stname" placeholder="ENTER NAME" value=<?php echo "'$name'"; ?>  readonly></td></tr>

		<tr><td> Your username
		<input type="text" name="use" id="user" value=<?php echo "'$y'"; ?>  readonly></td></tr>

		<tr><td>roll no
		<input type="text" name="rol" value=<?php echo "$x"; ?> readonly></td></tr>

		<tr><td>YOUR H.S.C AGGREGATE
		<input type="number" name="hcs" placeholder="HSC AGG" required></td></tr>

		<tr><td>YOUR SSC AGGREGATE
		<input type="number" name="ssc" required><td></tr>

		<tr><td>AVERAGE CGPI
		<input type="number" name="cgpi" required></td></tr>

		<tr><td>YOUR SKILLS 
		<input type="text" name="skill" placeholder="skill" required></td></tr>

		<tr><td>Programming Language Known
		<input style="column-width: 50%" type="text" name="language" required></td></tr>

		<tr><td>Contact Number
		<input type="number" name="no" value=<?php echo "$cno"; ?> readonly>

		EmailId
		<input type="email" name="emai" value=<?php echo "$email"; ?> readonly></td></tr>
		<tr><td>Designation:
		<input type="text" name="Designation" required>
		</td></tr>
		<tr><td><center><input  type="submit" name="sub" value="ENTER" >
		<input  type="submit" name="edit" value="EDIT"></td></tr></center>
	
	</form>
</table>

<?php
if(isset($_POST['edit'])){
		$row=0;
		$con=mysqli_connect('localhost','root');
		mysqli_select_db($con,'db3');
		$check="select * from studprofile where roll='$x' ";
		$result=mysqli_query($con,$check);

		if($result)
		{
			$row=mysqli_num_rows($result);
		}
		if($row and isset($_POST['edit']))
		{
			$sscc=$_POST['ssc'];
			$hscc=$_POST['hcs'];
			$cgpii=$_POST['cgpi'];
			$skillss=$_POST['skill'];
			$programs=$_POST['language'];
			$designations=$_POST['Designation'];

			$q="update table studprofile set ssc=$sscc,hsc=$hscc,cgpi=$cgpii,skills='$skillss',program='$programs',designation='$designations'";
			$done=mysqli_query($con,$q);
			if($done)
			{
				?>
				<script type="text/javascript">
					alert("updation done successfully");
				</script>
				<?php
			}
			else
			{
				?>
				<script type="text/javascript">
					alert('updation failed');
				</script>
				<?php
			}
		}
}
?>
	

	
			<?php
			if (isset($_POST['sub'])) {
				# code...
			
			$name=$_POST['stname'];
			$use=$_POST['use'];
			$rol=$_POST['rol'];
			$hscc=$_POST['hcs'];
			$sscc=$_POST['ssc'];
			$cgpii=$_POST['cgpi'];
			$skillss=$_POST['skill'];
			$programs=$_POST['language'];
			$contacts=$_POST['no'];
			$emai=$_POST['emai'];
			$designations=$_POST['Designation'];

			$con=mysqli_connect('localhost','root');
			mysqli_select_db($con,'db3');
			$r="insert into studprofile (roll,stname,uname,ssc,hsc,cgpi,skills,program,contact,email,designation) values ('$rol','$name','$use',$sscc,$hscc,$cgpii,'$skillss','$programs',$contacts,'$emai','$designations')";
			$out=mysqli_query($con,$r);
			
			if($out and isset($_POST['sub']))
			{
				?>
				<script type="text/javascript">
				alert("PROFILE HAS BEEN CREATED SUCCESSFULLY");
				</script>
				<?php
			}
			else
			{
				?>
				<script type="text/javascript">
				
				alert("PROFILE COULDN'T BE CREATED!");
				</script>
				<?php
			}
			
		}
		
		?>

	

	<table  class="table">
	<form method="POST" action=""  enctype="multipart/form-data">
		
			<h6>UPLOAD RESUME IN PDF FORMAT ONLY</h6>
			<tr>
				<td><input type="text" name="roller" value=<?php echo "$x";?> readonly></td>
			</tr>
			<tr>
				<td><input type="file" name="upfile" value=""></td>
			</tr>
			<tr>
				<center><td><input class="btn btn-primary" type="submit" value="upload" name="upload1"></td></center>
			</tr>
		
	</form>
	</table>
	</div>

	
	

			<?php
			$result=0;
			if(isset($_POST['upload1']) and $_FILES['upfile']['name']!='')
			{
			$name=$_FILES['upfile']['name'];
			$tempname=$_FILES['upfile']['tmp_name'];
			$roll=$x;
			$data=explode(".", "$name");
			$extension=$data[1];
			
			$allowed=array('pdf');

		
			$folder="C:/wamp64/www/app/student/"."$x".$name;
			
			if(move_uploaded_file($tempname, $folder) and $name!='' and in_array($extension, $allowed))
			{
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'db3');
				

				$q="update studprofile set image='$folder' where roll ='$x' ";
				
				$result=mysqli_query($con,$q);
			
				if($result)
				{
					?>
					<script type="text/javascript">
						alert("resume uploaded");
					</script>
					<?php
				}
				else
				{
					?>
					<script type="text/javascript">
						alert('uploading failed');
					</script>
					<?php
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("please upload your resume in the  pdf format");
				</script>
				<?php
			}

		}
			
			?>

			
</script>
</body>

</html>