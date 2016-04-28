<?php
session_start();
include_once("include/db connection.php");
if(!isset($_SESSION['login_user']) || !isset($_SESSION['login_pass'])){
 header("Location: index.php");
} 
?>

<html>
<head>
<title></title>
</head>
<body>
<center>
<h2><a href="./userlogout.php">Logout</a></h2>
<br/>
</center>
<?php
$uid=$_SESSION['login_user'];
echo "$uid";
$sql = "SELECT * FROM registration where emailid='$uid'";
$result = mysql_query("$sql");
if ($result==false)
{
    die(mysql_error());
}
$row = mysql_fetch_array($result);
echo '<img src="<php echo $row["image"]; ?>" height="100" width="100">'; 
mysql_close($conn);   
?>



</body>
</html>