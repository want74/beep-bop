<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
$queryUsers = mysqli_query($connect,"SELECT * FROM users WHERE id= " .$_SESSION['session_username']);
$rowUsers = $queryUsers->fetch_assoc();
$queryCountry = mysqli_query($connect,"SELECT * FROM countries WHERE id =".$rowUsers['countryId']);
$rowCountry =  $queryCountry->fetch_assoc();
$queryCols = mysqli_query($connect,"SELECT * FROM columns WHERE countryId =".$rowUsers['countryId']);
$queryMembers = mysqli_query($connect,"SELECT * FROM users WHERE countryId =".$rowUsers['countryId']);
$rowMembers =  $queryMembers->num_rows;
//$query = mysqli_query($connect,'SELECT * FROM posts INNER JOIN insta ON posts.user_id = insta.id ORDER BY posts.id DESC');
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
    <section class="place placeF" style="height:100vh;">
        <div class="col">
            <div class="row d nav-d" style="height:9vh">
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
                            <a href="fight.php" class="nav-links m-auto text-white">Битва</a>
                        </div>
                        <div class="col-3 d-flex mx-auto">
                            <a href="#" class="nav-links m-auto text-white">Дом</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row my-2 border-bottom">
                <div class="col">
                    <div class="row">
                        <div class="col-2">
                            <p class="countryName">
                                <?php echo $rowCountry['country']; echo ': '; echo $rowCountry['points'];?> очков
                            </p>
                        </div>
                        <div class="col-1 d-flex">
                            <p class="countryMembers mt-2">
                                <?php echo $rowMembers;?> участник
                            </p>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>

            <!--доска-->
            <div class="row mt-4">
                <!--колонны-->
                <?php 
	 				for ($i=0; $i < $queryCols->num_rows; $i++) { 
	 					$rowCols = $queryCols->fetch_assoc();
                        
            ?>
                <div class="col-2 mx-auto colonna">
                    <div class="row">
                        <h4 class="colTitle">
                            <?php echo $rowCols['name']; ?>
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!--карточки-->
                            <?php
                                $queryCards = mysqli_query($connect,"SELECT * FROM cards WHERE colId =" .$rowCols['id']);
                                for ($s=0; $s < $queryCards->num_rows; $s++) { 
                                $rowCards = $queryCards->fetch_assoc();
                            ?>
                            <div class="row d-flex my-2">
                                <div class="col-11 mx-auto cardRow">
                                    <!--теги-->
                                    <div class="row">
                                        <div class="col-3 tag text-danger">
                                            <h6><?php echo $rowCards['tagId']; ?></h6>
                                        </div>
                                    </div>
                                    <!--контент-->
                                    <div class="row">
                                        <p class="textInCard w-100 text-break"><?php echo $rowCards['cardTitle']; ?></p>
                                    </div>
                                    <!--кнопки-->
                                    <div class="row mb-1">
                                        <form action="plusPoint.php" method="post">
                                            <?php echo "<input type='text' name='countryId' style='display:none' value=".$rowCols['id'].">"; ?>
                                            <button type="submit" class="btn btn-info njz">
                                            </button>
                                        </form>
                                        <form action="delete.php" method="post">
                                            <?php echo "<input type='text' name='id' style='display:none' value=".$rowCards['id'].">"; ?>
                                            <button type="submit" class="btn btn-info lol">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex">
                            <!--<h4 class="text-white"><?php echo $rowCountry['country'];?></h4>-->
                            <!--<form action="card.php" method="post" class="mx-auto mt-3">
                                <?php //echo "<input type='text' name='colId' style='display:none' value=".$rowCols['id'].">"; ?>
                                <?php //echo "<input type='text' name='countryId' style='display:none' value=".$rowCountry['id'].">"; ?>-->
                                <button class="btn mx-auto btn-plus">
                                    <p class="plus">Добавить</p>
                                </button>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/Scrollify-master/jquery.scrollify.js"></script>
</body>

</html>
