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
<?
    if(isset($_GET['Ins'])) {
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
                <a name="news" class="menu-list menu-selected" href="../index.php">
                    <span>Пользователи</span> 
                </a>
                <a class="menu-list" href="../Courses/index.php">
                    <span>Курсы</span> 
                </a>
                <a class="menu-list" href="../News/index.php">
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
                <a class="menu-list menu-selected" href="./index.php">
                    <span>Пользователи</span> 
                </a>
                <a class="menu-list" href="../Courses/index.php">
                    <span>Курсы</span> 
                </a>
                <a class="menu-list" href="../News/index.php">
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
                    <h2>Добавление данных</h2>
                </div>
                <form class='form-edit-block' name='formEditUser' action=''>
                    <div class='edit-block'>
                        <div class='grid-column edit-label-block'>
                            <label for='name'>Имя</label>
                            <label for='tel'>Телефон</label>
                            <label for='mail'>Почта</label>
                        </div>
                        <div class='grid-column edit-input-block'>
                            <input id='name' class='edit-input' type='text' name='userName' required>
                            <input id='tel' class='edit-input' type='tel' placeholder='+7 (XXX) XXX-XX-XX' maxlength='11' name='userTel'    required>
                            <input id='mail' class='edit-input' type='email' name='userMail'>
                        </div>
                    </div>
                    <div class='edit-btn-block'>
                        <input class='edit-btn' type='submit' name='save' value='Добавить'>
                        <a href='./index.php' class='back-btn' type='submit' name='back'>Назад</a>
                    </div>
                </form>
            </div>
        </div>
<?
    }

    if(isset($_GET['save'])) {
        $sql = "INSERT INTO `Users` SET `user_name` = ?, `user_tel` = ?, `user_mail` = ?";
        $insert = $pdo -> prepare($sql);
        $insert -> execute(array("$_GET[userName]", "$_GET[userTel]", "$_GET[userMail]"));
        echo "<script type='text/javascript'>location.href='./index.php'</script>";
    }
?>
    </body>
</html>