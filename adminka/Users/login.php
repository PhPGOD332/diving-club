<?PHP
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Авторизация</title>
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>
    <?PHP
        if(!isset($_GET['enter'])) {
    ?>
            <div class="login-wrapper">
                <form class="login-block">
                    <h2>Авторизация</h2>
                    <label for="login">
                        <span>Логин</span>
                        <input id="login" name="login" type="text" required>
                    </label>
                    <label for="pass">
                        <span>Пароль</span>
                        <input type="password" name="pass" id="pass" required>
                    </label>
                    <input type="submit" name="enter" id="enter" class="enter-btn" value="Войти">
                    <a class="return" href="../../index.php">На главную</a>
                </form>
            </div>
    <?
        } else {
            if($_GET['login'] != '' and $_GET['pass'] != '') {
                $safe_login = $_GET['login'];
                $safe_pass = $_GET['pass'];
                $safe_pass = md5($safe_pass);
                require_once('../../connect/connect.php');
                $sql = "SELECT * FROM `Admins` WHERE `admin_login` LIKE ? AND `admin_password` LIKE ?";
                $rez =  $pdo -> prepare($sql);
                $rez -> execute(array("$safe_login", "$safe_pass"));
                $line = $rez -> fetchAll();
                $count = count($line);

                if($count > 0) {
                    $_SESSION['autorized'] = true;
                    $_SESSION['login'] = $_GET['login'];
                    echo '<script type="text/javascript">location.href="./index.php"</script>';
                } else {
    ?>
                    <div class="login-wrapper">
                        <form class="login-block">
                            <h2>Авторизация</h2>
                            <label class="label-login" for="login">
                                <span>Логин</span>
                                <input id="login" name="login" type="text" required>
                            </label>
                            <label class="label-pass" for="pass">
                                <span>Пароль</span>
                                <input type="password" name="pass" id="pass" required>
                            </label>
                            <input type="submit" name="enter" id="enter" class="enter-btn" value="Войти">
                            <p>Неверный логин или пароль</p>
                            <a class="return" href="../../index.php">На главную</a>
                        </form>
                    </div>
    <?
                }
            }
        }

        if(isset($_GET['exit'])) {
            $_SESSION['autorized'] = false;
        }
    ?>

    </body>
</html>