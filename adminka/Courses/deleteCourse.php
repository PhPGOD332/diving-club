<?PHP 
    require_once('../../connect/connect.php');

    $sql = "DELETE FROM `Courses` WHERE `id_course` = ?";
    $del = $pdo -> prepare($sql);
    $del -> execute(array("$_GET[Keyd]"));
    header('location:./index.php');
?>