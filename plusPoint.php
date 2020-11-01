<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
$query = mysqli_query($connect,"SELECT * FROM countries where id = ".$_POST['countryId']);
$avatar=$query->fetch_assoc();
$avatar['points'] = $avatar['points'] + 1;
$query2 = mysqli_query($connect, "UPDATE countries SET points = ".$avatar['points']." WHERE id = ".$_POST['countryId']);
header("Location: board.php");
?>
