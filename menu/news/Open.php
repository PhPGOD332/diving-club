<?PHP 
    session_start();
    require_once('../../connect/connect.php');
    $single = get_news_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Новости</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="block-menu">
                <div class="block-logo">
                    <a href="../../index.php">
                        <img class="logo" src="../../img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="header-menu" class="header-menu">
                    <a class="menu-list" href="../../index.php">
                        <span>Главная</span>
                    </a>
                    <a name="news" class="menu-list" href="../news.php">
                        <span>Новости</span>
                    </a>
                    <a class="menu-list" href="../about-us.html">
                        <span>О нас</span>
                    </a>
                    <a class="menu-list" href="../courses/courses.php">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="../contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div id="mobile-menu" class="mobile-menu">
                    <a class="menu-list" href="../index.php">
                        <span>Главная</span>
                    </a>
                    <a class="menu-list menu-selected" href="#">
                        <span>Новости</span>
                    </a>
                    <a class="menu-list" href="./about-us.html">
                        <span>О нас</span>
                    </a>
                    <a class="menu-list" href="../courses/courses.php">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="../contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div class="pop-up-menu">
                    <button href="#">
                        <i id="pop-up-menu" class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="news-content-open news-content block">
                <div class="news-container">
                    <h1><? echo $single['news_heading'];?></h1>
                    <p class="news-text"><? echo $single['news_text'];?></p>
                    <p class="news-date"><? echo $single['news_date'];?></p>
                    <a href="../news.php" class="back-btn">Назад</a>
                </div>
            </div>
            <div class="footer open-footer">
                <div class="footer-container">
                    <div class="footer-logo-block">
                        <a href="../../index.php ">
                            <img class="logo" src="../../img/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="footer-text-block">
                        <span class="text-up">УЧЕБНЫЕ ПРОГРАММЫ</span>
                        <span class="text-bottom">© 2020 Все права защищены. Сайт не является публичной офертой.</span>
                    </div>
                    <div class="footer-icons-block">
                        <a href="#">
                            <i class="fab fa-vk"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-telegram-plane"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../../js/script.js"></script>
</html>