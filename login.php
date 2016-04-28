<html>
<body>
<?php
session_start();
include_once("include/db connection.php");
$uid=$_POST['login_user']; 
$pass=$_POST['login_pass'];   
$sql = "SELECT * FROM registration where emailid='$uid' and password='$pass'";
$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}
$count=mysql_num_rows($result);

		if ($count=1)
		{

		$_SESSION['login_user'] = $uid;
 		$_SESSION['login_pass'] = $pass;
		header("Location:profile.php");
		} 
		else 
		{
		header("Location: index.php");
		}
mysql_close($conn);
?>
</body>
</html>