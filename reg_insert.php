<?php 
	include 'connect.php';
    $query = mysqli_query($connect,"SELECT * FROM users ");
	$avatar=$query->fetch_assoc();
if (!empty($_POST['email']) && !empty($_POST['fullName']) && !empty($_POST['password'])) {
		if ($_POST['email'] == $avatar['email']) {
		  echo "К большому сожалению такая почта уже занята";
		}
		else{
            $query2 = mysqli_query($connect, "INSERT INTO users ( email, fullName, password ) VALUES ('". $_POST['email'] . "','". $_POST['fullName'] . "','". $_POST['password'] . "')");
            header("Location: go.php")
		}	
	}
	else {
		echo "Проверте всё ли вы написали правильно?";
	}
 ?>
 <meta charset="utf-8">