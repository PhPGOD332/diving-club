<?PHP 
    $host = 'localhost';
    $db = 'divingclub';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = array (
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    );
    $pdo = new PDO($dsn, $user, $pass, $opt);

    function get_news() {
        global $pdo;
        $sqlNews = $pdo->query("SELECT * FROM `News`");
        return $sqlNews;
        echo $sqlNews;
    }

    function get_news_by_id($id) {
        global $pdo;
        $singles = $pdo -> query("SELECT * FROM `News` WHERE `id_news` = '$id'");
        foreach($singles as $single) {
            return $single;
        }
    }
?>