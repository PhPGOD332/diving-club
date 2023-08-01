<?PHP 
    require_once('../connect/connect.php');
    require_once('../index.php');
    $user_name = $_GET['sign-up-name'];
    $user_tel = $_GET['sign-up-tel'];
    $user_mail = $_GET['sign-up-mail'];

    if(isset($_GET['sign-up-btn'])) {
        $query = 'INSERT INTO `Users` (`id_user`, `user_name`, `user_tel`, `user_mail`) VALUES (NULL,' + $user_name + ', ' + $user_tel + ', ' + $user_mail + ')';
    }
?>