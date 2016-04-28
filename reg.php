<html>
<body>
<?php
include_once("include/db connection.php");

$a1=$_POST['user_fname']; 
$a2=$_POST['user_mname']; 
$a3=$_POST['user_lname']; 
$a4=$_POST['gender']; 
$a5=$_POST['user_age']; 
$a6=$_POST['intrest']; 
$a7=$_POST['address']; 
$a8=$_POST['user_mob']; 
$a9=$_POST['user_email']; 
$a10=$_POST['user_pass']; 


$sql = "INSERT INTO registration (firstname,middlename,lastname,gender,age,intrested,address,mobile,emailid,password) VALUES ('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
$result = mysql_query($sql);
if ($result==false)
{
    die(mysql_error());
}
else 
{
 echo "Registered sucessfully";
}
mysql_close($conn);
?>
</body>
</html>