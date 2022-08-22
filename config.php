<?php 

$server="remotemysql.com";
$username="iShEom44Jh";
$password="OmdHGwKOX5";
$db="iShEom44Jh";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
