<?php
session_start();

$con=mysqli_connect("localhost","root","","projo");

mysqli_select_db($con,'projo');

$name=$_POST['user'];
$password=$_POST['password'];

$s= "SELECT `name`, `password` FROM `usajili` WHERE name='$name'& password='$password'";
$result=mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num==1){
$_SESSION['username']=$name;
   header('location:home.php');


}else{
    header('location:login.php');




}

?>