<?php
$servername='localhost';
$username='root';
$password='1234';
$dbname = "applicants";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>