<?php
require "connect.php";

$id = $_GET['id'];

$delete_user = "DELETE FROM users WHERE id = '$id'";

$connect -> query($delete_user);

header("location:../users.php");



