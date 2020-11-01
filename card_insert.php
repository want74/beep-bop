<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
#$query = mysqli_query($connect, "INSERT INTO cards ( cardTitle, tagId, description, colId, countryId, points, id ) VALUES (". $_POST['cardTitle'].",".$_POST['tagId'].",". $_POST['description'] .",". $_POST['colId']. ",". $_POST['countryId']. ",1,NULL)");
$query = mysqli_query($connect, "INSERT INTO cards (cardTitle, tagId, description, colId, countryId, points, id) VALUES (". $_POST['cardTitle'].",".$_POST['tagId'].",". $_POST['description'] .",". $_POST['colId']. ",". $_POST['countryId']. ", 1, 0)");
echo "INSERT INTO cards (cardTitle, tagId, description, colId, countryId, points, id) VALUES (". $_POST['cardTitle'].",".$_POST['tagId'].",". $_POST['description'] .",". $_POST['colId']. ",". $_POST['countryId']. ",1,NULL)";
#header("Location: board.php")  
?>