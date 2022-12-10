<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
define("DBNAME","bravo1");

$connect = new mysqli($server_name,$user_name,$password,DBNAME);


$connect -> set_charset("utf8");

if(!$connect){
 echo "not connected";
}