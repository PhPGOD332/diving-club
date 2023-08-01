<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Дайвинг-клуб Посейдон</title>
        <link rel="stylesheet" href="css/style.css">
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
                    <a href="index.php">
                        <img class="logo" src="./img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="header-menu" class="header-menu">
                    <a class="menu-list menu-selected" href="#">
                        <span>Главная</span>
                    </a>
                    <a name="news" class="menu-list" href="./menu/news.php">
                        <span>Новости</span>
                    </a>
                    <a class="menu-list" href="./menu/about-us.html">
                        <span>О нас</span>
                    </a>
                    <a class="menu-list" href="./menu/courses/courses.php">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="./menu/contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div id="mobile-menu" class="mobile-menu">
                    <a class="menu-list menu-selected" href="#">
                        <span>Главная</span>
                    </a>
                    <a class="menu-list" href="./menu/news.php">
                        <span>Новости</span>
                    </a>
                    <a class="menu-list" href=".menu/about-us.html">
                        <span>О нас</span>
                    </a>
                    <a class="menu-list" href="./menu/courses/courses.php">
                        <span>Курсы</span>
                    </a>
                    <a class="menu-list" href="./menu/contacts.html">
                        <span>Контакты</span>
                    </a>
                </div>
                <div class="pop-up-menu">
                    <button href="#">
                        <i id="pop-up-menu" class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="header">
                <div class="header-container">
                    <div class="header-text-container">
                        <p>Курсы дайвинга с получением международных сертификатов PADI и NDL</p>
                        <h1>Обучение дайвингу в Нижнем Тагиле</h1>
                    </div>
                    <div class="header-btn-container">
                        <a href="#" class="header-btn" name="header-btn">Записаться</a>
                    </div>
                </div>
            </div>
            <div class="block proposal">
                <div class="proposal-container">
                    <div class="head-block">
                        <h2>Что предлагает дайвинг клуб <span class="meaning">"Посейдон"</span></h2>
                    </div>
                    <div class="proposal-container-text">
                        <p>Квалифицированные инструкторы PADI, имеющие многочасовой опыт
                            погружений и занимающиеся подводным плаванием в течение
                            многих лет, обстоятельно и терпеливо расскажут Вам все, что необходимо знать
                            дайверу, обучат необходимым навыкам и позаботятся о том, чтобы
                            они были закреплены на практике.</p>
                    </div>
                    <div class="proposal-container-imgs">
                        <img src="img/photo1.jpg" alt="">
                        <img src="img/photo2.jpg" alt="">
                        <img src="img/photo3.jpg" alt="">
                        <img src="img/photo4.jpg" alt="">
                        <img src="img/photo5.jpg" alt="">
                        <img src="img/photo6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="block services">
                <div class="services-container">
                    <div class="head-block">
                        <h2>Наши <span class="meaning">курсы</span> по дайвингу</h2>
                    </div>
                    <div class="services-cards">
                        <div class="services-card left-card">
                            <h2>Курс <span class="meaning">"Open Water Diver"</span></h2>
                            <ul class="services-card-list">
                                <li>Курс - 1 занятие по теоретической подготовке + 1 дайвинг занятие в бассейне;</li>
                                <li>Стоимость курса - 23000 рублей;</li>
                                <li>График посещения - свободный, в удобные для студента дни;</li>
                                <li>Занятия походят в группе 1-2 человека.</li>
                            </ul>
                            <div class="services-card-bottom">
                                <span>23 000 руб</span>
                                <a href="./menu/courses/findCourses.php" class="services-btn">Подробнее</a>
                            </div>
                        </div>
                        <div class="services-card">
                            <h2>Курс <span class="meaning">"Advanced Open Water Diver"</span></h2>
                            <ul class="services-card-list">
                                <li>Базовый курс - 1 занятие по теоретической подготовке + 4 дайвинг занятия в бассейне;</li>
                                <li>График посещения - свободный, в удобные для студента дни;</li>
                                <li>Занятия проходят в группе 2-4 человека;</li>
                                <li>Стоимость курса - 10000 рублей.</li>
                            </ul>
                            <div class="services-card-bottom">
                                <span>10 000 руб</span>
                                <a href="./menu/courses/findCourses.php" class="services-btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-container">
                    <div class="footer-logo-block">
                        <a href="index.php ">
                            <img class="logo" src="./img/logo.png" alt="logo">
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
    <script src="js/script.js"></script>
    <script src="js/script_header.js"></script>
</html>