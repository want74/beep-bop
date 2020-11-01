<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
$queryUsers = mysqli_query($connect,"DELETE FROM cards WHERE id= " .$_POST['id']);
header("Location: board.php")
?>