<?php
$host="localhost";
$user="root";
$pass="";
$db="sai";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    echo"ok";
}
else{
    echo"db not connected";
}