<?PHP 
    require_once('../../connect/connect.php');

    $sql = "DELETE FROM `News` WHERE `id_news` = ?";
    $del = $pdo -> prepare($sql);
    $del -> execute(array("$_GET[Keyd]"));
    header('location:./index.php');
?>