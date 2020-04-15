<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

	<script type="text/javascript">
		
		function f1()
		{
			var id=document.getElementById("uid").value;
			var pass=document.getElementById("upassword").value;

			if(id==""||pass=="")
			{
				document.getElementById("loginmsg").innerHTML="Null Submission";
			}	
			else
			{
				var xhttp = new XMLHttpRequest();
				xhttp.open("POST","loginverify.php",true);
				xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
				xhttp.send('uid='+id+'&pass='+pass);

				xhttp.onreadystatechange = function()
				{
					//alert(this.responseText);

					if (this.readyState == 4 && this.status == 200)
					{
						if (this.responseText=="admin")
						{
							window.location.href="home.php";
						}
						else if(this.responseText=="doctor")
						{
							window.location.href="dochome.php";
						}
						else if(this.responseText=="staff")
						{
							window.location.href="staffhome.php";
						}
						else
						{
							document.getElementById("loginmsg").innerHTML="Invalid user ID or Password";
							alert(this.responseText);
						}
						
					};

				}
			}
		}
	</script>

	<form method="POST">
		<fieldset align="center">
			<legend>
				LOGIN
			</legend>

				<center>
							<br>
							<input type="text" name="uid" id="uid" value="" placeholder="Enter your user ID"> <br>
							 <br>
							<input type="password" id="upassword" name="upassword" value="" placeholder="Enter your Password">
							<p id="loginmsg"></p>
							<input type="button" name="submit" value="Login" onclick="f1()">
							<u><a href="register.php">Register</a></u>
				</center>



		</fieldset>


	</form>

</body>
</html>