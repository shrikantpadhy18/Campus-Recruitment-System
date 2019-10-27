<?php
session_start();


?>

<html>
    <head>
        <style>
            div.abc{
                background-color: gainsboro;
                position: absolute;
                width: 600px;
                height: 400px;
                z-index: 15;
                top: 50%;
                left: 50%;
                margin: -200px 0 0 -300px;
                border: 4px solid black;
                border-radius: 14px;
            }
            div.bc{
                position: absolute;
                width: 600px;
                height: 300px;
                z-index: 15;
                top: 50%;
                left: 50%;
                margin: -30px 0 0 -300px;
                /*border: 4px solid black;
                border-radius: 14px;*/
            }
            input[type=submit] {
                background-color: black; 
                color: white;
                padding: 10px 20px;
                text-align: center;
                align-self: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 14px;
                border: 4px solid black;
                /*margin: 10px 10px;*/
                -webkit-transition-duration: 0.3s; 
                transition-duration: 0.3s;
                cursor: pointer;
            }
            input[type=submit]:hover
            {
                background-color: blue;
                color: white;
                border: 4px solid blue;
            }
            input[type=file] {
                color: black;
                padding: 10px 20px;
                text-align: center;
                border: 4px solid black;
                font-family: century gothic;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                border-radius: 14px;
                /*margin: 5px 5px;*/
            }
        </style>
    </head>
    <body>
        <form enctype="multipart/form-data">
            <div class="abc"style="font-family:century gothic; text-align:center; font-size: 30px;">
                <img src="uploadsymbol.png" height="180" width="290">
                <div class="bc">
                    <b>Upload Excel Sheet of Marks</b><br><br><input type="file" accept=".xlsx" name="myFile"><br><br>
                    <input type="submit" value="Upload">
                </div>
            </div>
        </form>


        <?php
			$result=0;
			if(isset($_POST['upload1']) and $_FILES['upfile']['name']!='')
			{
			$name=$_FILES['upfile']['name'];
			$tempname=$_FILES['upfile']['tmp_name'];
			$roll=$x;
			$data=explode(".", "$name");
			$extension=$data[1];
			
			$allowed=array('xlsx');

		
			$folder="C:/wamp64/www/Nihar/student/".$name;
			
			if(move_uploaded_file($tempname, $folder) and $name!='' and in_array($extension, $allowed))
			{
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'db2');
				

				$q="insert into files(folder) values('$folder')";
				
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
					alert("please upload in xlsx format");
				</script>
				<?php
			}

		}
			
			?>

    </body>
</html>