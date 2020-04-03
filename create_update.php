<?php
function redirect($url)
{
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}
$host = 'localhost';
$db = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}


if (isset($_GET['type'])) {
    if ($_GET['type'] == 'series'){
        $serie = 1;
    } else {
        $serie = 0;
}}




$query = <<<EOT
                        INSERT INTO netland.media (country, description, language, rating, title, serie)
                        VALUES (
                            '${_POST['country']}',
                            '${_POST['description']}',
                            '${_POST['language']}',
                            '${_POST['rating']}',
                            '${_POST['title']}',
                            '${serie}'
                        );
                    EOT;

$result = $pdo->query($query)->fetch();

header("Refresh: 1; url=index.php");
exit("This will only take a second...");
