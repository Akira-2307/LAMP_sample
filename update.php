<?php
$dsn = 'mysql:dbname=sample_db;host=localhost;';
$user = 'sugano';
$password = 'Morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
​
    $sql = "update user set name = :name, age = :age where id = id";
    $stmt = $sbn->prepare($sql);
    $params = array(';id' => $id, ':name' => $name, ':age' => $age);
    $atmt->execute($params);

    header('Location: index.php?fg-1');
} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg = 2? err=$e -> getMessage()');
    exit();
}
?>
