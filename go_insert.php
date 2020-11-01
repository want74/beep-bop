<?php 
session_start();
include 'connect.php';
$query = mysqli_query($connect,"SELECT * FROM users where email = '".$_POST['email']."'");
$avatar=$query->fetch_assoc();
if (!empty($_POST['email']&& $_POST['email']== $avatar['email']) ) {
	if ($_POST['password'] == $avatar['password']) {
        $_SESSION['session_username']= $avatar['id'];
		header('Location: board.php');
        echo $_SESSION['session_username'];
	}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

	
}else{
	echo "К сожалению что-то пошло не так. Возможно вы ввели не правильно ник или пароль";
}

?>    
<meta charset="utf-8">