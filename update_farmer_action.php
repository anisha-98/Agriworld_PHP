<?php

session_start();
$id=$_SESSION['loginid'];

$mysql=new mysqli("localhost","root","","agriworld");



$firstname=$_POST['fname'];
$lastname=$_POST['lname'];

$address=$_POST['address'];
$date=$_POST['dob'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$adhar=$_POST['adhar'];

$sql="update tb_farmer set fname='$firstname',lname='$lastname',address='$address',dob='$date',phno='$phone',email='$email',adar='$adhar' where loginid=$id"; 
header("location:update_succ_farmer.php");
mysqli_query($mysql,$sql);
?>