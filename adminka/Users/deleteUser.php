<?PHP 
    require_once('../../connect/connect.php');

    $sql = "DELETE FROM `Users` WHERE `id_user` = ?";
    $del = $pdo -> prepare($sql);
    $del -> execute(array("$_GET[Keyd]"));
    header('location:./index.php');
?>