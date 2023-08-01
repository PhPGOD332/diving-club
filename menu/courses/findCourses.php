<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Наши курсы</title>
        <link rel="stylesheet" href="../../css/style.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="form-sign-up unvisible">
                <form action="connect/users.php" class="form-sign-up-container">
                    <div class="close-block">
                        <a class="close" href="#">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                    <h2 class="form-heading">Оставьте заявку и мы свяжемся с вами и согласуем удобное для Вас время ознакомительного погружения.</h2>
                    <table class="sign-up-table" cellspacing="0">
                        <tr>
                            <td>
                                <label for="sign-up-name">Имя:</label>
                            </td>
                            <td>
                                <input name="sign_up_name" id="sign-up-name" type="text" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="sign-up-tel-label" for="sign-up-tel">
                                    Телефон:</label>
                            </td>
                            <td>
                                <input name="sign_up_tel" id="sign-up-tel" class="sign-up-tel-input" type="tel" placeholder="+7 (XXX) XXX-XX-XX" maxlength="11" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="sign-up-mail">Почта:</label>
                            </td>
                            <td>
                                <input name="sign_up_mail" id="sign-up-mail" type="email">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="sign-up-btn" id="sign-up-btn" class="sign-up-btn">   
                </form>
                <?PHP
                    if(isset($_GET['sign-up-btn'])) {
                        $sql = "INSERT INTO `users` SET `user_name` = ?, `user_tel` = ?, `user_mail` = ?";
                        $ins = $pdo -> prepare($sql);
                        $ins -> execute(array("$_GET[sign_up_name]", "$_GET[sign_up_tel]", "$_GET[sign_up_mail]"));
                        echo '<script type="text/javascript">location.href="../index.php"</script>';
                    }
                ?>
            </div>
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
                    <a class="menu-list" href="./courses.php">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="../../menu/contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div id="mobile-menu" class="mobile-menu">
                    <a class="menu-list" href="../../index.php">
                        <span>Главная</span>
                    </a>
                    <a class="menu-list" href="../news.php">
                        <span>Новости</span> 
                    </a>
                    <a class="menu-list" href="../about-us.html">
                        <span>О нас</span> 
                    </a>
                    <a class="menu-list" href="#">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="../../menu/contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div class="pop-up-menu">
                    <button href="#">
                        <i id="pop-up-menu" class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="block services-all services-all result">
                <div class="services-all-container">
                    <div class="find-block">
                        <form action="" class="find-form">
                            <input class="find-input" type="text" name="find" id="find">
                            <input class="find-btn" type="submit" name="findBtn" id="find-btn" value="Найти">
                        </form>
                    </div>
                <?PHP
                    require_once('../../connect/connect.php');
                    if(isset($_GET['findBtn'])) {
                ?>
                        <div class="result-heading" id="result">
                            <h2>Результаты поиска</h2>
                        </div>
                <?
                        $sql = "SELECT `course_name`, `course_description`, `course_price`, `course_img` FROM `Courses` WHERE `course_name` lIKE ?";
                        $result = $pdo -> prepare($sql);
                        $result -> execute(array("$_GET[find]"));
                        $line = $result -> fetchAll();
                        $count = count($line);

                        if($count > 0) {
                            foreach ($line as $Pole) {
                                echo "
                                    
                                        
                                    <div class='services-all-result'>  
                                        <div class='result-card'> 
                                            <div class='result-card-img'>  
                                                <img src='".
                                                $Pole['course_img'].
                                                "
                                                '>
                                            </div>
                                            <div class='result-card-text'>
                                                <h2>". 
                                                    $Pole['course_name'].
                                                "</h2>
                                                <p>".
                                                    $Pole['course_description'].
                                                "</p>
                                            </div>
                                            <div class='result-btn-block-subm'>
                                                <span>Цена: ".$Pole['course_price']." рублей</span>
                                                <a href='#' class='header-btn' name='header-btn'>Записаться</a>
                                            </div>
                                        </div>
                                    
                                ";
                            }
                        } else {
                            echo "Ничего не найдено";
                        }
                    }
                ?>
                        <div class='result-btn-block'>
                                <a href='./courses.php' class='result-btn'>Назад</a>
                            </div>
                    </div>
                </div>
            </div>
            <div style="position: absolute; bottom: 0; left: 0; right: 0;" class="footer">
                <div class="footer-container">
                    <div class="footer-logo-block">
                        <a href="./index.php ">
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
    <script src="../../js/script_header.js"></script>
</html>