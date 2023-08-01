<?PHP 
    require_once('connect.php');
    $sql = "SELECT * FROM `Users`";
    $sql2 = "SELECT * FROM `Courses`";
    $sql3 = "SELECT * FROM `News`";
    
    $DATA = $pdo -> query($sql);
    $Line = $DATA -> fetchAll();

    $DATA2 = $pdo -> query($sql2);
    $Line2 = $DATA2 -> fetchAll();

    $DATA3 = $pdo -> query($sql3);
    $Line3 = $DATA3 -> fetchAll();
?>