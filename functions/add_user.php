<?php
require_once "connect.php";

if(!isset($_POST['submit'])){
  header("../users.php");
  exit();
}


$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$privileges = $_POST['privileges'];


$password = $_POST['password'];
$password_hashed = password_hash($password,PASSWORD_DEFAULT);


$insert_user = "INSERT INTO users (username,password,email,address,phone,gender,privileges) 
VALUES
('$username','$password_hashed','$email','$address','$phone','$gender','$privileges')";


$connect -> query($insert_user);
header("location:../users.php");