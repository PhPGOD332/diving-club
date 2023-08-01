<?PHP 
    session_start();
    $_SESSION['ch'] = 1;
    require_once('../connect/connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Дайвинг-клуб Посейдон</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
    <?PHP
            if(!isset($_SESSION['autorized'])) {
                require_once('login.php');
            } else {
    ?>
        <div class="block-menu">
            <div class="block-logo logo-admin-block">
                <a href="../index.php">
                    <img class="logo" src="../img/logo.png" alt="logo">
                </a>
            </div>
            <div id="header-menu" class="header-menu">
                <a class="menu-list" href="../index.php">
                    <i class="fa fa-undo"></i>
                    <span>Главная</span>
                </a>
                <a name="news" class="menu-list" href="./Users/index.php">
                    <span>Пользователи</span> 
                </a>
                <a class="menu-list" href="./Courses/index.php">
                    <span>Курсы</span> 
                </a>
                <a class="menu-list" href="./News/index.php">
                    <span>Новости</span>
                </a>
            </div>
            <div class="profile">
                <span>
    <?
                    echo $_SESSION['login'];
    ?>
                </span>
                <a href="./logout.php">Выйти</a>
            </div>
            <div id="mobile-menu" class="mobile-menu mob-menu-admin">
                <a class="menu-list" href="../index.php">
                    <span>Главная</span>
                </a>
                <a class="menu-list" href="./Users/index.php">
                    <span>Пользователи</span> 
                </a>
                <a class="menu-list" href="./Courses/index.php">
                    <span>Курсы</span> 
                </a>
                <a class="menu-list" href="./News/index.php">
                    <span>Новости</span>
                </a>
            </div>
            <div class="pop-up-menu">
                <button href="#">
                    <i id="pop-up-menu" class="fa fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="admin-main-block">
            <div class="admin-container">
                <h2>Добро пожаловать <span class="meaning"><?echo $_SESSION['login'];?></span>, мы рады тебя видеть!</h2>
                <p>Выбери, что нужно изменить:</p>
                <div class="admin-links">
                    <a href="./Users/index.php">Таблица "Пользователи"</a>
                    <a href="./Courses/index.php">Таблица "Курсы"</a>
                    <a href="./News/index.php">Таблица "Новости"</a>
                </div>
            </div>
        </div>
    <?
            }
    ?>
    </body>
    <script src="../js/script.js"></script>
</html>