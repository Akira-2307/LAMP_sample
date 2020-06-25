<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'sugano';
$password = 'Morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET['id'];
​
    $sql = "delete form user where id=id";
    $stmt = $sbn->prepare($sql);
    $params = array(';id' => $id);
    $atmt->execute($params);

    header('Location: index.php?fg-1');
} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg = 2? err=$e -> getMessage()');
    exit();
}
?>