<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
        '/includes/helpers.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Управление автоматизации</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<link rel="stylesheet" href="./css/bootstrap.min.css">-->
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
        <div class="wrap">
            <div class="container lead">
                <div class="row">
                    <div class="col-7">
                        <a class="mx-5" href="./index.php">
                            <!--<img src="./img/logo_car.png" width="200" height="57" alt="">-->
                            <div class="text-light">
                                <strong>
                                    <div>Messi.bet</div> 
                                </strong>
                            </div>
                        </a>
                    </div>
                    <div class="col-5">
                        <ul class="nav justify-content-end mt-4 text-light">
                            <li class="nav-item">
                                <a class="nav-link url" href="./index.php">Earn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link url" href="?structure">Our achievements</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link url" href="?licenses">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link url" href="?licenses">Contacts</a>
                            </li>
                        </ul>

                    </div>  
                </div>
            </div>
            <div class="container lead">
                <?php // if (sign_up()): ?>
                <!--                    <div class="alert alert-success" role="alert">
                                        Отлично! Регистрация успешно завершена. Теперь Вы можете пользоваться всеми возможностями сайта!
                                    </div>-->
                <?php // endif; ?>
                <?php // if ($_SESSION['orderIsDone'] == true): ?>
                <!--                    <div class="alert alert-success" role="alert">
                                        Поздравляем! Запись оформлена. Ждем Вас,  <?php // htmlout($_SESSION['firstName'] . ', на ' . $_SESSION['vehicle'] . ' ' . $_SESSION['date']);                    ?>
                                    </div>-->
                <?php // endif; ?>
                <div class="row">
                    <div class="col-7">
                        <div class="text-light mt-3">
                            <p>Мы <em>строжайше</em> проектируем, выполняем монтаж и наладку:</p>
                            <p class="ml-5 mb-0">-- АСУТП;</p>
                            <p class="ml-5 mb-0">-- систем пожарной сигнализации;</p>
                            <p class="ml-5">-- систем видеонаблюдения.</p>
                            <p class="mb-0"><em>1992</em> - год, когда мы все здесь собрались.</p>
                            <p class="mb-0"><em>2520</em> промышленных объектов бережно переданы в эксплуатацию.</p>
                            <p><em>490</em> уж очень увлеченных специалистов в составе.</p>
                            <!--                            <form action="" method="post">
                                                            <input type="hidden" name="action" value="order">
                                                            <button type="submit" class="btn btn-light btn-lg">Подать заявку...</button>
                                                        </form>-->
                        </div>
                    </div>

                    <div class="col-5">
                        <?php
//                        if (userIsLoggedIn()) {
//                            echo " Hi, " . $_SESSION['first_name'];
//                            include './logout.inc.html.php';
//                        } else {
//                            include './login.html.php';
//                        }
//                        
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./js/jquery-3.3.1.slim.min.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
        <script src="./js/bootstrap.min.js"></script>
    </body>
</html>
