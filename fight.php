<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
$queryUsers = mysqli_query($connect,"SELECT * FROM users WHERE id= " .$_SESSION['session_username']);
$rowUsers = $queryUsers->fetch_assoc();
$queryCol = mysqli_query($connect,"SELECT * FROM columns");
$queryCountry = mysqli_query($connect,"SELECT * FROM countries");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <section class="place placeF bg-dark" style="height:100vh;">
        <div class="col" style="height:100vh;">
            <div class="row d" style="height:9vh;margin-bottom:300px;">
                <div class="col-6">
                    <div class="row" style="height:100%;">
                        <div class="col d-flex">
                            <div class="test my-auto mr-3">
                                <p class="test-text">B</p>
                            </div>
                            <p class="logo my-auto">Bee Bop</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row text-white d-flex" style="height:100%;">
                        <div class="col-3 d-flex mx-auto">
                            <a href="#" class="nav-links m-auto text-white">Новости</a>
                        </div>
                        <div class="col-3 d-flex mx-auto">
                            <a href="board.php" class="nav-links m-auto text-white">Доска</a>
                        </div>
                        <div class="col-3 d-flex mx-auto">
                            <a href="#" class="nav-links m-auto text-white">Дом</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5 w-100">
                <div class="col-6 mx-auto">
                    <div class="row">
                        <?php 
                            for ($i=0; $i < $queryCountry->num_rows; $i++) { 
                                
                                $rowCountry =  $queryCountry->fetch_assoc();
                            ?>
                        <div class="col d-flex">
                            <h2 class="text-white mx-auto"><?php echo $rowCountry['country'];?>: <?php echo $rowCountry['points'];?></h2>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/Scrollify-master/jquery.scrollify.js"></script>
</body>

</html>
