<?php 
session_start();
$_SESSION['session_username'] = $_SESSION['session_username'];
include("connect.php");
$queryUsers = mysqli_query($connect,"SELECT * FROM users WHERE id= " .$_SESSION['session_username']);
$rowUsers = $queryUsers->fetch_assoc();
$queryCols = mysqli_query($connect,"SELECT * FROM columns WHERE userId= " .$_SESSION['session_username']);
$rowCols = $queryCols->fetch_assoc();
//$query = mysqli_query($connect,'SELECT * FROM posts INNER JOIN insta ON posts.user_id = insta.id ORDER BY posts.id DESC');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="place">
        <div class="col">
            <div class="row imgBack" style="height:100vh">
                <div class="col">
                    <div class="row d" style="height:9vh">
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
                            <div class="row text-white" style="height:100%;">
                                <div class="col-3 d-flex">
                                    <a href="#" class="nav-links m-auto text-white">Новости</a>
                                </div>
                                <div class="col-3 d-flex">
                                    <a href="#" class="nav-links m-auto text-white">Битва</a>
                                </div>
                                <div class="col-3 d-flex">
                                    <a href="#" class="nav-links m-auto text-white">Дом</a>
                                </div>
                                <div class="col-3 d-flex">
                                    <a href="reg.php" class="nav-links m-auto text-white">Войти</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="height:90%;">
                        <div class="col d-flex">
                            <div class="row my-auto" style="height:60%;">
                                <div class="col-6 offset-1">
                                    <div class="row">
                                        <p class="quote text-white">Возьми идею. Сделайте ее своей жизнью - думай о ней, мечтай о ней живи ею.</p>
                                    </div>
                                    <div class="row" style="height:12%;">
                                        <a href="reg.php">
                                            <button class="btn btn-warning mr-5 move">
                                                Призыв к действию
                                            </button>
                                        </a>

                                        <a href="reg.php">
                                            <button class="btn btn-outline-warning ml-4">
                                                Второе к действию
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <img src="img/surfing_monochromatic%201.svg" class="niceImg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="place place2" style="">
        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="row d-flex">
                        <p class="headingInSectTwo mx-auto mt-5 mb-3">Кратко о <span class="text-warning">Bee Bop</span></p>
                    </div>
                    <div class="row">
                        <div class="col-6 mx-auto">
                            <p class=" afterHead">Bee Bop - зарабатывайте баллы, конкурируя со своими коллегами</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="row d-flex">
                        <div class="info col-md-3 mx-auto">
                            <div class="row" style="height:10%;">
                                <div class="col colTest">
                                    01
                                </div>
                            </div>
                            <div class="row d-flex" style="height:90%;">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <img src="img/undraw_Portfolio_update_re_jqnp%201.svg" class="w-100" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row d-flex">
                                                <p class="pCol mx-auto">Задания</p>
                                            </div>
                                            <div class="row d-flex">
                                                <p class="p2col mx-auto">
                                                    Сражайтесь со своими коллегами выполняя задания
                                                </p>
                                            </div>
                                            <div class="row d-flex">
                                                <a class=" mx-auto" href="#"><button class="btn mx-auto btn-warning2 btnP" style="border-radius:17px;">ПОДРОБНОСТИ</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info col-md-3 mx-auto">
                            <div class="row" style="height:10%;">
                                <div class="col colTest">
                                    02
                                </div>
                            </div>
                            <div class="row d-flex" style="height:70%;">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <img src="img/undraw_Scrum_board_re_wk7v%201.svg" class="w-100" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row d-flex">
                                                <p class="pCol mx-auto">Работа в команде</p>
                                            </div>
                                            <div class="row d-flex">
                                                <p class="p2col mx-auto">
                                                    Участник команды обязан направить свои силы, знания и возможности на достижение поставленных перед командой целей.
                                                </p>
                                            </div>
                                            <div class="row d-flex">
                                                <a class=" mx-auto" href="#"><button class="btn btn-warning2 btnP" style="border-radius:17px;">ПОДРОБНОСТИ</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="info col-md-3 mx-auto">
                            <div class="row" style="height:10%;">
                                <div class="col colTest">
                                    03
                                </div>
                            </div>
                            <div class="row d-flex" style="height:90%;">
                                <div class="col-10 mx-auto">
                                    <div class="row">
                                        <img src="img/undraw_Portfolio_update_re_jqnp%201.svg" class="w-100" alt="">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row d-flex">
                                                <p class="pCol mx-auto">Задания</p>
                                            </div>
                                            <div class="row d-flex">
                                                <p class="p2col mx-auto">
                                                    Сражайтесь со своими коллегами выполняя задания
                                                </p>
                                            </div>
                                            <div class="row d-flex" style="margin-top:auto;">
                                                <a class=" mx-auto" href="#"><button class="btn mx-auto btn-warning2 btnP" style="border-radius:17px;">ПОДРОБНОСТИ</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="place place3">
        <div class="col h-100">
            <div class="row" style="height:70%;">
                <div class="col colImg">

                </div>
                <div class="col">
                    <div class="row d-flex mt-5">
                        <p class="headingInInfo mx-auto mt-5">
                            Для чего предзначена?
                        </p>
                    </div>
                    <div class="row d-flex">
                        <p class="afterHeadingInfo mx-auto">
                            Наша платформа предназначена, для всех видов компаний и предприятий. Мы сможем помочь вам дать мотивацию сражаться со своими коллегами выполняя задания и зарабатывая баллы, благодаря которым у кого наберется больше баллов, той команде, даётся поощрительные призы от директора компаний. <br> <br> <span class="text-warning" style="font-weight: bold;">Bee Bop</span> - лучшая платформа, для продуктивной работы
                        </p>
                    </div>
                </div>
            </div>
            <div class="row bg-warning d-flex" style="height:30%;">
                <div class="col-5 mx-auto d-flex">
                    <div class="row d-flex my-auto mx-auto">
                        <a href="reg.php" class="my-auto mx-auto">
                            <button class="btn btn-outline-dark mx-auto">
                                <h2 class="quote mx-auto">
                                    Призыв к действию!
                                </h2>
                            </button>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="place place4" style="height:100vh;">
        <div class="col h-100">
            <div class="row lolkek" style="height:70%;">
                <div class="col colImg3">
                    <div class="row d-flex mt-5">
                        <p class="headingInInfo mt-5" style="margin-left:10%;">
                            Для чего предзначена?
                        </p>
                    </div>
                    <div class="row d-flex">
                        <div class="col-8 ml-5">
                            <div class="row">
                                <p class="afterHeadingInfo2">
                                    БРОСЬ ВЫЗОВ СЕБЕ! БОРИСЬ, ЗА БУДУЩЕЕ О КОТОРОМ МЕЧТАЕШЬ. ЗАДУМАЙСЯ О НЕЙ
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col colImg2">
                
                </div>
            </div>
        </div>
    </section>
    <section class="place place5" style="height:70vh;">
        <div class="col">
            <div class="row">
                <p class="pFooter">
                    О сервисе
                </p>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/Scrollify-master/jquery.scrollify.js"></script>
    <script>
        //настройки скролла https://github.com/lukehaas/Scrollify
        $(function() {
            $.scrollify({
                //Название секций скролла
                section: ".place",
                //Скорость  скролла
                scrollSpeed: 1500,
                //Название секции где стандартный скролл
                standardScrollElements: ".standartScroll",
                updateHash: false,
            });
        });

    </script>
</body>

</html>
