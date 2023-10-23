<?php
$localhost="localhost";
$username="root";
$password="";
$database="magwanoforest";
$con=mysqli_connect($localhost,$username,$password,$database);

if(!$con){
die(mysqli_error($con));
}
?>