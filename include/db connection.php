<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '2938';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   //echo 'Connected successfully';
   echo "<br>";
   

$status=mysql_select_db('real2reel');
if ($status==false)
{
    die(mysql_error());
}
?>