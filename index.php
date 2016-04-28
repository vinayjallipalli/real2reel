
<?php
session_start();
if(isset($_SESSION['login_user']) && isset($_SESSION['login_pass']))
	{
	header('Location: profile.php');
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Real2Reel</title>	
	<link rel="stylesheet" type="text/css" href="style/form_style.css"/>
	
</head>

<body>
<div class="login_container">
	<div class="form_header">SIGN IN</div>	
	<form class="login_form" method="post" action="login.php">
		<label for="Username">USERNAME</label><br>
		<input type="text" size="20" name="login_user"/><br><br>		
		
		<label for="pass">PASSWORD</label>
		<input type="password" size="20" name="login_pass"/>

		<input type="submit" value="SUBMIT">
<p id="forgot_link" style="text-align:center; position:relative; top:-20px;"><a href="register.html" style="text-decoration:none; color:#2D3047;font-size:12px;">FORGOT PASSWORD?</a></p>
<div class="social_media" >FACEBOOK</div>
<div class="social_media" style="position:relative;bottom:36px;left:60%;background-color:#FF845E">GMAIL</div>
<p id="signup_link" style="text-align:center; position:relative; top:0px;">Not a member? <a href="register.html" style="text-decoration:none; color:#E84865;">SIGN UP</a></p>
</form>
</div>
</body>
</html>
