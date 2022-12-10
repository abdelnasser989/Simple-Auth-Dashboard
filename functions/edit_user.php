<!-- 
require "connect.php";
if(!isset($_POST['submit'])){
    header("location:../users.php");
    exit();
}
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$privileges = $_POST['privileges'];
$password = $_POST['password'];
if(!empty($password)){
$update_pass = "UPDATE users SET password = '$password' WHERE id = '$id'";
$connect -> query($update_pass);
}
$update_user = "UPDATE users SET username = '$username', email = '$email' , 
address = '$address' , phone = '$phone' , gender = '$gender' 
, privileges = '$privileges'  WHERE id = '$id' ";
$connect -> query($update_user);
header("location:../users.php"); --> 
<?php
require_once 'connect.php';
if(!isset($_POST['submit'])){
    header('location:../users.php')
    exit();
}
$username  = $_POST['username'];
$password  = $_POST['password'];
$email  = $_POST['email'];
$address = $_POST['address'];
$phone  = $_POST['phone'];
$gender = $_POST['gender'];
$privileges = $_POST['privileges'];
$password = $row_user['password'];
if(empty($password)){
  $update_password =  "UPDATE  users SET password = '$password'   WHERE id = '$id' ";
  $connect -> query($update_password);
}
  $update_users = " UPDATE  users SET username = '$username'   password = '$password'   email = '$email'
  address = '$address '  phone = '$phone'  gender = '$gender'   privileges = '$privileges'    WHERE id = '$id'";
  $connect -> query($update_users);
  header('location:../users.php');

 





?>