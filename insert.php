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
    $sql = "insert into user values (:id, :name, :age)";
    $stmt = $sbn->prepare($sql);
    $params = array(';id' => $id, ':name' => $name, ':age' => $age);
    $atmt->execute($params);

    header('Location: index.php?fg-1');
} catch (PDOException $e) {
    //echo "接続失敗: " . $e->getMessage() . "\n";
    header('Location: index.php?fg = 1? err=$e -> getMessage()');
    exit();
}
?>
