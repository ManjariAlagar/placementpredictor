<?php
$url='127.0.0.1:3306';
$username='root';
$password='1234';
$conn=mysqli_connect($url,$username,$password,"applicants");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>