<?PHP 
    session_start();
    $_SESSION['ch'] = 1;
    require_once('../../connect/connect.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Дайвинг-клуб Посейдон</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
        
<?PHP
        require_once('../../connect/connect.php');
        if(isset($_GET['Keye'])) {
            $sql = "SELECT * FROM `News` WHERE `id_news` = ?";
            $rez = $pdo -> prepare($sql);
            $rez -> execute(array("$_GET[Keye]"));
            $line = $rez -> fetch();        
?>
            <div class="block-menu">
                <div class="block-logo logo-admin-block">
                    <a href="../../index.php">
                        <img class="logo" src="../../img/logo.png" alt="logo">
                    </a>
                </div>
                <div id="header-menu" class="header-menu">
                    <a class="menu-list" href="../../index.php">
                        <i class="fa fa-undo"></i>
                        <span>Главная</span>
                    </a>
                    <a name="news" class="menu-list" href="../Users/index.php">
                        <span>Пользователи</span> 
                    </a>
                    <a class="menu-list" href="../Courses/index.php">
                        <span>Курсы</span> 
                    </a>
                    <a class="menu-list menu-selected" href="./index.php">
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
                    <a class="menu-list" href="../../index.php">
                        <span>Главная</span>
                    </a>
                    <a class="menu-list" href="../Users/index.php">
                        <span>Пользователи</span> 
                    </a>
                    <a class="menu-list" href="../Courses/index.php">
                        <span>Курсы</span> 
                    </a>
                    <a class="menu-list menu-selected" href="./index.php">
                        <span>Новости</span>
                    </a>
                </div>
                <div class="pop-up-menu">
                    <button href="#">
                        <i id="pop-up-menu" class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <div class="users">
                <div class="users-container">
                    <div class="users-header">
                        <h2>Изменение данных</h2>
                    </div>
<?
                        echo "
                            <form class='form-edit-block' name='formEditUser' action=''>
                                <input class='edit-input' type='hidden' name='editInp' value=".$line['id_news'].">
                                <div class='edit-block'>
                                    <div class='grid-column edit-label-block news-label-block'>
                                        <label for='name'>Название</label>
                                        <label for='newsText'>Текст</label>
                                        <label for='date'>Дата</label>
                                    </div>
                                    <div class='grid-column edit-input-block'>
                                        <input id='name' class='edit-input' type='text' name='newsName' value=".$line['news_heading'].">
                                        <input id='newsText' class='edit-input' type='text' name='newsText' value=".$line['news_text'].">
                                        <input id='date' class='edit-input' type='date' name='newsDate' value=".$line['news_date'].">
                                    </div>
                                </div>
                                <div class='edit-btn-block'>
                                    <input class='edit-btn' type='submit' name='save' value='Изменить'>
                                    <a href='./index.php' class='back-btn' type='submit' name='back'>Назад</a>
                                </div>
                            </form>
                        ";
?>
                </div>
            </div>
<?
        }

        if(isset($_GET['save'])) {
            $sql2 = "UPDATE `News` SET `news_heading` = ?, `news_text` = ?, `news_date` = ? WHERE `id_news` = ?";
            $edit = $pdo -> prepare($sql2);
            $edit -> execute(array("$_GET[newsName]", "$_GET[newsText]", "$_GET[newsDate]", "$_GET[editInp]"));
            echo "<script type='text/javascript'>location.href='./index.php'</script>";
        }
?>
    </body>
    <script src="../js/script.js"></script>
</html>